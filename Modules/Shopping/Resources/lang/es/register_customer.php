<?php

return [
    'title' => 'Registro de Cliente',

    'months'        => [
        1   => 'Enero',
        2   => 'Febrero',
        3   => 'Marzo',
        4   => 'Abril',
        5   => 'Mayo',
        6   => 'Junio',
        7   => 'Julio',
        8   => 'Agosto',
        9   => 'Septiembre',
        10  => 'Octubre',
        11  => 'Noviembre',
        12  => 'Diciembre',
    ],

    'error__box'    => 'Se produjo uno o varios problemas',

    'error_rest'    => 'Se ha detectado un inconveniente, para m&aacute;s informaci&oacute;n comunícate a CREO.',

    'tabs' => [
        'account' => [
            'desktop'   => '1. Registro de Cliente',
            'mobile'    => 'Cuenta',
        ],

        'email' => [
            'desktop'   => '2. Correo Electr&oacute;nico',
            'mobile'    => 'Correo Electr&oacute;nico',
        ],

        'activation' => [
            'desktop'   => '3. Activaci&oacute;n',
            'mobile'    => 'Activaci&oacute;n',
        ]
    ],

    'account' => [
        'country' => [
            'label'     => 'Pa&iacute;s',
            'default'   => 'Selecciona un pa&iacute;s',
        ],

        'invited' => [
            'label' => [
                'desktop'   => 'Fuiste invitado por un Empresario Omnilife',
                'mobile'    => 'Fuiste invitado',
            ],

            'answer' => [
                'yes'   => 'Si',
                'no'    => 'No',
            ]
        ],

        'businessman_code' => [
            'label'         => 'C&oacute;digo de Empresario',
            'placeholder'   => 'Ingresar c&oacute;digo',
        ],

        'meet_us' => [
            'label'     => '¿C&oacute;mo nos conociste?',
        ],

        'sex' => [
            'label'     => 'Sexo',
            'male'      => 'Hombre',
            'female'    => 'Mujer',
        ],

        'borndate' => [
            'label' => 'Fecha de nacimiento',
            'day'   => 'D&iacute;a',
            'month' => 'Mes',
            'year'  => 'Año',
            'alert' => 'El campo Fecha de Nacimiento no corresponde con una fecha v&aacute;lida.',
        ],

        'full_name' => [
            'name'      => [
                'label'         => 'Nombre Completo',
                'placeholder'   => 'Nombre',
            ],

            'lastname'  => [
                'placeholder'   => 'Apellido Paterno',
            ],

            'lastname2' => [
                'placeholder'   => 'Apellido Materno',
            ],
        ],

        'identification' => [
            'label'         => 'Identificaci&oacute;n',
            'option'        => 'Tipo de identificaci&oacute;n',
            'placeholder'   => 'N&uacute;mero de Identificaci&oacute;n',
        ],

        'expiration' => [
            'placeholder'   => 'Fecha de Expiraci&oacute;n',
        ],

        'address' => [
            'label'         => 'Address',
            'placeholders'  => [
                'zip'               => 'C&oacute;digo Postal',
                'street'            => 'Calle',
                'ext_num'           => 'N&uacute;mero Exterior',
                'int_num'           => 'N&uacute;mero Interior',
                'state'             => 'Estado',
                'city'              => 'Ciudad',
                'colony'            => 'Condado',
                'betweem_streets'   => 'Entre Calles',
                'shipping_company'  => 'Compa&ntilde;ia de Env&iacute;o',
            ],
        ],
    ],

    'mail_address' => [
        'mail' => [
            'label'         => 'Correo',
            'placeholder'   => 'Ingresa correo',
        ],

        'confirm_mail' => [
            'label'         => 'Confirmar correo',
            'placeholder'   => 'Ingresa correo',
        ],

        'tel' => [
            'label'         => 'Tel&eacute;fono',
            'placeholder'   => 'Ingresa tel&eacute;fono',
        ],

        'cel' => [
            'label'         => 'Celular',
            'placeholder'   => 'Ingresa celular',
        ],

        'info_send'     => 'Revisa tu correo electr&oacute;nico para continuar el proceso de registro.',
        'title'         => 'Soporte Omnilife',
        'subject'       => 'Solicitud para validar tu correo electr&oacute;nico',
    ],

    'activation' => [
        'question'      => 'Pregunta Secreta',
        'answer'        => 'Respuesta',
        'option'        => 'Selecciona una pregunta',
        'placeholder'   => 'Escribe tu respuesta',
        'label'         => 'Registro completado con &eacute;xito, tus datos son los siguientes',
        'code'          => 'C&oacute;digo de cliente',
        'password'      => 'Contraseña',
    ],

    'mail' => [
        'hello'             => 'Hola',
        'title'             => 'Confirmación de Correo Electrónico',
        'text'              => 'Para continuar con el proceso de registro, haz clic en el botón siguiente.',
        'confirm'           => 'Confirmar Correo Electrónico',
        'regards'           => 'Saludos cordiales',
        'team'              => 'Equipo Omnilife',
        'privacy_policy'    => 'Política de Privacidad',

        'customer'          => [
            'title'         => 'Bienvenido a Omnilife',
            'subject'       => '¡Felicidades! Ahora eres un Cliente Admirable de Omnilife',
            'h6'            => 'Bienvenido',
            'p1'            => 'Gracias<strong> :name</strong> por completar tu registro, estás en el camino hacia una vida m&aacute;s sana y hermosa disfrutando de los productos de Omnilife',
            'h4'            => '¡Tu vida esta a punto de cambiar!',
            'p2'            => 'Guarda tu c&oacute;digo de cliente y contraseña, que ser&aacute;n necesarios para realizar sus compras.',
            'p3'            => 'Esta es la informaci&oacute;n de tu cuenta',
            'client_code'   => 'C&oacute;digo de Cliente',
            'password'      => 'Contraseña',
            'question'      => 'Pregunta Secreta',
            'sponsor'       => 'Informaci&oacute;n del Patrocinador',
            'name_sponsor'  => 'Nombre',
            'email_sponsor' => 'Correo',
        ],

        'sponsor'           => [
            'title'         => 'Nuevo Cliente Admirable en su red',
            'subject'       => 'Felicidades, un maravilloso nuevo cliente ha sido registrado en su red',
            'p1'            => '<strong>:name_sponsor</strong>, Nos gustar&iacute;a informarle que <strong>:name_customer</strong> ahora es parte de su red. Ahora que &eacute;l / ella est&aacute; en el camino hacia una vida m&aacute;s saludable y m&aacute;s hermosa disfrutando de los productos nutricionales de Omnilife. Obtendr&aacute; puntos por las compras que realice, para que pueda alcanzar su meta mensual m&aacute;s f&aacute;cilmente.',
            'p2'            => 'Informaci&oacute;n del Nuevo Cliente',
            'text1'         => 'Es muy importante recordar que como presentador, puedes',
            'text2'         => '¡Trabaja con tux clientes, para ir m&aacute;s all&aacute; y alcanzar tus objetivos!',
            'client_code'   => 'C&oacute;digo de Cliente',
            'name'          => 'Nombre',
            'telephone'     => 'Tel&eacute;fono',
            'email'         => 'Correo',
            'li1'           => 'Responda las dudas al cliente',
            'li2'           => 'Promover la compra de productos Omnilife',
            'li3'           => 'Recomiende el uso de productos',
            'li4'           => 'Soporte en el proceso de compra',
        ],
    ],

    'fields' => [
        'required'      => 'El campo :attribute es obligatorio.',
        'in'            => 'El campo :attribute es inválido.',
        'not_in'        => 'El campo :attribute seleccionado es inválido.',
        'email'         => 'El campo :attribute debe ser una dirección de correo válida.',
        'numeric'       => 'El campo :attribute debe ser un número.',
        'same'          => 'Los campos :attribute y :other deben coincidir.',
        'max'           => 'El campo :attribute no debe contener más de :max caracteres.',
        'date'          => 'El campo :attribute no corresponde con una fecha válida.',
        'date_format'   => 'El campo :attribute no corresponde con el formato de fecha :format.',
        'unique'        => 'El valor del campo :attribute ya está en uso.',
    ],

    'btn' => [
        'back'          => 'Regresar',
        'continue'      => 'Continuar',
        'activate'      => 'Activar',
        'resend_mail'   => 'Reenviar Correo',
        'finish'        => 'Continuar Comprando',
    ],

    'modal_exit' => [
        'title' => 'Registro inconcluso',
        'body'  => 'Al salir de esta página sin concluir tu inscripción perderás la información que llevas, ¿deseas continuar?',
        'btn' => [
            'accept'    => 'Aceptar',
            'cancel'    => 'Cancelar',
        ],
    ],
];