<?php

return [
    'name' => 'Shopping',

    'hideShopping' => [
        'CHI','COL', 'BRA', 'ESP'
    ],

    'months' => [
        '01'    => 'shopping::register_customer.months.1',
        '02'    => 'shopping::register_customer.months.2',
        '03'    => 'shopping::register_customer.months.3',
        '04'    => 'shopping::register_customer.months.4',
        '05'    => 'shopping::register_customer.months.5',
        '06'    => 'shopping::register_customer.months.6',
        '07'    => 'shopping::register_customer.months.7',
        '08'    => 'shopping::register_customer.months.8',
        '09'    => 'shopping::register_customer.months.9',
        '10'    => 'shopping::register_customer.months.10',
        '11'    => 'shopping::register_customer.months.11',
        '12'    => 'shopping::register_customer.months.12',
    ],

    'zip' => [
        'USA' => [
            'check' => 'county',//se obtiene el campo que se utilizara para mostrar en el autocomplete
            'applies' => true, //campo que valida si se utiliza el autocomplete o no en el registro,
            'validate' => 'name',
        ],
        'MEX' => [
            'check' => 'suburb',//se obtiene el campo que se utilizara para mostrar en el autocomplete
            'applies' => true, //campo que valida si se utiliza el autocomplete o no en el registro
            'validate' => 'id',
        ],
    ],
    'documents_corbiz' => [
        'USA' => [
            'cant' => 1,
            'active_expiration' => true,
        ],
        'MEX' => [
            'cant' => 1,
            'active_expiration' => false,
        ],
        'ITA' => [
            'cant' => 3,
            'active_expiration' => false,
        ],
    ],
    'documents' => [
        'USA' => [
          'transfer' => true,
          'receive' => true,
        ],
        'MEX' => [
            'transfer' => true,
            'receive' => true,
        ]
    ],

    'exit_modal' => [
        'register'          => 'register',
        'registercustomer'  => 'register_customer',
    ],

    'security_question_default' => [
        'USA'   => [
            'key'       => 1,
            'answer'    => 'test',
        ],

        'MEX'   => [
            'key'       => 1,
            'answer'    => 'test',
        ],
    ],

    'registercustomer' => [
        'rules' => [
            'USA' => [
                'step1' => [
                    'country'           => 'required|not_in:default',
                    'invited'           => 'required|in:1,0',
                    'register-code'     => 'required_if:invited,1|max:13',
                    'references'        => 'required_if:invited,0',
                    'name'              => 'required|max:30',
                    'lastname'          => 'required|max:30',
                    'lastname2'         => 'max:30',
                    'sex'               => 'required|in:1,0',
                    'day'               => 'required',
                    'month'             => 'required',
                    'year'              => 'required',
                    'id_type.*'         => 'required|not_in:default',
                    'id_num.*'          => 'required|max:20',
                    'id_expiration.*'   => 'required|date|date_format:"Y-m-d"',
                    'zip'               => 'required|max:8',
                    'street'            => 'required|max:45',
                    'state_hidden'      => 'required',
                    'city_hidden'       => 'required',
                    'colony'            => 'required|max:30',
                    'shipping_company'  => 'required|not_in:default',
                ],

                'step2' => [
                    'email'         => 'required|email|max:50|unique:shop_customers|same:confirm-email',
                    'confirm-email' => 'required|email|max:50',
                    'tel'           => 'required|max:10',
                ],

                'step3' => [
                    'secret-question'   => 'required|not_in:default',
                    'response-question' => 'required|max:50',
                ],
            ],
        ],

        'messages' => [
            'USA' => [
                'step1' => [
                    'country.required'          => 'shopping::register_customer.fields.required',
                    'country.not_in'            => 'shopping::register_customer.fields.not_in',
                    'invited.required'          => 'shopping::register_customer.fields.required',
                    'invited.in'                => 'shopping::register_customer.fields.in',
                    'register-code.required_if' => 'shopping::register_customer.fields.required',
                    'register-code.max'         => 'shopping::register_customer.fields.max',
                    'references.required_if'    => 'shopping::register_customer.fields.required',
                    'name.required'             => 'shopping::register_customer.fields.required',
                    'name.max'                  => 'shopping::register_customer.fields.max',
                    'lastname.required'         => 'shopping::register_customer.fields.required',
                    'lastname.max'              => 'shopping::register_customer.fields.max',
                    'lastname2.max'             => 'shopping::register_customer.fields.max',
                    'sex.required'              => 'shopping::register_customer.fields.required',
                    'sex.in'                    => 'shopping::register_customer.fields.in',
                    'day.required'              => 'shopping::register_customer.fields.required',
                    'month.required'            => 'shopping::register_customer.fields.required',
                    'year.required'             => 'shopping::register_customer.fields.required',
                    'id_type.required'          => 'shopping::register_customer.fields.required',
                    'id_type.not_in'            => 'shopping::register_customer.fields.not_in',
                    'id_num.required'           => 'shopping::register_customer.fields.required',
                    'id_num.max'                => 'shopping::register_customer.fields.max',
                    'id_expiration.required'    => 'shopping::register_customer.fields.required',
                    'id_expiration.date'        => 'shopping::register_customer.fields.date',
                    'id_expiration.date_format' => 'shopping::register_customer.fields.date_format',
                    'zip.required'              => 'shopping::register_customer.fields.required',
                    'zip.max'                   => 'shopping::register_customer.fields.max',
                    'street.required'           => 'shopping::register_customer.fields.required',
                    'street.max'                => 'shopping::register_customer.fields.max',
                    'state_hidden.required'     => 'shopping::register_customer.fields.required',
                    'city_hidden.required'      => 'shopping::register_customer.fields.required',
                    'colony.required'           => 'shopping::register_customer.fields.required',
                    'colony.max'                => 'shopping::register_customer.fields.max',
                    'shipping_company.required' => 'shopping::register_customer.fields.required',
                    'shipping_company.not_in'   => 'shopping::register_customer.fields.not_in',
                ],

                'step2' => [
                    'email.required'            => 'shopping::register_customer.fields.required',
                    'email.email'               => 'shopping::register_customer.fields.email',
                    'email.max'                 => 'shopping::register_customer.fields.max',
                    'email.unique'              => 'shopping::register_customer.fields.unique',
                    'email.same'                => 'shopping::register_customer.fields.same',
                    'confirm-email.required'    => 'shopping::register_customer.fields.required',
                    'confirm-email.email'       => 'shopping::register_customer.fields.email',
                    'confirm-email.max'         => 'shopping::register_customer.fields.max',
                    'tel.required'              => 'shopping::register_customer.fields.required',
                    'tel.numeric'               => 'shopping::register_customer.fields.numeric',
                    'tel.max'                   => 'shopping::register_customer.fields.max',
                ],

                'step3' => [
                    'secret-question.required'      => 'shopping::register_customer.fields.required',
                    'secret-question.not_in'        => 'shopping::register_customer.fields.not_in',
                    'response-question.required'    => 'shopping::register_customer.fields.required',
                    'response-question.max'         => 'shopping::register_customer.fields.max',
                ],
            ],
        ],

        'labels' => [
            'USA' => [
                'step1' => [
                    'country'           => 'shopping::register_customer.account.country.label',
                    'invited'           => 'shopping::register_customer.account.invited.label.desktop',
                    'register-code'     => 'shopping::register_customer.account.businessman_code.label',
                    'references'        => 'shopping::register_customer.account.meet_us.label',
                    'name'              => 'shopping::register_customer.account.full_name.name.placeholder',
                    'lastname'          => 'shopping::register_customer.account.full_name.lastname.placeholder',
                    'lastname2'         => 'shopping::register_customer.account.full_name.lastname2.placeholder',
                    'sex'               => 'shopping::register_customer.account.sex.label',
                    'day'               => 'shopping::register_customer.account.borndate.day',
                    'month'             => 'shopping::register_customer.account.borndate.month',
                    'year'              => 'shopping::register_customer.account.borndate.year',
                    'id_type.*'         => 'shopping::register_customer.account.identification.label',
                    'id_num.*'          => 'shopping::register_customer.account.identification.placeholder',
                    'id_expiration.*'   => 'shopping::register_customer.account.expiration.placeholder',
                    'zip'               => 'shopping::register_customer.account.address.placeholders.zip',
                    'colony'            => 'shopping::register_customer.account.address.placeholders.colony',
                    'state_hidden'      => 'shopping::register_customer.account.address.placeholders.state',
                    'city_hidden'       => 'shopping::register_customer.account.address.placeholders.city',
                    'street'            => 'shopping::register_customer.account.address.placeholders.street',
                    'shipping_company'  => 'shopping::register_customer.account.address.placeholders.shipping_company',
                ],

                'step2' => [
                    'email'         => 'shopping::register_customer.mail_address.mail.label',
                    'confirm-email' => 'shopping::register_customer.mail_address.confirm_mail.label',
                    'tel'           => 'shopping::register_customer.mail_address.tel.label',
                ],

                'step3' => [
                    'secret-question'   => 'shopping::register_customer.activation.question',
                    'response-question' => 'shopping::register_customer.activation.placeholder',
                ],
            ],
        ],

        'validate_form' => [
            'USA' => [
                'zipcode'           => true,
                'number'            => false,
                'suburb'            => false,
                'county'            => true,
                'betweem_streets'   => true,
                'tel'               => true,
                'cel'               => false,
            ],
        ],
    ],

    'register' => [

            'rules' => [

                'USA' => [
                    'step1' => [
                        'email'      => 'required|email',
                        'confirm-email' => 'required|email|same:email',
                        'tel' =>  'required|min:10|max:10',
                        'references'    => 'required_if:invited,0',
                        'secret-question' => 'required|not_in:default',
                        'response-question' => 'required',
                        'invited' => 'required',
                    ],
                    'step2' => [

                            'name'      => 'required|regex:/^[a-zA-Z0-9_ ]*$/|max:30',
                            'lastname'  => 'required|regex:/^[a-zA-Z0-9_ ]*$/|max:30',
                            'lastname2' => 'nullable|regex:/^[a-zA-Z0-9_ ]*$/|max:30',
                            'year' => 'required',
                            'day' => 'required',
                            'month' => 'required',
                            'zip' => 'required',
                            /* 'ext_num' => 'required', */
                            'state' => 'required_if:state_hidden,',
                            'city' => 'required_if:city_hidden,',
                            'street' => 'required',
                            'terms1' => 'required',
                            'terms2' => 'required',
                            'sex' => 'required|in:M,F',

                    ] ,
                    'step3' => [
                            'kit' => 'required',
                            'shipping_way' => 'required',
                            'payment' => 'required',
                    ]
                ] ,
                'MEX' => [
                    'step1' => [
                        'email'      => 'required|email',
                        'confirm-email' => 'required|email|same:email',
                        'tel' =>  'required|min:10|max:10',
                        'references'    => 'required_if:invited,0',
                        'secret-question' => 'required|not_in:default',
                        'response-question' => 'required',
                        'invited' => 'required',
                    ],
                    'step2' => [

                        'name'      => 'required|regex:/^[a-zA-Z0-9_ ]*$/|max:30',
                        'lastname'  => 'required|regex:/^[a-zA-Z0-9_ ]*$/|max:30',
                        'lastname2' => 'regex:/^[a-zA-Z0-9_ ]*$/|max:30',
                        'year' => 'required',
                        'day' => 'required',
                        'month' => 'required',
                        'zip' => 'required',
                        'ext_num' => 'required',
                        'state' => 'required||not_in:default',
                        'city' => 'required|not_in:default',
                        'street' => 'required',
                        'terms2' => 'required',
                        'sex' => 'required|in:1,0',
                        'id_type.*'     => 'required|not_in:default',
                        'id_num.*'      => 'required',
                        'id_expiration.*'      => 'required',

                    ] ,
                    'step3' => [
                        'kit' => 'required',
                        'shipping_way' => 'required',
                        'payment' => 'required',
                    ],
                ] ,


            ],

            'messages' => [
                'USA' => [
                    'step1' => [
                        'email.required'         => 'shopping::register_customer.fields.required',
                        'invited.required'         => 'shopping::register.account.fields.required',
                        'email.email'            => 'shopping::register.account.fields.email',
                        'confirm-email.required'         => 'shopping::register.account.fields.required',
                        'confirm-email.email'         => 'shopping::register.account.fields.email',
                        'confirm-email.same'         => 'shopping::register.account.fields.same',
                        'tel.required'         => 'shopping::register.account.fields.required',
                        'secret-question.required'         => 'shopping::register.account.fields.required',
                        'response-question.required'         => 'shopping::register.account.fields.required',

                    ],
                    'step2' => [

                        'name'         => 'shopping::register.account.fields.required',
                        'lastname'         => 'shopping::register.account.fields.required',
                        'lastname2'         => 'shopping::register.account.fields.required',
                        'day'         => 'shopping::register.account.fields.required',
                        'year'         => 'shopping::register.account.fields.required',
                        'month'         => 'shopping::register.account.fields.required',
                        'zip'         => 'shopping::register.account.fields.required',
                        /* 'ext_num'         => 'shopping::register.account.fields.required', */
                        'state'         => 'shopping::register.account.fields.required',
                        'city'         => 'shopping::register.account.fields.required',
                        'street'         => 'shopping::register.account.fields.required',
                        'terms1'         => 'shopping::register.account.fields.required',
                        'terms2'         => 'shopping::register.account.fields.required',
                        'sex'         => 'shopping::register.account.fields.required',
                        'state'         => 'shopping::register.account.fields.required',
                        'city'         => 'shopping::register.account.fields.required'
                    ] ,
                    'step3' => [
                        'kit' => 'shopping::register.account.fields.required',
                        'shipping_way' => 'shopping::register.account.fields.required',
                        'payment' => 'shopping::register.account.fields.required',
                    ],
                ] ,
                'MEX' => [
                    'step1' => [
                        'email.required'         => 'shopping::register.account.fields.required',
                        'invited.required'         => 'shopping::register.account.fields.required',
                        'email.email'            => 'shopping::register.account.fields.email',
                        'confirm-email.required'         => 'shopping::register.account.fields.required',
                        'confirm-email.email'         => 'shopping::register.account.fields.email',
                        'confirm-email.same'         => 'shopping::register.account.fields.same',
                        'tel.required'         => 'shopping::register.account.fields.required',
                        'secret-question.required'         => 'shopping::register.account.fields.required',
                        'response-question.required'         => 'shopping::register.account.fields.required',

                    ],
                    'step2' => [

                        'name'         => 'shopping::register.account.fields.required',
                        'lastname'         => 'shopping::register.account.fields.required',
                        'lastname2'         => 'shopping::register.account.fields.required',
                        'day'         => 'shopping::register.account.fields.required',
                        'year'         => 'shopping::register.account.fields.required',
                        'month'         => 'shopping::register.account.fields.required',
                        'zip'         => 'shopping::register.account.fields.required',
                        'ext_num'         => 'shopping::register.account.fields.required',
                        'state'         => 'shopping::register.account.fields.required',
                        'city'         => 'shopping::register.account.fields.required',
                        'street'         => 'shopping::register.account.fields.required',
                        'terms1'         => 'shopping::register.account.fields.required',
                        'terms2'         => 'shopping::register.account.fields.required',
                        'sex'         => 'shopping::register.account.fields.required',
                        'state'         => 'shopping::register.account.fields.required',
                        'city'         => 'shopping::register.account.fields.required',



                    ] ,
                    'step3' => [
                        'kit' => 'shopping::register.account.fields.required',
                        'shipping_way' => 'shopping::register.account.fields.required',
                        'payment' => 'shopping::register.account.fields.required',
                    ],
                ]


            ],

            'labels' => [
                'USA' => [
                    'step1' =>[
                        'email'      => 'shopping::register.account.fields.email.placeholder',
                        'confirm-email' => 'shopping::register.account.fields.confirm-email.placeholder',
                        'invited'      => 'shopping::register.account.fields.invited.placeholder',
                        'tel' =>            'shopping::register.account.fields.tel.placeholder',
                        'secret-question' => 'shopping::register.account.fields.secret-question.placeholder',
                        'response-question' => 'shopping::register.account.fields.response-question.placeholder',
                    ],
                    'step2' => [

                            'name'      => 'shopping::register.account.fields.name.placeholder',
                            'lastname'  => 'shopping::register.account.fields.lastname.placeholder',
                            'lastname2' => 'shopping::register.account.fields.lastname2.placeholder',
                            'day'      => 'shopping::register.account.fields.day.placeholder',
                            'month'  => 'shopping::register.account.fields.month.placeholder',
                            'year' => 'shopping::register.account.fields.year.placeholder',
                            'zip' =>            'shopping::register.account.fields.zip.placeholder',
                            /* 'ext_num' =>            'shopping::register.account.fields.ext_num.placeholder', */
                            'state' =>            'shopping::register.account.fields.state.placeholder',
                            'city' =>            'shopping::register.account.fields.city.placeholder',
                            'street' =>            'shopping::register.account.fields.street.placeholder',
                            'terms1' =>            'shopping::register.account.fields.terms1.placeholder',
                            'terms2' =>            'shopping::register.account.fields.terms2.placeholder',
                            'sex' =>            'shopping::register.account.fields.sex.placeholder',
                            'state' =>            'shopping::register.account.fields.state.placeholder',
                            'city' =>            'shopping::register.account.fields.city.placeholder',


                    ],
                    'step3' => [
                        'kit' => 'shopping::register.account.kit.placeholder',
                        'shipping_way' => 'shopping::register.account.shipping.placeholder',
                        'payment' => 'shopping::register.account.payment.placeholder',
                    ],
                ],
                'MEX' => [
                    'step1' =>[
                        'email'      => 'shopping::register.account.fields.email.placeholder',
                        'confirm-email' => 'shopping::register.account.fields.confirm-email.placeholder',
                        'invited'      => 'shopping::register.account.fields.invited.placeholder',
                        'tel' =>            'shopping::register.account.fields.tel.placeholder',
                        'secret-question' => 'shopping::register.account.fields.secret-question.placeholder',
                        'response-question' => 'shopping::register.account.fields.response-question.placeholder',
                    ],
                    'step2' => [

                        'name'      => 'shopping::register.account.fields.name.placeholder',
                        'lastname'  => 'shopping::register.account.fields.lastname.placeholder',
                        'lastname2' => 'shopping::register.account.fields.lastname2.placeholder',
                        'day'      => 'shopping::register.account.fields.day.placeholder',
                        'month'  => 'shopping::register.account.fields.month.placeholder',
                        'year' => 'shopping::register.account.fields.year.placeholder',
                        'zip' =>            'shopping::register.account.fields.zip.placeholder',
                        'ext_num' =>            'shopping::register.account.fields.ext_num.placeholder',
                        'state' =>            'shopping::register.account.fields.state.placeholder',
                        'city' =>            'shopping::register.account.fields.city.placeholder',
                        'street' =>            'shopping::register.account.fields.street.placeholder',
                        'terms1' =>            'shopping::register.account.fields.terms1.placeholder',
                        'terms2' =>            'shopping::register.account.fields.terms2.placeholder',
                        'sex' =>            'shopping::register.account.fields.sex.placeholder',
                        'state' =>            'shopping::register.account.fields.state.placeholder',
                        'city' =>            'shopping::register.account.fields.city.placeholder',



                    ],
                    'step3' => [
                        'kit' => 'shopping::register.account.kit.placeholder',
                        'shipping_way' => 'shopping::register.account.shipping.placeholder',
                        'payment' => 'shopping::register.account.payment.placeholder',
                    ],
                ],


            ],

            'validate_form' => [
                'USA' => [
                    'number'            => true,
                    'suburb'            => false,
                    'county'            => true,
                    'betweem_streets'   => true,
                    'tel'               => true,
                    'cel'               => false,
                ],
            ],





    ],

    'shippingAddress' => [

        'rules' => [

            'USA' => [
                'addShippingAddress' => [
                    'description'   => 'required',
                    'name' => 'required',
                    'zip'   => 'required',
                    'city' => 'required',
                    'state' => 'required',
                    'county'    => 'required',
                    'address'   => 'required',
                    'email'      => 'required|email',
                    'phone' =>  'required|min:10|max:10',
                    'shipping_company'  => 'required',
                ],
                'editShippingAddress' => [
                    'edit_description'   => 'required',
                    'edit_name' => 'required',
                    'edit_zip'   => 'required',
                    'edit_city' => 'required',
                    'edit_state' => 'required',
                    'edit_county'    => 'required',
                    'edit_address'   => 'required',
                    'edit_email'      => 'required|email',
                    'edit_phone' =>  'required|min:10|max:10',
                    'edit_shipping_company'  => 'required',
                ]

            ] ,
            'MEX' => [
                'addShippingAddress' => [
                    'description'   => 'required',
                    'name' => 'required',
                    'zip'   => 'required',
                    'city' => 'required',
                    'state' => 'required',
                    'suburb'    => 'required',
                    'address'   => 'required',
                    'email'      => 'required|email',
                    'phone' =>  'required|min:10|max:10',
                    'shipping_company'  => 'required',
                ],
                'editShippingAddress' => [
                    'edit_description'   => 'required',
                    'edit_name' => 'required',
                    'edit_zip'   => 'required',
                    'edit_city' => 'required',
                    'edit_state' => 'required',
                    'edit_suburb'    => 'required',
                    'edit_address'   => 'required',
                    'edit_email'      => 'required|email',
                    'edit_phone' =>  'required|min:10|max:10',
                    'edit_shipping_company'  => 'required',
                ],
            ] ,
        ],

        'messages' => [
            'USA' => [
                'addShippingAddress' => [
                    'description.required'   => 'shopping::shippingAddress.fields.required',
                    'name.required' => 'shopping::shippingAddress.fields.required',
                    'zip.required'   => 'shopping::shippingAddress.fields.required',
                    'city.required' => 'shopping::shippingAddress.fields.required',
                    'state.required' => 'shopping::shippingAddress.fields.required',
                    'county.required'    => 'shopping::shippingAddress.fields.required',
                    'address.required'   => 'shopping::shippingAddress.fields.required',
                    'email.required'      => 'shopping::shippingAddress.fields.required',
                    'phone.required'      => 'shopping::shippingAddress.fields.required',
                    'shipping_company.required'  => 'shopping::shippingAddress.fields.required',
                ],
                'editShippingAddress' => [
                    'edit_description.required'   => 'shopping::shippingAddress.fields.required',
                    'edit_name.required' => 'shopping::shippingAddress.fields.required',
                    'edit_zip.required'   => 'shopping::shippingAddress.fields.required',
                    'edit_city.required' => 'shopping::shippingAddress.fields.required',
                    'edit_state.required' => 'shopping::shippingAddress.fields.required',
                    'edit_county.required'    => 'shopping::shippingAddress.fields.required',
                    'edit_address.required'   => 'shopping::shippingAddress.fields.required',
                    'edit_email.required'      => 'shopping::shippingAddress.fields.required',
                    'edit_phone.required'      => 'shopping::shippingAddress.fields.required',
                    'edit_shipping_company.required'  => 'shopping::shippingAddress.fields.required',
                ]

            ] ,
            'MEX' => [
                'addShippingAddress' => [
                    'description.required'   => 'shopping::shippingAddress.fields.required',
                    'name.required' => 'shopping::shippingAddress.fields.required',
                    'zip.required'   => 'shopping::shippingAddress.fields.required',
                    'city.required' => 'shopping::shippingAddress.fields.required',
                    'state.required' => 'shopping::shippingAddress.fields.required',
                    'suburb.required'    => 'shopping::shippingAddress.fields.required',
                    'address.required'   => 'shopping::shippingAddress.fields.required',
                    'email.required'      => 'shopping::shippingAddress.fields.required',
                    'phone.required'      => 'shopping::shippingAddress.fields.required',
                    'shipping_company.required'  => 'shopping::shippingAddress.fields.required',
                ],
                'editShippingAddress' => [
                    'edit_description.required'   => 'shopping::shippingAddress.fields.required',
                    'edit_name.required' => 'shopping::shippingAddress.fields.required',
                    'edit_zip.required'   => 'shopping::shippingAddress.fields.required',
                    'edit_city.required' => 'shopping::shippingAddress.fields.required',
                    'edit_state.required' => 'shopping::shippingAddress.fields.required',
                    'edit_suburb.required'    => 'shopping::shippingAddress.fields.required',
                    'edit_address.required'   => 'shopping::shippingAddress.fields.required',
                    'edit_email.required'      => 'shopping::shippingAddress.fields.required',
                    'edit_phone.required'      => 'shopping::shippingAddress.fields.required',
                    'edit_shipping_company.required'  => 'shopping::shippingAddress.fields.required',
                ]
            ]
        ],

        'labels' => [
            'USA' => [
                'addShippingAddress' => [
                    'description'   => 'shopping::shippingAddress.fields.description.placeholder',
                    'name' => 'shopping::shippingAddress.fields.name.placeholder',
                    'zip'   => 'shopping::shippingAddress.fields.zip.placeholder',
                    'city' => 'shopping::shippingAddress.fields.city.placeholder',
                    'state' => 'shopping::shippingAddress.fields.state.placeholder',
                    'county'    => 'shopping::shippingAddress.fields.county.placeholder',
                    'address'   => 'shopping::shippingAddress.fields.address.placeholder',
                    'email'      => 'shopping::shippingAddress.fields.email.placeholder',
                    'phone'      => 'shopping::shippingAddress.fields.phone.placeholder',
                    'shipping_company'  => 'shopping::shippingAddress.fields.shippingCompany.placeholder',

                ],
                'editShippingAddress' => [
                    'edit_description'   => 'shopping::shippingAddress.fields.description.placeholder',
                    'edit_name' => 'shopping::shippingAddress.fields.name.placeholder',
                    'edit_zip'   => 'shopping::shippingAddress.fields.zip.placeholder',
                    'edit_city' => 'shopping::shippingAddress.fields.city.placeholder',
                    'edit_state' => 'shopping::shippingAddress.fields.state.placeholder',
                    'edit_county'    => 'shopping::shippingAddress.fields.county.placeholder',
                    'edit_address'   => 'shopping::shippingAddress.fields.address.placeholder',
                    'edit_email'      => 'shopping::shippingAddress.fields.email.placeholder',
                    'edit_phone'      => 'shopping::shippingAddress.fields.phone.placeholder',
                    'edit_shipping_company'  => 'shopping::shippingAddress.fields.shippingCompany.placeholder',
                ]

            ],
            'MEX' => [
                'addShippingAddress' => [
                    'description'   => 'shopping::shippingAddress.fields.description.placeholder',
                    'name' => 'shopping::shippingAddress.fields.name.placeholder',
                    'zip'   => 'shopping::shippingAddress.fields.zip.placeholder',
                    'city' => 'shopping::shippingAddress.fields.city.placeholder',
                    'state' => 'shopping::shippingAddress.fields.state.placeholder',
                    'suburb'    => 'shopping::shippingAddress.fields.suburb.placeholder',
                    'address'   => 'shopping::shippingAddress.fields.address.placeholder',
                    'email'      => 'shopping::shippingAddress.fields.email.placeholder',
                    'phone'      => 'shopping::shippingAddress.fields.phone.placeholder',
                    'shipping_company'  => 'shopping::shippingAddress.fields.shippingCompany.placeholder',

                ],
                'editShippingAddress' => [
                    'edit_description'   => 'shopping::shippingAddress.fields.description.placeholder',
                    'edit_name' => 'shopping::shippingAddress.fields.name.placeholder',
                    'edit_zip'   => 'shopping::shippingAddress.fields.zip.placeholder',
                    'edit_city' => 'shopping::shippingAddress.fields.city.placeholder',
                    'edit_state' => 'shopping::shippingAddress.fields.state.placeholder',
                    'edit_suburb'    => 'shopping::shippingAddress.fields.suburb.placeholder',
                    'edit_address'   => 'shopping::shippingAddress.fields.address.placeholder',
                    'edit_email'      => 'shopping::shippingAddress.fields.email.placeholder',
                    'edit_phone'      => 'shopping::shippingAddress.fields.phone.placeholder',
                    'edit_shipping_company'  => 'shopping::shippingAddress.fields.shippingCompany.placeholder',
                ]
            ],
        ],
    ],

    'paymentCorbizRelation' => [
        'USA' => [
            'default' => 1,
            1 => '03'
        ],
        'MEX' => [
            'default' => 1,
            1 => '03',
            2 => '03'
        ]
    ],

    'defaultValidationForm' => [
        'USA' => [
            'shipping_way' => 'UPS',
            'warehouse' => 'TELEGP',
            'idcenter' => 'TELENEV',
            'kit' => '9410322',
        ],
        'MEX' => [

        ]
    ],

    'searchFieldOrder' => [
        'USA' => 'bank_transaction',
        'MEX' => 'id',
    ],


    'codes_error_ws' => [
        'add_sales_web' => [
            'item_not_available' => 27
        ]
    ],

    'cron' => [
        'base_path' => '/public/cron/logs',

        'country' => [
            'USA'   => 10,
            'MEX'   => 10,
            'RUS'   => 10,
        ],
    ],

    'pdf' => [
        'coords' => [
            'USA' => [
                ['x' => 7,   'y' => 33], # 0  - Name
                ['x' => 7,   'y' => 43], # 1  - Address
                ['x' => 7,   'y' => 53], # 2  - City
                ['x' => 83,  'y' => 53], # 3  - State
                ['x' => 110, 'y' => 53], # 4  - Zip Code
                ['x' => 165, 'y' => 53], # 5  - Date of Birth
                ['x' => 7,   'y' => 63], # 6  - Email
                ['x' => 7,   'y' => 73], # 7  - Phone
                ['x' => 78,  'y' => 73], # 8  - Cellphone
                ['x' => 154, 'y' => 73], # 9  - Other phone
                ['x' => 161, 'y' => 20], # 10 - Day
                ['x' => 177, 'y' => 20], # 11 - Month
                ['x' => 193, 'y' => 20], # 12 - Year
            ]
        ]
    ]
];