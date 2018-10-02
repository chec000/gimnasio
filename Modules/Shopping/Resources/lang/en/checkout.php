<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Language Lines
    |--------------------------------------------------------------------------
    */

    'checkout'              => 'Check out',
    'title'                 => 'OMNILIFE - Checkout',
    'keep_buying'           => 'Keep buying',
    'return'                => 'Return',
    'continue_payment'      => 'Continue to payment',
    'finish_purchase'       => 'Finish purchase',

    'payment' => [
        'select_payment' => 'Select a payment method',
        'resume_payment' => 'Purchase summary',
        'no_items'       => 'There are no articles',
        'handling'       => 'Handling',
        'taxes'          => 'Taxes',
        'attention'      => 'Attention',
        'total'          => 'Total',
        'points'         => 'Points',
        'shopping_cart'  => 'Shopping cart',

        'errors' => [
            # Generales
            'cancel_paypal' => 'You have canceled the payment action. You can start your payment again by clicking on the PayPal button',
            'default' => 'One or more problems occurred',

            # Programación
            'sys001' => 'Err: SYS001 A problem has occurred, please contact the technical support service',
            'sys002' => 'Err: SYS002 A problem has occurred, please contact the technical support service',
            'sys003' => 'Err: SYS003 A problem has occurred, please contact the technical support service',
            'sys004' => 'Err: SYS003 A problem has occurred, please contact the technical support service',

            # Paypal
            'sys101' => 'Err: SYS101 There has been a problem processing your payment, please try again',
            'sys102' => 'Err: SYS102 There has been a problem processing your payment, please try again',
            'sys103' => 'Err: SYS103 There has been a problem processing your payment, please try again',

            'payment_rejected'               => 'Your payment has been declined, try again or use another payment method.',
            'instrument_declined'            => 'The payment method was either declined by the processor or bank, or it can not be used for this payment. Please try again',
            'bank_account_validation_failed' => 'The validation of the bank account failed. Please try again',
            'credit_card_cvv_check_failed'   => 'The credit card check failed. Verify your information and tray again',
            'credit_card_refused'            => 'Credit card was refused. Try again with another credit card.',
            'credit_payment_not_allowed'     => 'You can not use the credit to complete the payment. Please, select another payment method and try again',
            'insufficient_funds'             => 'Insufficient funds. Please, select another payment method and try again',
            'payment_denied'                 => 'Payment denied. Please, select another payment method and try again',
            'internal_service_error'         => 'A problem has occurred, wait a moment and try again',
            'payment_expired'                => 'The payment is expired. Please try again'
        ],

        'modal' => [
            'loader' => [
                'title' => 'Making the payment',
                'p1'    => 'You\'re one step closer to financial freedom.',
                'p2'    => 'Do not close or refresh this window until you have received confirmation of purchase.'
            ]
        ],
    ],

    'confirmation' => [
        'success' => [
            'thank_you'       => 'Thanks for your purchase',
            'success_pay'     => 'Successful purchase',
            'order_number'    => 'Order number',
            'corbiz_order'    => 'Order Corbiz',
            'corbiz_number'   => 'Corbiz order number',
            'order_arrive_in' => 'Your order will arrive in',
            'business_days'   => 'business days',
            'pay_with_card'   => 'Card payment',
            'pay_with_paypal' => 'Paypal payment',
            'pay_auth'        => 'Payment Authorization',
            'total'           => 'Total purchase',
            'send_to'         => 'Send to',
            'product_name'    => 'Product name',
            'points'          => 'pts',
            'Eonumber'        => 'Eo Number',
            'password'        => 'Password',
            'secretquestion'  => 'Security Question',
            'message_inscription' => 'Check your email to complete your account creation.'
        ],

        'pending' => [
            'info'    => 'Your payment is waiting to be validated.<br>Once your payment is approved you will be sent an email with the information of your order',
            'pending' => 'Pending payment',
        ],

        'no_order' => [
            'info' => 'Your payment has been processed but a problem has occurred when generating your order.<br>Soon you will be receiving a confirmation email'
        ],

        'emails' => [
            'confirmation_title' => 'Your payment is in verification',
            'order_success'      => 'Order confirmation'
        ]
    ],

    'email' => [
        'entepreneur' => 'Omnilife Entepreneur,',

        'confirmation' => [
            'p1' => 'Your order was processed and is now in payment analysis.<ul><li>Confirmation of payment will be confirmed within a maximum of 24 hours by the payment method.</li></ul>',
            'p2' => 'IMPORTANT: Your request is generated from the date of confirmation of payment by the operator.',
            'p3' => 'For any questions please contact us:<br> United States: 6900 N Dallas Parkway Suite 850 Plano, Tx 75024<br> Telephone: CREO 1 (888) 326 1188  FAX (972)378-0854'
        ],

        'success_order' => [
            'order_information' => 'ORDER INFORMATION',
            'order_number' => 'Order number',
            'order_confirmation' => 'Order confirmation',
            'p1' => 'Your order has been confirmed! Payment of your order has been confirmed as successful! When receiving the goods, please check the packaging.',
        ]
    ],

    'quotation' => [
        'resume_cart' => [
            'remove_all' => 'Delete all',
            'code' => 'Code',
            'pts' => 'points',
            'subtotal' => 'Subtotal',
            'handling' => 'Handling',
            'taxes' => 'Taxes',
            'points' => 'Points',
            'total' => 'Total',
            'no_items' => 'No products have been added to the cart',
            'delete_items' => 'It is not possible to send some selected products to the selected zip code, so they have been removed from cart',
            'purchase_summary' => 'Resumen de compra',
        ],
        'change_period' => 'Change to a previous period?',
        'change_period_yes' => 'Yes',
        'change_period_no' => 'No',
        'change_period_success_msg' =>'Period change successful.',
        'change_period_fail_msg' =>'Period change fail, try later.',

    ],
    'promotions' => [
        'title_modal' => 'Promotions',
        'msg_select_promotions' => 'Select a product or package of the following promotions',
        'msg_promo_required' => '(Required)',
        'label_quantity' => 'Quantity',

        'btn_select' => 'Select',
        'btn_accept' => 'Accept',

        'msg_promo_obliga' => 'It is necessary to choose a product/package of the promotion: :name_promo',
        'msg_promo_qty' => 'You can only choose :qty_promo product(s) of the promotion: :name_promo',

        'msg_promo_A' => 'Choose one of the following packages, You can choose the maximum quantity of :qty of the selected package.',
        'msg_promo_B' => 'Choose one of the following packages, You can choose the maximum quantity of :qty of the selected package.',
        'msg_promo_C' => '{1} You can choose :qty of the following products | [2,*] You can choose up to :qty of the following products, if the quantity allows, can be 1 or more of each product.',
    ]

];

