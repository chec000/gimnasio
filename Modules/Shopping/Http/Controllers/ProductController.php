<?php

namespace Modules\Shopping\Http\Controllers;

use App\Helpers\SessionHdl;
use App\Helpers\ShoppingCart;
use App\Helpers\TranslatableUrlPrefix;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Modules\Admin\Http\Controllers\AdminController as Controller;
use Modules\Shopping\Entities\CategoryFilter;
use Modules\Shopping\Entities\ComplementaryProducts;
use Modules\Shopping\Entities\CountryProduct;
use Modules\Shopping\Entities\GroupCountry;
use Modules\Shopping\Entities\GroupProduct;
use PageBuilder;
use Response;
use View;

class ProductController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function products(Request $request) {
        $config = country_config(SessionHdl::getCorbizCountryKey());

        ShoppingCart::validateProductWarehouse(SessionHdl::getCorbizCountryKey(), SessionHdl::getWarehouse());

        # Validar marca
        if (SessionHdl::getParentBrandID() != 0 && SessionHdl::hasParentBrands()) {
            foreach (SessionHdl::getParentBrands() as $brand) {
                if ($brand->is_main == 1) {
                    return redirect($brand->domain.route(TranslatableUrlPrefix::getRouteName(SessionHdl::getLocale(), ['products', 'index']), [], false));
                }
            }
        }

        # Categorías y sistemas por marca
        $categories = GroupCountry::getByCountryAndBrand(SessionHdl::getCountryID(), SessionHdl::getBrandID(), 1, true);
        $systems    = GroupCountry::getByCountryAndBrand(SessionHdl::getCountryID(), SessionHdl::getBrandID(), 2);

        # Productos destacados por categoría
        $products = [];
        foreach ($categories as $cat) {
            $products[$cat->id] = CountryProduct::getAllByCategory($cat->id, $cat->country_id, SessionHdl::getLocale(), false, true);
        }

