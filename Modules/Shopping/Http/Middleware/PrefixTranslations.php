<?php

namespace Modules\Shopping\Http\Middleware;

use App\Helpers\TranslatableUrlPrefix;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Modules\Shopping\Entities\CountryProduct;
use Modules\Shopping\Entities\GroupCountry;

class PrefixTranslations {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {

        $lang              = Session::get('portal.main.app_locale');
        $prefixProducts    = $request->segment(1);
        $prefixGroupOrSlug = $request->segment(2);
        $groupSlug         = $request->segment(3);
        $indexRoute        = TranslatableUrlPrefix::getRouteName($lang, ['products', 'index']);

        # Products index
        if (!TranslatableUrlPrefix::isValidPrefix($prefixProducts, $lang, 'products') && ($prefixGroupOrSlug == null && $groupSlug == null)) {
            return redirect()->route($indexRoute);
        }

        # Product detail
        if ($prefixGroupOrSlug != null && !TranslatableUrlPrefix::isFromIndex($prefixGroupOrSlug, 'category') && !TranslatableUrlPrefix::isFromIndex($prefixGroupOrSlug, 'system') && $groupSlug == null) {
            $isValidProductPrefix = TranslatableUrlPrefix::isValidPrefix($prefixProducts, $lang, 'products');
            $product              = $this->getProductBySlugCountryAndLang($prefixGroupOrSlug, Session::get('portal.main.country_id'), $lang);

            if (!$isValidProductPrefix || $product == false) {
                $product = $this->getProductBySlug($prefixGroupOrSlug);

                if ($product != false) {
                    $route          = TranslatableUrlPrefix::getRouteName($lang, ['products', 'detail']);
                    $countryProduct = CountryProduct::whereTranslation('locale', $lang)->where('country_id', Session::get('portal.main.country_id'))->where('product_id', $product->product_id)->first();

                    if ($countryProduct == null) {
                        return redirect()->route($indexRoute);
                    }

                    return redirect()->route($route, $countryProduct->slug.'-'.$countryProduct->product->sku);
                } else {
                    return redirect()->route($indexRoute);
                }
            }
        }

        # Category
        if ($prefixGroupOrSlug != null && TranslatableUrlPrefix::isFromIndex($prefixGroupOrSlug, 'category') && $groupSlug != null) {
            $isValidProductPrefix  = TranslatableUrlPrefix::isValidPrefix($prefixProducts, $lang, 'products');
            $isValidCategoryPrefix = TranslatableUrlPrefix::isValidPrefix($prefixGroupOrSlug, $lang, 'category');
            $category              = $this->getGroupBySlugCountryAndLang($groupSlug, Session::get('portal.main.country_id'), $lang, 1);

            if (!$isValidProductPrefix || !$isValidCategoryPrefix || $category == false) {
                $category = $this->getGroupBySlug($groupSlug, 1);

                if ($category != false) {
                    $route          = TranslatableUrlPrefix::getRouteName($lang, ['products', 'category']);
                    $countryGroup   = GroupCountry::whereTranslation('locale', $lang)->where('country_id', Session::get('portal.main.country_id'))->where('code', $category->code)->first();

                    if ($countryGroup == null) {
                        return redirect()->route($indexRoute);
                    }

                    return redirect()->route($route, $countryGroup->slug);
                } else {
                    return redirect()->route($indexRoute);
                }
            }
        }

        # System
        if ($prefixGroupOrSlug != null && TranslatableUrlPrefix::isFromIndex($prefixGroupOrSlug, 'system') && $groupSlug != null) {
            $isValidProductPrefix = TranslatableUrlPrefix::isValidPrefix($prefixProducts, $lang, 'products');
            $isValidSystemPrefix  = TranslatableUrlPrefix::isValidPrefix($prefixGroupOrSlug, $lang, 'system');
            $system               = $this->getGroupBySlugCountryAndLang($groupSlug, Session::get('portal.main.country_id'), $lang, 2);

            if (!$isValidProductPrefix || !$isValidSystemPrefix || $system == false) {
                $system = $this->getGroupBySlug($groupSlug, 2);
                if ($system != false) {
                    $route          = TranslatableUrlPrefix::getRouteName($lang, ['products', 'system']);
                    $countryGroup   = GroupCountry::whereTranslation('locale', $lang)->where('country_id', Session::get('portal.main.country_id'))->where('code', $system->code)->first();

                    if ($countryGroup == null) {
                        return redirect()->route($indexRoute);
                    }

                    return redirect()->route($route, $countryGroup->slug);
                } else {
                    return redirect()->route($indexRoute);
                }
            }
        }

        return $next($request);
    }


    private function getProductBySlugCountryAndLang($slug, $country, $lang) {
        $divider        = strrpos($slug, '-');
        $product_slug   = substr($slug, 0, $divider);
        $countryProduct = CountryProduct::whereTranslation('slug', $product_slug)->whereTranslation('locale', $lang)->where('country_id', $country)->first();

        return $countryProduct != null ? $countryProduct : false;
    }

    private function getProductBySlug($slug) {
        $divider        = strrpos($slug, '-');
        $product_slug   = substr($slug, 0, $divider);
        $countryProduct = CountryProduct::whereTranslation('slug', $product_slug)->first();

        return $countryProduct != null ? $countryProduct : false;
    }

    private function getGroupBySlugCountryAndLang($slug, $countryId, $lang, $type) {
        $category = GroupCountry::whereTranslation('slug', $slug)->whereTranslation('locale', $lang)->where('country_id', $countryId)->where('group_id', $type)->first();

        return $category != null ? $category : false;
    }

    private function getGroupBySlug($slug, $type) {
        $category = GroupCountry::whereTranslation('slug', $slug)->where('group_id', $type)->first();

        return $category != null ? $category : false;
    }

}
