@php
    $country = strtolower(\App\Helpers\SessionHdl::getCorbizCountryKey());
    $env     = strtolower(env('APP_ENV')) == 'production' ? strtolower(env('APP_ENV')) : 'development';
@endphp

<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script type='text/javascript' src="{{ asset('/js/redirect.js')}}"></script>
<script type="application/javascript">
    /**
     * Mostrar mensajes
     * */
    function showAlert(messages, node, type) {
        if (type === 'error') { $(node).replaceWith(getErrorAlert(messages)); }
        if (type === 'warning') { $(node).replaceWith(getWarningAlert(messages)); }
    }

    function getErrorAlert(messages) {
        var messagesHTML = '';
        $.each(messages, function (index, message) {
            messagesHTML += '<li>'+message+'</li>';
        });

        return '' +
            '<div id="generic_error" class="error__box" style="display:block; width: 80%;margin:0 auto;">\n' +
            '    <span class="error__single">\n' +
            '        <img src="{{ asset('themes/omnilife2018/images/icons/warning.svg') }}">{{ trans("shopping::checkout.payment.errors.default") }}:\n' +
            '    </span>\n' +
            '    <ul id="error__boxSA_ul_step1">'+messagesHTML+'</ul>\n' +
            '</div>'
    }

    function getWarningAlert(messages) {
        var messagesHTML = '';
        $.each(messages, function (index, message) {
            messagesHTML += '<li>'+message+'</li>';
        });

        return '' +
            '<div id="generic_error" class="warning__box" style="display:block; width: 80%;margin:0 auto;">\n' +
            '    <span class="warning__single">{{ trans("shopping::checkout.payment.attention") }}:</span>\n' +
            '    <ul id="error__boxSA_ul_step1">'+messagesHTML+'</ul>\n' +
            '</div>'
    }

    function showModalPayment(withProcessModel) {
        $('.overlay').show();

        if (withProcessModel) {
            $('#realizando-pago').addClass('active');
        }
    }

    function hideModalPayment(withProcessModel) {
        $('.overlay').hide();

        if (withProcessModel) {
            $('#realizando-pago').removeClass('active');
        }
    }

    function closeCart() {
        if ($('.cart-preview.fade-in-down.cart__right').hasClass('active')) {
            $('.cart-preview.fade-in-down.cart__right').removeClass('active');
        }
    }

    /**
     * Obtener el HTML de una vista
     * */
    function getView(url, callback) {
        $.ajax(url, {
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            method: 'POST',
            dataType: 'HTML',
        })
        .done(function (response, textStatus, jqXHR) {
            return callback(null, response);
        })
        .fail(function (response, textStatus, errorThrown) {
            return callback(response, null);
        });
    }

    /**
     * Cargar las vistas de métodos de pago y el resúmen de la cotización
     * */
    $('.buttons-container').on('click', '[data-to=step2]', function () {
        if ($('#step2').hasClass('active')) {
            $('#icart').replaceWith('<a class="icon-btn icon-cart" id="icart"></a>');
            $('#paypal-button').show();

            getView('{{ route('checkout.getPaymentView') }}', function (err, response) {
                if (err) return console.log(err);
                $('#form-payment').replaceWith(response);
            });

            getView('{{ route('checkout.getCartPreview') }}', function (err, response) {
                if (err) return console.log(err);

                $('#cart-preview').replaceWith(response);
                var itemsLists = $('#cart-preview .cart-product__list');

                if (itemsLists.length > 0 && document.perfectScrollbar != undefined) {
                    new document.perfectScrollbar(itemsLists[0]);
                }

                $('#cart-preview-mov li.total').text($('#total').text());
                $('#cart-preview-mov li.points').text($('#points').text());
            });
        }
    });

    /**
     * Generar la transacción en corbiz
     * */
    $('#step2').on('change', '[name=payment]', function () {
        $.ajax('{{ route('checkout.processTransaction') }}', {
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            method: 'POST',
            data: {paymentMethod: $(this).val()},
            dataType: 'JSON',
            beforeSend: function () {
                showModalPayment();
            }
        })
        .done(function (response, textStatus, jqXHR) {
            if (response.status) {
                $('#generic_error').replaceWith('<div id="generic_error"></div>');
                $('.payment-container').hide();
                $('#order').val(response.order);

                if (response.method_key === 'PAYPAL') {
                    $('.payment-container.paypal').show();
                }

            } else if (response.status === false && response.errors && Array.isArray(response.errors) && response.errors.length > 0) {
                showAlert(response.errors, '#generic_error', 'error');
            }

            hideModalPayment();
        })
        .fail(function (response, textStatus, errorThrown) {
            hideModalPayment();
            console.log(response, textStatus, errorThrown);
        });
    });

    $('#cart-preview-mov').on('click', function () {
        if (!$('.cart-preview.fade-in-down.cart__right').hasClass('active')) {
            $('.cart-preview.fade-in-down.cart__right').addClass('active');
        }
    });

    /**
     * Generar la transacción de inscripcion en corbiz
     * */
    $('#banks').on('click', '[name=payment]', function () {
        if($('input[name=kit]:checked').val()){
            $.ajax('{{ route('register.transactionFromCorbiz') }}', {
                headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                method: 'POST',
                data: {paymentMethod: $(this).val(),'shipping_company': $("#shipping_way_hidden").val()},
                dataType: 'JSON',
                beforeSend: function () {
                    $("#error__box_ul_step3").html("");
                    $("#error_step").hide();
                    showModalPayment();
                }
            })
                .done(function (response, textStatus, jqXHR) {
                    if (response.status) {
                        $("#error__box_ul_step3").html("");
                        $("#error_step3").hide();
                        $('.payment-container').hide();
                        $('#order').val(response.order);

                        if (response.method_key === 'PAYPAL') {
                            $("#paypal-button").removeClass('hide hidden');
                            $('.payment-container.paypal').show();
                        }

                    }
                    else if (response.status === false && response.errors && Array.isArray(response.errors) && response.errors.length > 0) {
                        $("#error_step3").show();
                        $("#error__box_ul_step3").html("");
                        $.each(response.errors, function (i, item) {

                            $("#error__box_ul_step3").append("<li class='text-danger'>"+item+"</li>");
                        });
                    }

                    hideModalPayment();
                })
                .fail(function (response, textStatus, errorThrown) {
                    hideModalPayment();
                    console.log(response, textStatus, errorThrown);
                });
        }else{
            $("#choose").show();
            $("#choose").focus();
        }
    });
