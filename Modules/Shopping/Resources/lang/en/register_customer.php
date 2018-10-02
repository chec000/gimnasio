<?php

return [
    'title' => 'Customer Registration',

    'months'        => [
        1   => 'January',
        2   => 'February',
        3   => 'March',
        4   => 'April',
        5   => 'May',
        6   => 'June',
        7   => 'July',
        8   => 'August',
        9   => 'September',
        10  => 'October',
        11  => 'November',
        12  => 'December',
    ],

    'error__box'    => 'One or more problems occurred',

    'error_rest'    => 'An inconvenience has been detected, for more information contact CREO.',

    'tabs' => [
        'account' => [
            'desktop'   => '1. Create Account',
            'mobile'    => 'Account',
        ],

        'email' => [
            'desktop'   => '2. Mail Address',
            'mobile'    => 'Mail',
        ],

        'activation' => [
            'desktop'   => '3. Activation',
            'mobile'    => 'Activation',
        ],
    ],
    'account' => [
        'country' => [
            'label'     => 'Country',
            'default'   => 'Select your country',
        ],

        'invited' => [
            'label' => [
                'desktop'   => 'Were you invited by a Omnilife\'s business man',
                'mobile'    => 'Were you invited',
            ],

            'answer' => [
                'yes'   => 'Yes',
                'no'    => 'No'
            ],
        ],

        'businessman_code' => [
            'label'         => 'Businessman Code',
            'placeholder'   => 'Enter your businessman code',
        ],

        'meet_us' => [
            'label'     => 'How did you meet us?',
        ],

        'sex' => [
            'label'     => 'Sex',
            'male'      => 'Male',
            'female'    => 'Female',
        ],

        'borndate' => [
            'label' => 'Born Date',
            'day'   => 'Day',
            'month' => 'Month',
            'year'  => 'Year',
            'alert' => 'The Born Date is not a valid date.',
        ],

        'full_name' => [
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
        ],

        'identification' => [
            'label'         => 'Identification',
            'option'        => 'ID Type',
            'placeholder'   => 'Identification number',

        ],

        'expiration' => [
            'placeholder'   => 'Expiration date',
        ],

        'address' => [
            'label'         => 'Address',
            'placeholders'  => [
                'zip'               => 'Zip Code',
                'ext_num'           => 'Exterior Number',
                'int_num'           => 'Interior Number',
                'colony'            => 'County',
                'betweem_streets'   => 'On the streets',
                'state'             => 'State',
                'city'              => 'City',
                'street'            => 'Street',
                'shipping_company'  => 'Shipping Company',
            ],
        ],
    ],

    'mail_address' => [
        'mail' => [
            'label'         => 'Mail',
            'placeholder'   => 'Enter your mail',
        ],

        'confirm_mail' => [
            'label'         => 'Confirm Mail',
            'placeholder'   => 'Enter your mail',
        ],

        'tel' => [
            'label'         => 'Telephone',
            'placeholder'   => 'Enter your telephone',
        ],

        'cel' => [
            'label'         => 'Cellphone',
            'placeholder'   => 'Enter your cellphone',
        ],

        'info_send'     => 'Check your email to continue the registration process.',
        'title'         => 'Support Omnilife',
        'subject'       => 'Request to validate your email',
    ],

    'activation' => [
        'question'      => 'Secret Question',
        'answer'        => 'Answer',
        'option'        => 'Select one question',
        'placeholder'   => 'Write your answer',
        'label'         => 'Registration completed successfully, your data are as follows',
        'code'          => 'Businessman Code',
        'password'      => 'Password',
    ],

    'mail' => [
        'hello'             => 'Hello',
        'title'             => 'Email Confirmation',
        'text'              => 'To continue with the registration process, click on the following button.',
        'confirm'           => 'Go to Email Confirmation',
        'regards'           => 'Regards',
        'team'              => 'Team Omnilife',
        'privacy_policy'    => 'Privacy Policy',

        'customer'          => [
            'title'         => 'Welcome to Omnilife',
            'subject'       => 'Congratulations! You are now an Admirable Customer Omnilife.',
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
            'title'         => 'New Admirable Customer to your network',
            'subject'       => 'Congratulations, a wonderful new customer has been registered to your network!',
            'p1'            => '<strong>:name_sponsor</strong>, We would like to inform you that <strong>:name_customer </strong>Is now part of your network. Now that he / she is on the way to a healthier and more beautiful life enjoying the nutritional products of Omnilife. You will earn points for purchases that he / she makes, so you can reach your monthly goal more easily.',
            'p2'            => 'The new customer information is',
            'text1'         => 'It is very important to remember that as a presenter, you can',
            'text2'         => 'Work with your Admirable Clients, to go beyond and reach your goals!',
            'client_code'   => 'Client Code',
            'name'          => 'Name',
            'telephone'     => 'Telephone',
            'email'         => 'Email',
            'li1'           => 'Answer the customer&#039;s doubts',
            'li2'           => 'Promoting the purchase of Omnilife products',
            'li3'           => 'Recommend the use of products',
            'li4'           => 'Support in the buying process',
        ],
    ],

    'fields' => [
        'required'      => 'The :attribute field is required.',
        'in'            => 'The selected :attribute is invalid.',
        'not_in'        => 'The selected :attribute is invalid.',
        'email'         => 'The :attribute must be a valid email address.',
        'numeric'       => 'The :attribute must be a number.',
        'same'          => 'The :attribute and :other must match.',
        'max'           => 'The :attribute may not be greater than :max characters.',
        'date'          => 'The :attribute is not a valid date.',
        'date_format'   => 'The :attribute does not match the format :format.',
        'unique'        => 'The :attribute has already been taken.',
    ],

    'btn' => [
        'back'          => 'Go Back',
        'continue'      => 'Continue',
        'activate'      => 'Activate',
        'resend_mail'   => 'Resend Mail',
        'finish'        => 'Continue Shopping',
    ],

    'modal_exit' => [
        'title' => 'Unfinished Registration',
        'body'  => 'When leaving this page without concluding your registration you will lose the information that you have, do you want to continue?',
        'btn' => [
            'accept'    => 'Accept',
            'cancel'    => 'Cancel',
        ],
    ],
];