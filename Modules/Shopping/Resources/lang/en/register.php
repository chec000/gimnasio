<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Language Lines
    |--------------------------------------------------------------------------
    */

    'title' => 'Registry',

    'tabs' => [
      'account' => [
        'desktop' => '1. Create account',
        'mobile' => 'Account'
      ],
      'info' => [
        'desktop' => '2. Information',
        'mobile' => 'Info'
      ],
      'kit' => [
        'desktop' => '3. Select your kit',
        'mobile' => 'Kit'
      ],
      'confirm' => [
        'desktop' => '4. Confirm',
        'mobile' => 'Confirm'
      ],
    ],

    'account' => [
      'invited' => [
        'label' => [
          'desktop' => 'Were you invited by a Omnilife\'s business man?',
          'mobile' => 'Were you invited?',
        ],
        'answer' => [
          'yes' => 'Yes',
          'no' => 'No'
        ]
      ],
      'businessman_code' => [
        'label' => 'Businessman Code',
        'placeholder' => 'Enter your businessman code'
      ],
      'meet_us' => [
        'label' => 'How did you meet us?',
        'default' => 'How did you meet us?',
      ],
      'country' => [
        'label' => 'Country',
        'default' => 'Select your country',
        'empty_countries' => 'No countries found it',
        'emptydata' => 'No country data found it',
        'emptypool' => 'No distributor data found it',
      ],
      'email' => [
        'label' => 'Email',
        'placeholder' => 'Enter your email'
      ],
      'confirm_email' => [
        'label' => 'Confirm email',
        'placeholder' => 'Confirm your email'
      ],
      'phone' => [
        'label' => 'Phone',
        'placeholder' => 'Enter your phone'
      ],
        'cel' => [
            'label' => 'cellphone',
            'placeholder' => 'Enter your cellphone'
        ],
      'pool' => [
          'empty_country' => 'Empty Country',
      ],
      'secret_question' => [
        'label' => 'Secret question',
        'default' => 'Select a secret question',
        'emptydata' => 'No secret questions data found it',
      ],
      'secret_answer' => [
        'label' => 'Answer',
        'placeholder' => 'Write your answer'
      ],
      'parameters' => [
        'emptydata' => 'No parameters configuration found it',
      ],
      'kit' => [
        'placeholder' => 'Kit',
      ],
      'shipping' => [
        'placeholder' => 'Shipping',
      ],
      'payment' => [
        'placeholder' => 'payment',
      ],
      'fields' => [
              'name'      => [
                  'label'         => 'Full Name',
                  'placeholder'   => 'Name',
              ],
              'lastname'  => [
                  'placeholder'   => 'Last Name',
              ],
              'lastname2' => [
                  'placeholder'   => 'Mother\'s Last Name',
              ],
              'email'      => [

                'placeholder'   => 'Email',
                ],
              'invited'      => [

                  'placeholder'   => 'Invited',
              ],
              'confirm-email'      => [
                  'placeholder'   => 'Confirm email',
              ],
              'tel'      => [
                  'placeholder'   => 'Phone',
              ],
              'cel' => [
                  'placeholder' => 'Cellphone',
              ],
              'secret-question'      => [

                  'placeholder'   => 'Secret Question',
              ],
              'response-question'      => [

                  'placeholder'   => 'Answer',
              ],
             'day' => [
                 'placeholder' => 'day',
             ],
             'month' => [
                 'placeholder' => 'month',
             ],
             'year' => [
                 'placeholder' => 'year',
             ],
            'zip' => [
                'placeholder' => 'zipcode',
             ],
             'terms1' => [
                 'placeholder' => 'Terms and conditions',
             ],
             'ext_num' => [
                 'placeholder' => 'exterior number'
             ],
             'terms2' => [
                 'placeholder' => 'Transfer data',
             ],
            'city' => [
                'placeholder' => 'city',
            ],
            'state' => [
                'placeholder' => 'state',
            ],

            'required'  => 'The :attribute field is required.',
            'same' => 'The :attribute must match with the email',
        ],
    ],

    'info' => [
      'full_name' => [
        'label' => 'Full name',
        'placeholders' => [
          'name' => 'Name',
          'last_name' => 'Last name',
          'last_name2' => 'Last name',
          'sex' => 'Sex',
        ]
      ],
      'birth_date' => [
        'label' => 'Birth date',
        'defaults' => [
          'day' => 'day',
          'month' => 'month',
          'year' => 'year',
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
        'label' => 'Address',
        'placeholders' => [
          'street' => 'Street',
          'ext_num' => 'Exterior number',
          'int_num' => 'Interior number',
          'colony' => 'Colony',
          'streets' => 'On the streets',
          'state' => 'State',
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
        'link' => 'the transfer of my data to the country of Mexico, Operations Center of the OMNILIFE business.',
      ],
      'terms_information' => [
        'text' => 'I accept',
        'link' => 'receive information related to products, services, promotions and / or OMNILIFE events through my contact information provided.'
      ],
      'mandatory' => [
          'label' => 'The field is required',
      ]
    ],

    'kit' => [
      'types' => 'Select your kit',
      'shipping' => 'Select your shipping method',
      'shippingCompanies_empty' => 'No shipping companies were found with the state and city entered, please report the problem and try another state and city',
      'payment' => 'Select payment method',
      'choose' => 'Choose a kit',
      'sendby' => 'Send By ',
      'bill' => [
        'subtotal' => 'Subtotal',
        'management' => 'Management',
        'taxes' => 'Taxes',
        'points' => 'Points',
        'total' => 'Total',
        'resume' => 'Resume',
        'discount' => 'Discount',
        'shipping_cost' => 'Shipping'
      ]
    ],

    'confirm' => [
      'email' => 'Check your email to finish account creation.',
      'businessman_code' => 'Your businessman code is',
      'thank_you' => 'Thanks for your purchase',
      'payment_successful' => 'Payment successful',
      'no_data_in_tables' => 'No data found it on local tables'
    ],

    'modal' => [
      'header' => 'Processing payment',
      'text_highlight' => 'You are closer from your financial freedom.',
      'text' => 'Don\'t close or reload this window.'
    ],

    'terms' => [
        'title' => "When click on \"Accept\", you confirm that you agree with our Terms and Conditions.",
        'cancel' => 'Cancel',
        'accept' => 'Accept',
        'download' => 'download contract policies',
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

    'warehouse' => [
        'empty' => 'Empty warehouse, modify your shippping information',
    ],

    'next_button' => 'Continue',
    'prev_button' => 'Go back',
    'checkout_button' => 'Checkout',
    'errors' => 'Errors',
];
