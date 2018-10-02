@extends('mockup::layouts.master')

@section('content')
    <div class="ezone"><!-- zone container -->
        <div class="wrapper full-size-mobile ezone__container">
            <!-- panel nav -->
            @include('distributorarea::sections.sidebarDA')
            <!-- // end panel nav  -->

            <!-- content zone -->
            <div class="ezone__content"><!-- invite section -->
                <section class="ezone__section invite">
                    <header class="ezone__header">
                        <div class="ezone__headline bordered">
                            <h1 class="ezone__title">@lang('distributorarea::front_lang.invite_friend.invite_friend')</h1>
                        </div>
                    </header>
                    <div class="ezone__body">
                        <h1 class="ezone__subtitle">@lang('distributorarea::front_lang.invite_friend.fill_data_below'):</h1>
                        <div class="form-row">
                            <div class="form-group mediumx">
                                <div class="form-label">@lang('distributorarea::front_lang.invite_friend.guest_name'):</div>
                                <div class="col-right">
                                    <input class="form-control" type="text" id="name" name="name" placeholder="@lang('distributorarea::front_lang.invite_friend.name_second_name')">
                                </div>
                            </div>
                            <div class="form-group mediumx">
                                <div class="form-label">@lang('distributorarea::front_lang.invite_friend.email'):</div>
                                <div class="col-right">
                                    <input class="form-control" type="text" id="email" name="email" placeholder="Ingresa un correo electrónico">
                                </div>
                            </div>
                            <div class="form-group textarea">
                                <div class="form-label">@lang('distributorarea::front_lang.invite_friend.message'):</div>
                                <div class="col-right">
                                    <textarea class="form-control" id="message" name="message" placeholder="@lang('distributorarea::front_lang.invite_friend.send_msg_guest')"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="buttons-container">
                            <button class="button medium" type="button">@lang('distributorarea::front_lang.buttons.send_invitation')</button>
                        </div>
                    </div>
                </section><!-- // end invite section -->
            </div>
            <!-- // end content zone -->

        </div><!-- // zone container -->
    </div>
@endsection
