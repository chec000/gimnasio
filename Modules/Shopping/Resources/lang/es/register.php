<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Language Lines
    |--------------------------------------------------------------------------
    */
    'title' => 'Inscripción',
    'tabs' => [
      'account' => [
        'desktop' => '1. Crear cuenta',
        'mobile' => 'Cuenta'
      ],
      'info' => [
        'desktop' => '2. Información',
        'mobile' => 'Info'
      ],
      'kit' => [
        'desktop' => '3. Selecciona tu kit',
        'mobile' => 'Kit'
      ],
      'confirm' => [
        'desktop' => '4. Confirmar',
        'mobile' => 'Confirmar'
      ],
    ],

    'account' => [
      'invited' => [
        'label' => [
          'desktop' => '¿Fuiste invitado por un Distribuidor Independiente OMNILIFE?',
          'mobile' => '¿Fuiste invitado?',
        ],
        'answer' => [
          'yes' => 'Si',
          'no' => 'No'
        ]
      ],
      'businessman_code' => [
        'label' => 'Código de Empresario',
        'placeholder' => 'Enter your businessman code'
      ],
      'meet_us' => [
        'label' => '¿Cómo nos conociste?',
        'default' => '¿Cómo nos conociste?',
      ],
      'country' => [
        'label' => 'País',
        'default' => 'Selecciona tu país'
      ],
      'email' => [
        'label' => 'Correo Electrónico',
        'placeholder' => 'Ingresa tu correo electrónico'
      ],
      'confirm_email' => [
        'label' => 'Confirma tu correo electrónico',
        'placeholder' => 'Confirma tu correo electrónico'
      ],
      'phone' => [
        'label' => 'Teléfono',
        'placeholder' => 'Ingresa tu número de teléfono'
      ],
      'secret_question' => [
        'label' => 'Pregunta Secreta',
        'default' => 'Selecciona una pregunta secreta'
      ],
      'secret_answer' => [
        'label' => 'Respuesta',
        'placeholder' => 'Escribe tu respuesta'
      ],
    ],

    'info' => [
      'full_name' => [
        'label' => 'Nombre completo',
        'placeholders' => [
          'name' => 'Nombre',
          'last_name' => 'Apellido',
          'last_name2' => 'Apellido materno',
          'sex' => 'Sexo',
        ]
      ],
      'birth_date' => [
        'label' => 'Fecha de nacimiento',
        'defaults' => [
          'day' => 'día',
          'month' => 'mes',
          'year' => 'año',
        ]
      ],
      'id' => [
        'label' => 'ID',
        'defaults' => [
          'type' => 'ID type',
        ],
        'placeholders' => [
          'number' => 'ID number',
        ]
      ],
      'address' => [
        'label' => 'Dirección',
        'placeholders' => [
          'street' => 'Calle',
          'ext_num' => 'Número exterior',
          'int_num' => 'Número interior',
          'colony' => 'Colonia',
          'streets' => 'Entre calles',
          'state' => 'Estado',
          'city' => 'City',
          'zip' => 'Zip code',
        ]
      ],
      'terms_contract' => [
        'text' => 'I accept',
        'link' => 'Contract terms and conditions',
      ],
      'terms_payment' => [
        'text' => 'I accept',
        'link' => 'Payment terms and conditions',
      ]
    ],

    'kit' => [
      'types' => 'Select your kit',
      'shipping' => 'Select your shipping method',
      'shippingCompanies_empty' => 'No se encontraron compañias de envio con la ciudad y estado ingresados,favor de reportar el problema e intentear con otro estado y ciudad',
      'payment' => 'Select payment method',
      'bill' => [
        'subtotal' => 'Subtotal',
        'management' => 'Management',
        'taxes' => 'Taxes',
        'points' => 'Points',
        'total' => 'Total',
      ]
    ],

    'confirm' => [
      'email' => 'Check your email to finish account creation.',
      'businessman_code' => 'Your businessman code is'
    ],

    'modal' => [
      'header' => 'Processing payment',
      'text_highlight' => 'You are closer from your financial freedom.',
      'text' => 'Don\'t close or reload this window.'
    ],

    'terms' => [
        'title' => "Al dar clic en Aceptar confirma que está de acuerdo con nuestros Términos y condiciones.",
        'cancel' => 'Cancelar',
        'accept' => 'Aceptar',
        'download' => 'descargar políticas de contrato',
    ],

    'mail' => [
        'hello'             => 'Hello',
        'title'             => 'Email Confirmation',
        'regards'           => 'Regards',
        'team'              => 'Team Omnilife',
        'privacy_policy'    => 'Privacy Policy',

        'order' => [

            'title' => 'Order Confirmation',

        ],

        'customer'          => [
            'title'         => 'Welcome to Omnilife',
            'subject'       => 'Congratulations! You are now an Entepreneur Omnilife.',
            'h6'            => 'Welcome',
            'p1'            => 'Thank you<strong> :name</strong> By having completed your registration, you are on the road to a healthier and more beautiful life enjoying Omnilife products',
            'h4'            => 'Your life is about to change!',
            'p2'            => 'Save your Client Code and Password, which will be necessary to make your purchases.',
            'p3'            => 'This is your account information',
            'client_code'   => 'Client Code',
            'password'      => 'Password',
            'question'      => 'Secret Question',
            'sponsor'       => 'Sponsor Information',
            'name_sponsor'  => 'Name',
            'email_sponsor' => 'Email',
        ],

        'sponsor'           => [
            'title'         => 'New Entepreneur to your network',
            'subject'       => 'Congratulations, a wonderful new entepreneur has been registered to your network!',
            'p1'            => '<strong>:name_sponsor</strong>, We would like to inform you that <strong>:name_customer </strong>Is now part of your network. Now that he / she is on the way to a healthier and more beautiful life enjoying the nutritional products of Omnilife. You will earn points for purchases that he / she makes, so you can reach your monthly goal more easily.',
            'p2'            => 'The new entepreneur information is',
            'text1'         => 'It is very important to remember that as a presenter, you can',
            'text2'         => 'Work with your entepreneurs, to go beyond and reach your goals!',
            'client_code'   => 'Entepreneur Code',
            'name'          => 'Name',
            'telephone'     => 'Telephone',
            'email'         => 'Email',
            'li1'           => 'Answer the entepreneur doubts',
            'li2'           => 'Promoting the purchase of Omnilife products',
            'li3'           => 'Recommend the use of products',
            'li4'           => 'Support in the buying process',
        ],
    ],


    'next_button' => 'Continue',
    'prev_button' => 'Go back',
    'checkout_button' => 'Checkout',
];