        return View::make('shopping::frontend.products', [
            'brand'            => SessionHdl::getBrandName(),
            'categories'       => $categories,
            'countryId'        => SessionHdl::getCountryID(),
            'currency'         => SessionHdl::getCurrencyKey(),
            'isShoppingActive' => $config['shopping_active'],
            'isWSActive'       => $config['webservices_active'],
            'systems'          => $systems,
            'shoppingCart'     => ShoppingCart::getItems(SessionHdl::getCorbizCountryKey()),
            'subtotal'         => ShoppingCart::getSubtotalFormatted(SessionHdl::getCorbizCountryKey(), SessionHdl::getCurrencyKey()),
            'points'           => ShoppingCart::getPoints(SessionHdl::getCorbizCountryKey()),
            'products'         => $products
        ]);
    }

    public function category(Request $request, $category_slug) {
        $config      = country_config(SessionHdl::getCorbizCountryKey());
        $category    = GroupCountry::whereTranslation('slug', $category_slug)->where('country_id', SessionHdl::getCountryID())->where('group_id', 1)->first();

        ShoppingCart::validateProductWarehouse(SessionHdl::getCorbizCountryKey(), SessionHdl::getWarehouse());

        $isShoppingActive = $config['shopping_active'];
        $isWSActive       = $config['webservices_active'];
        $locale           = SessionHdl::getLocale();

        if ($category == null || $category->active == 0 || $category->group_id != 1) {
            return redirect()->route(TranslatableUrlPrefix::getRouteName($locale, ['products', 'index']));
        }

        if (SessionHdl::getBrandID() != $category->brandGroup->brand->id) {
            return redirect(str_replace(SessionHdl::getBrandUrl(), $category->brandGroup->brand->domain, url()->current()));
        }

        $categories = GroupCountry::getByCountryAndBrand(SessionHdl::getCountryID(), SessionHdl::getBrandID(), 1, true);

        $countryGroupId = $category->id;
        if ($request->has('f')) {
            $filter = CategoryFilter::find($request->input('f'));

            if ($category->brandGroup->brand->id != $filter->filter->brandGroup->brand->id) {
                return redirect()->route(TranslatableUrlPrefix::getRouteName($locale, ['products', 'index']));
            }

            if ($filter != null) {
                $countryGroupId = $filter->filter_country_id;
            }
        }

        $products = CountryProduct::getFilteredByGroup($countryGroupId);
        $filters  = CategoryFilter::where('category_country_id', $category->id)->where('active', 1)->get();

        $showSystemTab = GroupCountry::getByCountryAndBrand(SessionHdl::getCountryID(), SessionHdl::getBrandID(), 2)->count() > 0;

        return View::make('shopping::frontend.categories', [
            'categories'       => $categories,
            'category'         => $category,
            'products'         => $products,
            'filters'          => $filters,
            'currency'         => SessionHdl::getCurrencyKey(),
            'isShoppingActive' => $isShoppingActive,
            'isWSActive'       => $isWSActive,
            'showSystemTab'    => $showSystemTab,
            'shoppingCart'     => ShoppingCart::getItems(SessionHdl::getCorbizCountryKey()),
            'subtotal'         => ShoppingCart::getSubtotalFormatted(SessionHdl::getCorbizCountryKey(), SessionHdl::getCurrencyKey()),
            'points'           => ShoppingCart::getPoints(SessionHdl::getCorbizCountryKey())
        ]);
    }

    public function system(Request $request, $system_slug) {
        $config      = country_config(SessionHdl::getCorbizCountryKey());
        $system      = GroupCountry::whereTranslation('slug', $system_slug)->where('country_id', SessionHdl::getCountryID())->where('group_id', 2)->first();

        ShoppingCart::validateProductWarehouse(SessionHdl::getCorbizCountryKey(), SessionHdl::getWarehouse());

        $isShoppingActive = $config['shopping_active'];
        $isWSActive       = $config['webservices_active'];

        if ($system == null || $system->active == 0 || $system->group_id != 2) {
            return redirect()->route(TranslatableUrlPrefix::getRouteName(SessionHdl::getLocale(), ['products', 'index']));
        }

        if (SessionHdl::getBrandID() != $system->brandGroup->brand->id) {
            return redirect(str_replace(SessionHdl::getBrandUrl(), $system->brandGroup->brand->domain, url()->current()));
        }

        $categories  = GroupCountry::getByCountryAndBrand(SessionHdl::getCountryID(), SessionHdl::getBrandID(), 1);
        $products    = CountryProduct::getFilteredByGroup($system->id);

        $showSystemTab = GroupCountry::getByCountryAndBrand(SessionHdl::getCountryID(), SessionHdl::getBrandID(), 2)->count() > 0;

        return View::make('shopping::frontend.systems', [
            'categories'       => $categories,
            'system'           => $system,
            'products'         => $products,
            'currency'         => SessionHdl::getCurrencyKey(),
            'isShoppingActive' => $isShoppingActive,
            'isWSActive'       => $isWSActive,
            'showSystemTab'    => $showSystemTab,
            'shoppingCart'     => ShoppingCart::getItems(SessionHdl::getCorbizCountryKey()),
            'subtotal'         => ShoppingCart::getSubtotalFormatted(SessionHdl::getCorbizCountryKey(), SessionHdl::getCurrencyKey()),
            'points'           => ShoppingCart::getPoints(SessionHdl::getCorbizCountryKey())
        ]);
    }

    public function detail($product_slug) {
        $config = country_config(SessionHdl::getCorbizCountryKey());

        ShoppingCart::validateProductWarehouse(SessionHdl::getCorbizCountryKey(), SessionHdl::getWarehouse());

        $isShoppingActive = $config['shopping_active'];
        $isWSActive       = $config['webservices_active'];
        $warehouse        = SessionHdl::getWarehouse();
        $locale           = SessionHdl::getLocale();

        $divider        = strrpos($product_slug, '-');
        $sku            = substr($product_slug, $divider+1);
        $product_slug   = substr($product_slug, 0, $divider);

        $countryProducts = CountryProduct::whereTranslation('slug', $product_slug)->where('country_id', SessionHdl::getCountryID())->where('active', 1)->where('delete', 0)->get();
        $countryProduct  = null;
        foreach ($countryProducts as $cp) {
            if ($cp->product->sku == $sku) {
                $countryProduct = $cp;
            }
        }

        if ($countryProduct == null) {
            return redirect()->route(TranslatableUrlPrefix::getRouteName(SessionHdl::getLocale(), ['products', 'index']));
        } else {
            if ($isShoppingActive && $isWSActive && !$countryProduct->belongsToWarehouse($warehouse)) {
                return redirect()->route(TranslatableUrlPrefix::getRouteName($locale, ['products', 'index']));
            }
        }

        $category = $countryProduct->productGroups->where('active', 1)->where('country_id', SessionHdl::getCountryID())->where('group_id', 1)->pop();
        if ($countryProduct->product->sku != $sku || $countryProduct->product->is_kit != 0) {
            return redirect()->route(TranslatableUrlPrefix::getRouteName($locale, ['products', 'index']));
        }

        if (SessionHdl::getBrandID() != $countryProduct->product->brandProduct->brand->id) {
            return redirect(str_replace(SessionHdl::getBrandUrl(), $countryProduct->product->brandProduct->brand->domain, url()->current()));
        }

        # Categorías y productos relacionados
        $categories      = GroupCountry::getByCountryAndBrand(SessionHdl::getCountryID(), SessionHdl::getBrandID(), 1);
        $relatedProducts = $countryProduct->getRelatedProducts();
        $relatedProductsTmp = [];
        foreach ($relatedProducts as $rp) {
            if ($rp->relatedProduct->product->is_kit == 0) {

                if (($isShoppingActive and $isWSActive and $rp->relatedProduct->belongsToWarehouse($warehouse)) xor (!$isShoppingActive or !$isWSActive)) {
                    $relatedProductsTmp[] = $rp;
                }
            }
        }
        $relatedProducts = collect($relatedProductsTmp);

        # Background color
        $backgroundColor = '';
        $segments = explode('/', url()->previous());
        if (isset($segments[4]) && isset($segments[5]) && in_array($segments[4], \App\Helpers\TranslatableUrlPrefix::getTranslatablePrefixesByIndex('system'))) {
            $system = GroupCountry::whereTranslation('slug', $segments[5])->where('country_id', SessionHdl::getCountryID())->where('group_id', 2)->first();
            $backgroundColor = $system->color;
        } else {
            if (!is_null($category)) {
                $backgroundColor = $category->color;
            } else {
                $system = $countryProduct->productGroups->where('active', 1)->where('country_id', SessionHdl::getCountryID())->where('group_id', 2)->pop();
                if (!is_null($system)) {
                    $backgroundColor = $system->color;
                }
            }
        }

        # Social meta info
        $urlSocialTag = \Request::url() . '?' . \App\Helpers\ShareSession::getShareEncoded(1);
        $socialTags = [
            'facebook' => [
                'title'       => $countryProduct->name,
                'type'        => 'website',
                'description' => $countryProduct->description,
                'url'         => $urlSocialTag,
                'image'       => asset($countryProduct->image),
                'site_name'   => $countryProduct->name,
            ],
            'twitter' => [
                'card'        => 'summary',
                'title'       => $countryProduct->name,
                'image'       => asset($countryProduct->image),
                'site'        => 'https://twitter.com/omnilife',
                'creator'     => 'Omnilife',
                'url'         => $urlSocialTag,
                'domain'      => \Request::root(),
                'description' => $countryProduct->description,
            ]
        ];

        $showSystemTab = GroupCountry::getByCountryAndBrand(SessionHdl::getCountryID(), SessionHdl::getBrandID(), 2)->count() > 0;
        $nutritionalTableIds = !empty(config('settings::frontend.frontend.img_nutrimental')) ? explode(',', config('settings::frontend.frontend.img_nutrimental')) : [1];

        return View::make('shopping::frontend.product_detail', [
            'categories'          => $categories,
            'category'            => $category,
            'countryProduct'      => $countryProduct,
            'relatedProducts'     => $relatedProducts,
            'currency'            => SessionHdl::getCurrencyKey(),
            'isShoppingActive'    => $isShoppingActive,
            'isWSActive'          => $isWSActive,
            'socialTags'          => $socialTags,
            'showSystemTab'       => $showSystemTab,
            'nutritionalTableIds' => $nutritionalTableIds,
            'shoppingCart'        => ShoppingCart::getItems(SessionHdl::getCorbizCountryKey()),
            'subtotal'            => ShoppingCart::getSubtotalFormatted(SessionHdl::getCorbizCountryKey(), SessionHdl::getCurrencyKey()),
            'points'              => ShoppingCart::getPoints(SessionHdl::getCorbizCountryKey()),
            'backgroundColor'     => $backgroundColor
        ]);
    }

    public function getCountryGroup(Request $request) {
        $response    = ['status' => false];
        $config      = country_config(SessionHdl::getCorbizCountryKey());

        $isShoppingActive = $config['shopping_active'];
        $isWSActive       = $config['webservices_active'];
        $warehouse        = SessionHdl::getWarehouse();

        if ($request->has('id')) {
            $countryGroup = GroupCountry::find($request->input('id'));
            $groupType    = $countryGroup->group_id == 2 ? 'system' : 'category';
            $totalPrice   = 0.0;

            if ($countryGroup != null) {

                $products = [];
                foreach ($countryGroup->groupProducts->where('active', 1) as $groupProduct) {
                    if ($groupProduct->countryProduct->product->is_kit == 0) {
                        $products[] = [
                            'name'   => $groupProduct->countryProduct->name,
                            'sku'    => $groupProduct->countryProduct->sku,
                            'price'  => $groupProduct->countryProduct->price,
                            'points' => $groupProduct->countryProduct->points,
                        ];

                        if (($isShoppingActive and $isWSActive and $groupProduct->countryProduct->belongsToWarehouse($warehouse)) xor (!$isShoppingActive or !$isWSActive) ) {
                            $totalPrice += $groupProduct->countryProduct->price;
                        }
                    }
                }

                $response['data'] = [
                    'id'          => $countryGroup->id,
                    'name'        => $countryGroup->name,
                    'description' => strip_tags($countryGroup->description),
                    'benefits'    => strip_tags($countryGroup->benefit),
                    'banner'      => asset($countryGroup->image),
                    'link'        => $countryGroup->link_banner_two,
                    'products'    => $products,
                    'total_price' => currency_format($totalPrice, SessionHdl::getCurrencyKey()),
                    'url_group'   => route(TranslatableUrlPrefix::getRouteName(SessionHdl::getLocale(), ['products', $groupType]), $countryGroup->slug),
                 ];
                $response['status'] = true;
            }
        }

        return $response;
    }
}