</script>
<script type="application/javascript">
    /**
     * Paypal
     * */
    paypal.Button.render({
        env: '{{ config("paymentmethods.paypal.{$country}.{$env}.mode_checkout") }}',
        locale: '{{ config("paymentmethods.paypal.{$country}.locale") }}',
        style: {
            size: 'medium', // tiny, small, medium
            color: 'gold',  // gold, blue, silver
            shape: 'pill',  // pill, rect
        },
        commit: true,
        payment: function(resolve, reject) {
            paypal.request.post('{{ route('paypal.create') }}', {order: $('#order').val(),type: $('#type').val(), _token: '{{ csrf_token() }}'})
                .then(function(data) {
                    resolve(data.paymentId);
                })
                .catch(function(err) {
                    reject(err);
                });
        },
        onAuthorize: function(data, actions) {
            showModalPayment(true);

            paypal.request.post('{{ route('paypal.process') }}', { paymentID: data.paymentID, payerID: data.payerID,type: $('#type').val(), _token: '{{ csrf_token() }}'} )
                .then(function(data) {
                    if (data.success) {
                        if(data.type == 'register'){
                            $.redirect('{{ route('register.confirmation') }}', {'data': data,_token: '{{ csrf_token() }}'});
                        }else{
                            $.redirect('{{ route('checkout.confirmation') }}', {'order': data.order.order_number, _token: '{{ csrf_token() }}'});
                        }
                    } else {
                        showAlert([data.message], '#generic_error', 'error');
                        hideModalPayment(true);
                    }
                })
                .catch(function(err) {
                    showAlert(['{{ trans("shopping::checkout.payment.errors.sys103") }}'], '#generic_error', 'error');
                    console.log(err);
                    hideModalPayment(true);
                });
        },
        onCancel: function(data, actions) {
            showAlert(['{{ trans("shopping::checkout.payment.errors.cancel_paypal") }}'], '#generic_error', 'warning');

            $.ajax('{{ route('paypal.cancel') }}', {
                headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                method: 'POST',
                data: {order: $('#order').val(),type: $('#type').val()},
                dataType: 'JSON'
            })
            .done(function (response, textStatus, jqXHR) {
                console.log(response.success);
            })
            .fail(function (response, textStatus, errorThrown) {
                console.log(response, textStatus, errorThrown);
            });
        },
        onError: function(err) {
            showAlert(['{{ trans("shopping::checkout.payment.errors.sys101") }}'], '#generic_error', 'error');
            console.log(err);
            throw new Error(err);
        },
    }, '#paypal-button');
</script>