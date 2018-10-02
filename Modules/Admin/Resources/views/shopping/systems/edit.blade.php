@section('styles')
    @if ($brand->id == 1)
        <link rel="stylesheet" href="{{ asset('cms/app/css/omnilife.css') }}">
    @endif

    @if ($brand->id == 2)
        <link rel="stylesheet" href="{{ asset('cms/app/css/seytu.css') }}">
    @endif
@endsection
<div class="container">
    <a class="btn btn-info btn-sm pull-right" href="{{ route('admin.systems.index') }}" role="button">
        @lang('admin::shopping.systems.index.btn_return')
    </a>
    @if(session('msg'))
        <div class="alert alert-success" role="alert">{{ session('msg') }}</div>
    @elseif(session('errors') != null)
        <div class="alert alert-danger" role="alert">{{ session('errors')->first('msg') }}</div>
    @endif
    <h1>{!!trans('admin::shopping.systems.add.view.title-edit')!!}</h1>
    <form id="systems" method="POST" action="{{ route('admin.systems.update', [$code]) }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <input type="hidden" name="code" value="{{ $code }}">

        <div class="form-group">
            @foreach(Auth::user()->userBrandsPermission() as $uB)
                @if ($brand->id == $uB['id'])
                    <p class="lead">Brand: <strong>{{ $uB['name'] }}</strong></p>
                    <input type="hidden" name="brand_id" id="brand_id" value="{{ $brand->id }}">
                @endif
            @endforeach
        </div>

        <div class="form-group">
            <label for="global_name">{{ trans('admin::shopping.products.index.thead-product-global_name') }} *</label>
            <input type="text" name="global_name" id="global_name" class="form-control" required="required" value="{{ $globalName }}">
        </div>

        <div class="form-group">
            <label>@lang('admin::shopping.systems.add.view.form-country')</label><br />
            <ul id="countryForm" class="nav nav-tabs" role="tablist">
                @foreach($systemsByCountry as $system)
                    @if (in_array($system->country->id, $countriesByBrand))
                        <li data-country-tab="{{ $system->country->id }}" role="presentation">
                            <a href="#{{ str_replace(' ', '_', $system->country->name) }}" aria-controls="home" role="tab" data-toggle="tab">
                                {{ $system->country->name }} <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endif
                @endforeach

                @foreach($anotherCountries as $uC)
                    <li role="presentation" data-country-tab="{{ $uC->id }}">
                        <a href="#{{ str_replace(' ', '_', $uC->name) }}" aria-controls="home" role="tab" data-toggle="tab">
                            {{ $uC->name }} <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content">
                @foreach($systemsByCountry as $system)
                    @if (in_array($system->country->id, $countriesByBrand))
                        <div data-country-pane="{{ $system->country->id }}" role="tabpanel" class="tab-pane" id="{{ str_replace(' ', '_', $system->country->name) }}"> <br />

                            <div class="form-group">
                                <label for="color">{{ trans('admin::shopping.categories.index.color') }}</label>
                                <div id="bcolor_{{ $system->country->id }}_{{ $brand->id }}" class="products-page inner {{ $system->color }}"></div>
                                <select class="form-control select-color" name="color_{{ $system->country->id }}" data-brand="{{ $brand->id }}">
                                    <option value="">{{ trans('admin::shopping.categories.index.default') }}</option>
                                    @foreach ($colors as $class)
                                        <option {{ $system->color == $class ? 'selected' : '' }} value="{{ $class }}">{{ ucfirst($class) }}</option>
                                    @endforeach
                                </select>
                            </div>

                            @foreach(Auth::user()->getCountryLang($system->country->id) as $langCountry)
                                <div role="panel-group" id="accordion-{{ $system->country->id }}-{{ $langCountry->id }}">
                                    <div class="panel panel-default">
                                        <div role="tab" class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#product-language-{{ $system->country->id }}-{{ $langCountry->id }}">
                                                    {{trans('admin::shopping.products.add.second_general_tab.country-language-title') . $langCountry->language }}
                                                </a>
                                            </h4>
                                        </div>
                                        <div role="tabpanel" data-parent="#accordion" class="panel-collapse collapse" id="product-language-{{ $system->country->id }}-{{ $langCountry->id }}" >
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>@lang('admin::shopping.systems.add.input.category')*</label>
                                                            <input name="system_{{ $system->country->id }}_{{ $langCountry->id }}"
                                                                   type="text" rel="requerido_{{ $system->country->id }}"
                                                                   class="requerido requerido_{{ $system->country->id }} requerido_{{ $system->country->id }}_{{ $langCountry->id }} form-control"
                                                                   id="requerido_{{ $system->country->id }}_{{ $langCountry->id }}"
                                                                   placeholder="@lang('admin::shopping.systems.add.input.category')"
                                                                   @if (isset($system->translate($langCountry->locale_key)->name) && !empty($system->translate($langCountry->locale_key)->name))
                                                                       value="{{ $system->translate($langCountry->locale_key)->name }}"
                                                                   @else
                                                                       value="{{ old('category_'.$system->country->id.'_'.$langCountry->id) }}"
                                                                   @endif>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>{{trans('admin::shopping.systems.add.input.benefit')}}</label>
                                                            <textarea name="benefit_{{ $system->country->id }}_{{ $langCountry->id }}"
                                                                      class="form-control" rows="3"
                                                                      placeholder="@lang('admin::shopping.systems.add.input.benefit')">@if(isset($system->translate($langCountry->locale_key)->benefit) && !empty($system->translate($langCountry->locale_key)->benefit)){{ strip_tags($system->translate($langCountry->locale_key)->benefit) }}@else{{ strip_tags(old('benefit_'.$system->country->id.'_'.$langCountry->id)) }}@endif</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>@lang('admin::shopping.systems.add.input.description')</label>
                                                            <textarea name="description_{{ $system->country->id }}_{{ $langCountry->id }}"
                                                                      class="form-control" rows="3"
                                                                      placeholder="@lang('admin::shopping.systems.add.input.description')">@if(isset($system->translate($langCountry->locale_key)->description) && !empty($system->translate($langCountry->locale_key)->description)){{ strip_tags($system->translate($langCountry->locale_key)->description) }}@else{{ strip_tags(old('description_'.$system->country->id.'_'.$langCountry->id)) }}@endif</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">{{trans('admin::shopping.systems.add.input.select_banner_two')}}*</label>
                                                            <div class="input-group">
                                                                <input name="image_two_{{ $system->country->id }}_{{ $langCountry->id }}" readonly="true"
                                                                       type="text" id="image_two_{{ $system->country->id }}_{{ $langCountry->id }}"
                                                                       class="img_src requerido_{{ $system->country->id }}_{{ $langCountry->id }} form-control"
                                                                       @if(isset($system->translate($langCountry->locale_key)->image) && !empty($system->translate($langCountry->locale_key)->image))
                                                                       value="{{ $system->translate($langCountry->locale_key)->image }}"
                                                                       @else
                                                                       value="{{ old('image_two_'.$system->country->id.'_'.$langCountry->id) }}"
                                                                       @endif>
                                                                <span class="input-group-btn">
                                                                    <a href="{!! URL::to(config('admin.config.public') . '/filemanager/dialog.php?type=1&field_id=image_two_'.$system->country->id.'_'.$langCountry->id) !!}"
                                                                       class="btn btn-default iframe-btn">{{ trans('admin::countries.add_btn_image') }}
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">{{trans('admin::shopping.systems.add.input.select_banner_one')}}*</label>
                                                            <div class="input-group">
                                                                <input name="image_one_{{ $system->country->id }}_{{ $langCountry->id }}" readonly="true"
                                                                       type="text" id="image_one_{{ $system->country->id }}_{{ $langCountry->id }}"
                                                                       class="img_src requerido_{{ $system->country->id }}_{{ $langCountry->id }} form-control"
                                                                       @if(isset($system->translate($langCountry->locale_key)->image_banner) && !empty($system->translate($langCountry->locale_key)->image_banner))
                                                                       value="{{ $system->translate($langCountry->locale_key)->image_banner }}"
                                                                       @else
                                                                       value="{{ old('image_one_'.$system->country->id.'_'.$langCountry->id) }}"
                                                                        @endif>
                                                                <span class="input-group-btn">
                                                                    <a href="{!! URL::to(config('admin.config.public') . '/filemanager/dialog.php?type=1&field_id=image_one_'.$system->country->id.'_'.$langCountry->id) !!}"
                                                                       class="btn btn-default iframe-btn">{{ trans('admin::countries.add_btn_image') }}
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <hr />
                            <div class="form-group">
                                <label>@lang('admin::shopping.systems.add.view.form-link-two')</label>
                                <input name="link_two_{{ $system->country->id }}" type="text" class="form-control"
                                       placeholder="@lang('admin::shopping.systems.add.input.link_two')"
                                       @if(isset($system->link_banner_two))
                                       value="{{ $system->link_banner_two }}"
                                       @else
                                       value="{{ old('link_two_'.$system->country->id) }}"
                                        @endif>
                            </div>
                            <div class="form-group">
                                <label>@lang('admin::shopping.systems.add.view.form-link-one')</label>
                                <input name="link_one_{{ $system->country->id }}" type="text" class="form-control"
                                       placeholder="@lang('admin::shopping.systems.add.input.link_one')"
                                       @if(isset($system->link_banner))
                                           value="{{ $system->link_banner }}"
                                       @else
                                           value="{{ old('link_one_'.$system->country->id) }}"
                                       @endif>
                            </div>
                            <div class="form-group">
                                <label>@lang('admin::shopping.systems.add.view.form-active')</label>
                                <div class="radio">
                                    <label>
                                        @isset($system->active)
                                            <input type="radio" name="active_{{ $system->country->id }}" value="1" {{ $system->active == 1 ? ' checked' : '' }} > Si
                                            @else
                                            <input type="radio" name="active_{{ $system->country->id }}" value="1" checked > Si
                                        @endisset
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        @isset($system->active)
                                            <input type="radio" name="active_{{ $system->country->id }}" value="0" {{ $system->active == 0 ? ' checked' : '' }}> No
                                            @else
                                            <input type="radio" name="active_{{ $system->country->id }}" value="0" checked > No
                                        @endisset
                                    </label>
                                </div>
                            </div><br />
                            <div class="form-group">
                                <label>@lang('admin::shopping.systems.add.view.form-product-select')</label>
                                <input type="hidden" name="products_{{ $system->country->id }}" id="products_{{ $system->country->id }}" class="req_prod form-control"
                                       value="{{ isset($products[$system->country->id]) ? $products[$system->country->id]: '' }}"/>
                                <input type="hidden" name="code_{{ $system->country->id }}" id="products_{{ $system->country->id }}" class="form-control"
                                       value="{{ $code }}"/>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div id="alert_{{ $system->country->id }}" class="alert alert-danger btn-xs" role="alert" style="display: none; padding: 5px">
                                            @lang('admin::shopping.systems.add.error.select-product')
                                        </div>
                                    </div>
                                    <div class="col-xs-10">
                                        <select class="form-control" id="sel_{{ $system->country->id }}">
                                            <option id="opt_{{ $system->country->id }}" value="">
                                                @lang('admin::shopping.systems.add.input.product')
                                            </option>
                                            @foreach(Auth::user()->activeProductsByCountryAndBrand($system->country->id, $brand->id) as $prod)
                                                <option id="opt_{{$prod->id}}_{{ $system->country->id }}" value="{{$prod->id}}">{{$prod->sku}} - {{$prod->global_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xs-2">
                                        <button type="button" class="btn btn-default"
                                                onclick="addProduct({{ $system->country->id }}, {{ Auth::user()->activeProductsByCountryAndBrand($system->country->id, $brand->id) }})">
                                            @lang('admin::shopping.systems.add.view.form-add-button')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div id="alert_limit_{{ $system->country->id }}" class="alert alert-danger btn-xs" role="alert" style="display: none; padding: 5px">
                                    @lang('admin::shopping.systems.add.error.select-category')
                                </div>
                                <div id="alert_limit_home{{ $system->country->id }}" class="alert alert-danger btn-xs" role="alert" style="display: none; padding: 5px">
                                    @lang('admin::shopping.systems.add.error.select-banner')
                                </div>
                                <div id="alert_limit_category{{ $system->country->id }}" class="alert alert-danger btn-xs" role="alert" style="display: none; padding: 5px">
                                    @lang('admin::shopping.systems.add.error.select-home')
                                </div>
                                <table class="table text-center">
                                    <tr>
                                        <th class="text-center" colspan="5">@lang('admin::shopping.systems.add.view.form-product-list')</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">@lang('admin::shopping.systems.add.view.form-list-id')</th>
                                        <th class="text-center">@lang('admin::shopping.systems.add.view.form-list-sku')</th>
                                        <th class="text-center">@lang('admin::shopping.products.add.first_general_tab.form-global-name-label')</th>
                                        <th class="text-center">@lang('admin::shopping.systems.add.view.form-list-delete')</th>
                                    </tr>
                                    @foreach(Auth::user()->activeProductsByCountryAndBrand($system->country->id, $brand->id) as $prod)
                                        <tr id="dis_{{ $prod->id }}_{{ $system->country->id }}" style="display: none">
                                            <td>{{  $prod->id }}</td>
                                            <td>{{ $prod->sku }}</td>
                                            <td>{{ $prod->global_name }}</td>
                                            <td>
                                                <i id="{{$prod->id}}|{{ $system->country->name }}" class="del_btn fa fa-trash fa-2x"
                                                   aria-hidden="true" onclick="delProduct({{$prod->id}},'{{ $system->country->id }}')"></i>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    @endif
                @endforeach

                @foreach($anotherCountries as $uC)
                    <div role="tabpanel" class="tab-pane" id="{{ str_replace(' ', '_', $uC->name) }}" data-country-pane="{{ $uC->id }}"> <br />

                        <div class="form-group">
                            <label for="color">{{ trans('admin::shopping.categories.index.color') }}</label>
                            <div id="bcolor_{{ $uC->id }}_{{ $brand->id }}" class="products-page inner"></div>
                            <select class="form-control select-color" name="color_{{ $uC->id }}" data-brand="{{ $brand->id }}">
                                <option value="">{{ trans('admin::shopping.categories.index.default') }}</option>
                                @foreach ($colors as $class)
                                    <option value="{{ $class }}">{{ ucfirst($class) }}</option>
                                @endforeach
                            </select>
                        </div>

                        @foreach(Auth::user()->getCountryLang($uC->id) as $langCountry)
                            <div role="panel-group" id="accordion-{{ $uC->id }}-{{ $langCountry->id }}">
                                <div class="panel panel-default">
                                    <div role="tab" class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#product-language-{{ $uC->id }}-{{ $langCountry->id }}">
                                                {{trans('admin::shopping.products.add.second_general_tab.country-language-title') . $langCountry->language }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div role="tabpanel" data-parent="#accordion" class="panel-collapse collapse"
                                         id="product-language-{{ $uC->id }}-{{ $langCountry->id }}" >
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label >@lang('admin::shopping.systems.add.input.category') *</label>
                                                        <input name="system_{{ $uC->id }}_{{ $langCountry->id }}"
                                                               type="text" rel="requerido_{{ $uC->id }}"
                                                               class="requerido requerido_{{ $uC->id }} requerido_{{ $uC->id }}_{{ $langCountry->id }} form-control"
                                                               id="requerido_{{ $uC->id }}_{{ $langCountry->id }}"
                                                               placeholder="@lang('admin::shopping.systems.add.input.category')"
                                                               value="{{ old('category_'.$uC->id.'_'.$langCountry->id) }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>{{trans('admin::shopping.systems.add.input.benefit')}}</label>
                                                        <textarea class="form-control" rows="3"
                                                                  name="benefit_{{ $uC['id']}}_{{$langCountry['id'] }}"
                                                                  id="benefit_{{ $uC['id']}}_{{$langCountry['id'] }}"
                                                                  placeholder="@lang('admin::shopping.systems.add.input.benefit')"
                                                        >{{ old('benefit_'.$uC->id.'_'.$langCountry->id) }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>@lang('admin::shopping.systems.add.input.description')</label>
                                                        <textarea class="form-control" rows="3"
                                                                  name="description_{{ $uC->id }}_{{ $langCountry->id }}"
                                                                  placeholder="@lang('admin::shopping.systems.add.input.description')"
                                                        >{{ old('description_'.$uC->id.'_'.$langCountry->id) }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">
                                                            {{trans('admin::shopping.systems.add.input.select_banner_two')}}
                                                        </label>
                                                        <div class="input-group">
                                                            <input name="image_two_{{ $uC->id }}_{{ $langCountry->id }}" readonly="true"
                                                                   type="text" id="image_two_{{ $uC->id }}_{{ $langCountry->id }}"
                                                                   class="img_src requerido_{{ $uC->id }}_{{ $langCountry->id }} form-control"
                                                                   value="{{ old('image_two_'.$uC->id.'_'.$langCountry->id) }}">
                                                            <span class="input-group-btn">
                                                            <a href="{!! URL::to(config('admin.config.public') . '/filemanager/dialog.php?type=1&field_id=image_two_'.$uC->id.'_'.$langCountry->id) !!}"
                                                               class="btn btn-default iframe-btn">
                                                                {{ trans('admin::countries.add_btn_image') }}
                                                            </a>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">
                                                            {{trans('admin::shopping.systems.add.input.select_banner_one')}}*
                                                        </label>
                                                        <div class="input-group">
                                                            <input name="image_one_{{ $uC->id }}_{{ $langCountry->id }}" readonly="true"
                                                                   type="text" id="image_one_{{ $uC->id }}_{{ $langCountry->id }}"
                                                                   class="img_src requerido_{{ $uC->id }}_{{ $langCountry->id }} form-control"
                                                                   value="{{ old('image_one_'.$uC->id.'_'.$langCountry->id) }}">
                                                            <span class="input-group-btn">
                                                            <a href="{!! URL::to(config('admin.config.public') . '/filemanager/dialog.php?type=1&field_id=image_one_'.$uC->id.'_'.$langCountry->id) !!}"
                                                               class="btn btn-default iframe-btn">
                                                                {{ trans('admin::countries.add_btn_image') }}
                                                            </a>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <hr />
                        <div class="form-group">
                            <label for="link_two_{{ $uC->id }}">@lang('admin::shopping.systems.add.view.form-link-two')</label>
                            <input name="link_two_{{ $uC->id }}" type="text" class="form-control"
                                   placeholder="@lang('admin::shopping.systems.add.input.link_two')"
                                   value="{{ old('link_two_'.$uC->id) }}">
                        </div>
                        <div class="form-group">
                            <label for="link_one_{{ $uC->id }}">@lang('admin::shopping.systems.add.view.form-link-one')</label>
                            <input name="link_one_{{ $uC->id }}" type="text" class="form-control"
                                   placeholder="@lang('admin::shopping.systems.add.input.link_one')"
                                   value="{{ old('link_one_'.$uC->id) }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('admin::shopping.systems.add.view.form-active')</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="active_{{ $uC->id }}" value="1" @if(old('active_'.$uC->id) == null || old('active_'.$uC->id)) checked @else '' @endif>
                                    @lang('admin::shopping.systems.add.input.yes')
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="active_{{ $uC->id }}" value="0" {{ old('active_'.$uC->id) === 0 ? ' checked' : '' }}>
                                    @lang('admin::shopping.systems.add.input.no')
                                </label>
                            </div>
                        </div><br />
                        <div class="form-group">
                            <label >@lang('admin::shopping.systems.add.view.form-product-select')</label>
                            <input type="hidden" name="products_{{ $uC->id }}" id="products_{{ $uC->id }}"
                                   class="form-control req_prod" rel="sel_{{ $uC->id }}" value="{{ old('products_'.$uC->id) }}"/>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div id="alert_{{ $uC->id }}" class="alert alert-danger btn-xs" role="alert" style="display: none; padding: 5px">
                                        @lang('admin::shopping.systems.add.error.select-product-error')
                                    </div>
                                </div>
                                <div class="col-xs-10">
                                    <select class="form-control prod_sel" id="sel_{{ $uC->id }}">
                                        <option id="opt_{{ $uC->id }}" value="">
                                            @lang('admin::shopping.systems.add.input.product')
                                        </option>
                                        @foreach(Auth::user()->activeProductsByCountryAndBrand($uC->id, $brand->id) as $prod)
                                            <option id="opt_{{$prod->id}}_{{ $uC->id }}" value="{{$prod->id}}">{{$prod->sku}} - {{$prod->global_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xs-2">
                                    <button type="button" class="btn btn-default"
                                            onclick="addProduct({{ $uC->id }}, {{ Auth::user()->activeProductsByCountryAndBrand($uC->id, $brand->id) }})">
                                        @lang('admin::shopping.systems.add.view.form-add-button')
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="alert_limit_{{ $uC->id }}" class="alert alert-danger btn-xs" role="alert" style="display: none; padding: 5px">
                                @lang('admin::shopping.systems.add.error.select-category')
                            </div>
                            <div id="alert_limit_home{{ $uC->id }}" class="alert alert-danger btn-xs" role="alert" style="display: none; padding: 5px">
                                @lang('admin::shopping.systems.add.error.select-banner')
                            </div>
                            <div id="alert_limit_category{{ $uC->id }}" class="alert alert-danger btn-xs" role="alert" style="display: none; padding: 5px">
                                @lang('admin::shopping.systems.add.error.select-home')
                            </div>
                            <table class="table text-center">
                                <tr>
                                    <th class="text-center" colspan="5">@lang('admin::shopping.systems.add.view.form-product-list')</th>
                                </tr>
                                <tr>
                                    <th class="text-center">@lang('admin::shopping.systems.add.view.form-list-id')</th>
                                    <th class="text-center">@lang('admin::shopping.systems.add.view.form-list-sku')</th>
                                    <th class="text-center">@lang('admin::shopping.products.add.first_general_tab.form-global-name-label')</th>
                                    <th class="text-center">@lang('admin::shopping.systems.add.view.form-list-delete')</th>
                                </tr>
                                @foreach(Auth::user()->activeProductsByCountryAndBrand($uC->id, $brand->id) as $prod)
                                    <tr id="dis_{{ $prod->id }}_{{ $uC->id }}" style="display: none">
                                        <td>{{ $prod->id }}</td>
                                        <td>{{ $prod->global_name }}</td>
                                        <td>
                                            <i id="{{$prod->id}}|{{ $uC->name }}" class="del_btn fa fa-trash fa-2x"
                                               aria-hidden="true" onclick="delProduct({{$prod->id}},'{{ $uC->id }}')"></i>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="form-group text-center">
            <div class="alert alert-danger alert-info-input" role="alert" style="display: none">
                @lang('admin::shopping.systems.add.view.form-error')
            </div>
            <div class="alert alert-danger alert-info-prod-sys" role="alert" style="display: none">
                @lang('admin::shopping.systems.add.view.form-error-prod-sys')
            </div>
            <button type="submit" id="formCategoryButton" class="btn btn-default">
                <span class="btn-submit-text">@lang('admin::shopping.systems.add.view.form-save-button')</span>
                <span class="btn-submit-spinner" style="display: none"><i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i></span>
            </button>
        </div>
    </form>
</div>

@section('scripts')
    <script type="text/javascript">
        function deleteTabsFromUnselectedCountries() {
            // $('.form-check-input:not(:checked)')
            // $('.form-check-input:checked')

            countriesToCreate = [];
            $.each($('.form-check-input:checked'), function (i, checkbox) {
                countriesToCreate.push(parseInt($(checkbox).val()));
            });

            $.each($('[data-country-tab]'), function (i, element) {
                if (countriesToCreate.indexOf($(element).data('country-tab')) == -1) { $(element).remove(); }
            });

            $.each($('[data-country-pane]'), function (i, element) {
                if (countriesToCreate.indexOf($(element).data('country-pane')) == -1) { $(element).remove(); }
            });
        }

        $( document ).ready(function() {
            load_editor_js();
            $("#countryForm li a:first").click();
            $(".accordion-toggle:first").click();

            $('#brand-modal').modal({
                show: true,
                keyboard: false,
                backdrop: 'static',
            });
            $('#close-modal').click(function () {
                history.go(-1);
            });
            $('#accept-modal').click(function () {
                $('#brand-modal').modal('hide');
                deleteTabsFromUnselectedCountries();
            });

            $('[data-country-tab]').click(function () {
                var id = $(this).data('country-tab');
                $('[data-country-pane='+id+'] div[role=tabpanel]').removeClass('in');
                $('[data-country-pane='+id+'] div[role=tabpanel]').first().addClass('in');
            });

            $('.select-color').change(function () {
                var color = $(this).val();
                console.log('#b'+$(this).attr('name')+'_'+$(this).data('brand'));
                $('#b'+$(this).attr('name')+'_'+$(this).data('brand')).removeAttr('class');
                $('#b'+$(this).attr('name')+'_'+$(this).data('brand')).attr('class', 'products-page inner '+color);
            });
        });
        $("#systems").submit(function( event )
        {
            $('.btn-submit-text').hide();
            $('.btn-submit-spinner').show();
            $('.alert-info-input').hide();
            $('#formCategoryButton').prop('disabled', true);

            var banderaFinal = 2;
            var exit = 1;
            $('.requerido').each(function(i, elem)
            {
                var nameClass = '.'+$(elem).attr('rel');
                var banderaLang = 0;
                var banderaCountry = 0;
                $(nameClass).each(function(i1, elem1)
                {
                    var nameId = '.'+$(elem1).attr('id');
                    var inputLang = 0;
                    var contLang = 0;
                    $(nameId).each(function(i2, elem2)
                    {
                        contLang ++;
                        if($(elem2).val() != ''){
                            $(elem2).css({'border':'1px solid #ccc'});
                            inputLang ++;
                        } else {
                            $(elem2).css({'border':'1px solid red'});
                        }
                    });
                    if(inputLang == contLang){
                        banderaLang = 1;
                    }
                    if(banderaLang == 1){
                        banderaCountry = 1;
                    }
                });
                if(banderaFinal == 2 || banderaFinal == 1){
                    if (banderaCountry == 1 && banderaLang == 1){
                        exit = 0;
                        banderaFinal = 1;
                    }else{
                        exit = 1;
                        banderaFinal = 0;
                    }
                }else{
                    exit == 1;
                }
            });
            if(exit == 1){
                event.preventDefault();
                $('.alert-info-input').show();
                $('.btn-submit-text').show();
                $('.btn-submit-spinner').hide();
                $('#formCategoryButton').prop('disabled', false);
            }else{
                $('.req_prod').each(function(i, elem)
                {
                    if($(elem).val() == "" || $(elem).val() == "[]"){
                        $('.prod_sel').css({'border':'1px solid red'});
                        event.preventDefault();
                        $('.alert-info-prod-sys').show();
                        $('.btn-submit-text').show();
                        $('.btn-submit-spinner').hide();
                        $('#formCategoryButton').prop('disabled', false);
                    }
                });
            }
        });
    </script>
    <script>
        this.loadListProduct();
        function loadListProduct()
        {
            var userCountries = <?= Auth::user()->countries ?>;
            userCountries.forEach(function(element) {

                if ($("#products_"+element.id).length > 0) {
                    var idProd = $("#products_"+element.id).val();
                    if(idProd != "")
                    {
                        var prod = jQuery.parseJSON(idProd);
                        prod.forEach(function(element1) {
                            if (element1.home == 1){
                                $("#homOff_"+element1.id+"_"+element.id).hide();
                                $("#homOn_"+element1.id+"_"+element.id).show();
                            }
                            if (element1.favorite == 1){
                                $("#favOff_"+element1.id+"_"+element.id).hide();
                                $("#favOn_"+element1.id+"_"+element.id).show();
                            }
                            if (element1.category == 1){
                                $("#catOff_"+element1.id+"_"+element.id).hide();
                                $("#catOn_"+element1.id+"_"+element.id).show();
                            }
                            $("#opt_"+element1.id+"_"+element.id).hide();
                            $("#dis_"+element1.id+"_"+element.id).show();
                        });
                    }
                }
            });
            //var prodSelect = "#products_"+idCountry;

        }

        function addProduct(idCountry,allProduct)
        {
            // Se optiene id del producto seleccionado
            var idProd = $("#sel_"+idCountry).val();
            // Se valida que este seleccionado un producto
            if(idProd != ""){
                // se oculta la alerta
                $("#alert_"+idCountry).hide();
                // Se oculta el producto seleccionado del select
                $("#opt_"+idProd+"_"+idCountry).hide();
                // Se cambia el de elemento el select
                $("#sel_"+idCountry).val("");
                // Se muestra en la tabla el producto agregado
                $("#dis_"+idProd+"_"+idCountry).show();
                // Se guarda el producto agregado en el json.
                this.saveProduct(idProd,idCountry,allProduct);
            }else {
                // Se muestra mensaje de error
                $("#alert_"+idCountry).show();
            }
        }

        function saveProduct(idProd,idCountry,allProduct)
        {
            var prodSelect = "#products_"+idCountry;
            // Se recorre el array para guardar el producto seleccionado
            allProduct.forEach(function(element) {
                var ar = [];
                if(element.id == idProd){
                    // Se optiene la informacion del input
                    var prodJson = $(prodSelect).val();
                    // Se valida que no este vacio para agregar los elementos al array
                    if(prodJson != ""){
                        var obj = jQuery.parseJSON(prodJson);
                        ar = obj;
                    }
                    // se crea el objecto para agregarlo al array
                    var productAdd = new Object();
                    productAdd.id = element.id;
                    productAdd.sku = element.sku;
                    productAdd.favorite = 0;
                    productAdd.home = 0;
                    productAdd.category = 0;
                    // Se agrega el producto al array
                    ar.push(productAdd);
                    // Se inserta en el input para su envio
                    $(prodSelect).val(JSON.stringify(ar));
                }
            });
        }

        function delProduct(idProd, idCountry)
        {
            var prodSelect = "#products_"+idCountry;
            var obj = jQuery.parseJSON($(prodSelect).val());
            $("#favOff_"+idProd+"_"+idCountry).show();
            $("#favOn_"+idProd+"_"+idCountry).hide();
            obj.forEach(function(element, index) {
                if(element.id == idProd){
                    obj.splice(index,1);
                }
            });
            if(obj.length == 0){
                $(prodSelect).val("")
            }else {
                $(prodSelect).val(JSON.stringify(obj))
            }
            $("#dis_"+idProd+"_"+idCountry).hide();
            $("#opt_"+idProd+"_"+idCountry).show();
        }

        function addFavorite(idProd,idCountry)
        {
            var prodSelect = "#products_"+idCountry;
            var prodJson = $(prodSelect).val();
            var obj = jQuery.parseJSON(prodJson);
            var count = 0;
            obj.forEach(function(element) {
                if (element.favorite == 1){
                    count++;
                }
            });
            if (count < 3){
                obj.forEach(function(element) {
                    if(element.id == idProd){
                        element.favorite = 1;
                        $("#favOff_"+idProd+"_"+idCountry).hide();
                        $("#favOn_"+idProd+"_"+idCountry).show();
                    }
                });
            }else{
                $("#alert_limit_"+idCountry).show();
            }
            $(prodSelect).val(JSON.stringify(obj));
        }

        function quitFavorite(idProd, idCountry)
        {
            $("#alert_limit_"+idCountry).hide();
            var prodSelect = "#products_"+idCountry;
            var prodJson = $(prodSelect).val();
            var obj = jQuery.parseJSON(prodJson);
            var count = 0;
            obj.forEach(function(element) {
                if(element.id == idProd){
                    element.favorite = 0;
                    $("#favOff_"+idProd+"_"+idCountry).show();
                    $("#favOn_"+idProd+"_"+idCountry).hide();
                }
            });
            $(prodSelect).val(JSON.stringify(obj));
        }

        function addCat(idProd,idCountry)
        {
            var prodSelect = "#products_"+idCountry;
            var prodJson = $(prodSelect).val();
            var obj = jQuery.parseJSON(prodJson);
            var count = 0;
            obj.forEach(function(element) {
                if (element.category == 1){
                    count++;
                }
            });
            if (count < {{ config('settings::categories.home') }}){
                obj.forEach(function(element) {
                    if(element.id == idProd){
                        element.category = 1;
                        $("#catOff_"+idProd+"_"+idCountry).hide();
                        $("#catOn_"+idProd+"_"+idCountry).show();
                    }
                });
            }else{
                $("#alert_limit_category"+idCountry).show();
            }
            $(prodSelect).val(JSON.stringify(obj));
        }

        function quitCat(idProd, idCountry)
        {
            $("#alert_limit_category"+idCountry).hide();
            var prodSelect = "#products_"+idCountry;
            var prodJson = $(prodSelect).val();
            var obj = jQuery.parseJSON(prodJson);
            var count = 0;
            obj.forEach(function(element) {
                if(element.id == idProd){
                    element.category = 0;
                    $("#catOff_"+idProd+"_"+idCountry).show();
                    $("#catOn_"+idProd+"_"+idCountry).hide();
                }
            });
            $(prodSelect).val(JSON.stringify(obj));
        }

        function addHome(idProd,idCountry) {
            var prodSelect = "#products_"+idCountry;
            var prodJson = $(prodSelect).val();
            var obj = jQuery.parseJSON(prodJson);
            var count = 0;
            obj.forEach(function(element) {
                if (element.home == 1){
                    count++;
                }
            });
            if (count < 1){
                obj.forEach(function(element) {
                    if(element.id == idProd){
                        element.home = 1;
                        $("#homOff_"+idProd+"_"+idCountry).hide();
                        $("#homOn_"+idProd+"_"+idCountry).show();
                    }
                });
            }else{
                $("#alert_limit_home"+idCountry).show();
            }
            $(prodSelect).val(JSON.stringify(obj));
        }
        function quitHome(idProd, idCountry) {
            $("#alert_limit_home"+idCountry).hide();
            var prodSelect = "#products_"+idCountry;
            var prodJson = $(prodSelect).val();
            var obj = jQuery.parseJSON(prodJson);
            var count = 0;
            obj.forEach(function(element) {
                if(element.id == idProd){
                    element.home = 0;
                    $("#homOff_"+idProd+"_"+idCountry).show();
                    $("#homOn_"+idProd+"_"+idCountry).hide();
                }
            });
            $(prodSelect).val(JSON.stringify(obj));
        }
    </script>
@endsection
