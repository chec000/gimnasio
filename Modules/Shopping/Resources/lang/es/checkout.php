<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Language Lines
    |--------------------------------------------------------------------------
    */

    'checkout'              => 'Pagar',
    'title'                 => 'OMNILIFE - Proceso de Compra',
    'keep_buying'           => 'Seguir comprando',
    'return'                => 'Regresar',
    'continue_payment'      => 'Continuar a pago',
    'finish_purchase'       => 'Finalizar Compra',

    'payment' => [
        'select_payment' => 'Selecciona una forma de pago',
        'resume_payment' => 'Resumen de compra',
        'no_items'       => 'No hay artículos',
        'handling'       => 'Manejo',
        'taxes'          => 'Impuestos',
        'attention'      => 'Atención',
        'total'          => 'Total',
        'points'         => 'Puntos',
        'shopping_cart'  => 'Carrito de compras',

        'errors' => [
            # Generales
            'cancel_paypal' => 'Usted ha cancelado la acción de pago. Puede volver a iniciar su pago dando clic en el botón PayPal',
            'default' => 'Se produjo uno o varios problemas',

            # Programación
            'sys001' => 'Err: SYS001 Ha ocurrido un problema, por favor contacte al servicio de soporte técnico',
            'sys002' => 'Err: SYS002 Ha ocurrido un problema, por favor contacte al servicio de soporte técnico',
            'sys003' => 'Err: SYS003 Ha ocurrido un problema, por favor contacte al servicio de soporte técnico',
            'sys004' => 'Err: SYS004 Ha ocurrido un problema, por favor contacte al servicio de soporte técnico',

            # Paypal
            'sys101' => 'Err: SYS101 Ha ocurrido un problema al procesar su pago, por favor intente de nuevo',
            'sys102' => 'Err: SYS102 Ha ocurrido un problema al procesar su pago, por favor intente de nuevo',
            'sys103' => 'Err: SYS103 Ha ocurrido un problema al procesar su pago, por favor intente de nuevo',

            'payment_rejected'               => 'Tu pago ha sido rechazado, intenta nuevamente o usa otro método de pago.',
            'instrument_declined'            => 'El procesador o el banco rechazaron el método de pago o no se puede usar para este pago. Inténtalo de nuevo',
            'bank_account_validation_failed' => 'La validación de la cuenta bancaria falló. Inténtalo de nuevo',
            'credit_card_cvv_check_failed'   => 'La verificación de la tarjeta de crédito falló. Verifica tu información y vuelve a intentarlo',
            'credit_card_refused'            => 'Tarjeta de crédito fue rechazada. Inténtalo de nuevo con otra tarjeta de crédito',
            'credit_payment_not_allowed'     => 'No se puede usar el crédito para completar el pago. Por favor, selecciona otro método de pago y vuelve a intentarlo',
            'insufficient_funds'             => 'Fondos insuficientes. Por favor, selecciona otro método de pago y vuelve a intentarlo',
            'payment_denied'                 => 'Pago denegado Por favor, selecciona otro método de pago y vuelve a intentarlo',
            'internal_service_error'         => 'Ha ocurrido un problema, espere un momento y vuelva a intentarlo',
            'payment_expired'                => 'El pago ha expirado. Inténtalo de nuevo'
        ],

        'modal' => [
            'loader' => [
                'title' => 'Realizando pago',
                'p1'    => 'Estás un paso más cerca de tu libertad financiera.',
                'p2'    => 'No cerrar o refrescar esta ventana hasta confirmación de compra.'
            ]
        ],
    ],

    'confirmation' => [
        'success' => [
            'thank_you'       => 'Gracias por tu compra',
            'success_pay'     => 'Cargo exitoso',
            'order_number'    => 'Número de pedido',
            'corbiz_number'   => 'Número de orden',
            'order_arrive_in' => 'Tu pedido llegará en',
            'business_days'   => 'días hábiles',
            'pay_with_card'   => 'Pago con tarjeta',
            'pay_with_paypal' => 'Pago con Paypal',
            'total'           => 'Total de compra',
            'send_to'         => 'Enviado a',
            'product_name'    => 'Nombre del producto',
            'points'          => 'pts',
            'Eonumber'        => 'Numero de empresario',
            'password'        => 'Contraseña',
            'secretquestion'  => 'Pregunta de seguridad',
        ]
    ],
    'quotation' => [
        'resume_cart' => [
            'remove_all' => 'Eliminar todos',
            'code' => 'Código',
            'pts' => 'pts',
            'subtotal' => 'Subtotal',
            'handling' => 'Manejo',
            'taxes' => 'Impuestos',
            'points' => 'Puntos',
            'total' => 'Total',
            'no_items' => 'No se han agregado productos al carrito',
            'delete_items' => 'No es posible enviar algunos productos seleccionados al código postal seleccionado, por lo que se han eliminado de carrito',
            'purchase_summary' => 'Resumen de compra',
        ],
        'change_period' => '¿Cambiar a periodo anterior?',
        'change_period_yes' => 'Si',
        'change_period_no' => 'No',
        'change_period_success_msg' =>'Cambio de periodo exitoso',
        'change_period_fail_msg' =>'Cambio de periodo fallo, intente mas tarde',
    ],
    'promotions' => [
        'title_modal' => 'Promociones',
        'msg_select_promotions' => 'Selecciona un producto o paquete de las siguientes promociones',
        'msg_promo_required' => '(Obligatorio)',
        'label_quantity' => 'Cantidad',

        'btn_select' => 'Seleccionar',
        'btn_accept' => 'Aceptar',
        'msg_promo_obliga' => 'Es necesario elegir un producto de la promocion: :name_promo',
        'msg_promo_qty' => 'Solo puedes elegir :qty_promo producto(s) de la promoción: :name_promo',

        'msg_promo_A' => 'Elija uno de los siguientes paquetes, puede elegir la cantidad máxima de :qty del paquete seleccionado.',
        'msg_promo_B' => 'Elija uno de los siguientes paquetes, puede elegir la cantidad máxima de :qty del paquete seleccionado.',
        'msg_promo_C' => '{1} Puede elegir :qty de los siguientes productos | [2,*] Puede elegir hasta :qty de los siguientes productos, si la cantidad lo permite, pueden ser 1 o mas de cada producto.',
    ]
];

