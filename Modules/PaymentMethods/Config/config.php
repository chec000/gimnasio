<?php

return [
    'name' => 'PaymentMethods',

    # Paypal
    'paypal' => [
        # USA Paypal config
        'usa' => [
            'currency'     => 'USD',
            'locale'       => 'en_US',
            'country_code' => 'US',
            'development' => [
                'client_id'     => 'AZAGwRojxAZPtCuhm1-BcfgWQPD4OOFt9K6m8o_qEmw7I4W75ZMI9_PTUdZjrXk0TPFaoskGuvx-XxtJ',
                'secret'        => 'EBRxJoLFz6QFtDcdLDKofB790fz8XZaF6etGuoEr6GVPsufyUFVYxd9G70cVAjZN1xCY_y5gyiH1ov70',
                'xp_profile'    => '',
                'host'          => 'https://api.sandbox.paypal.com',
                'mode'          => 'sandbox',
                'mode_checkout' => 'sandbox',
            ],
            'production' => [
                'client_id'     => 'AUoUj97i1s5axqmd7GgxgFPRd4hgZ7ue5kANoGtRDqi2fV-M4XLoa1B12LOH5iL1TBLRZb6sdTQBWdFU',
                'secret'        => 'EParit5J9HFsgj7PSS1Ggpi6ThnFoCPV3YXDmHHD5c6057uVReE5EnCeVN_3xiJhqgy3Jjldyw05F96L',
                'xp_profile'    => '',
                'host'          => 'https://api.paypal.com',
                'mode'          => 'live',
                'mode_checkout' => 'production',
            ]
        ],

        # MEX Paypal config
        'mex' => [
            'currency'     => 'MXN',
            'locale'       => 'es_MX',
            'country_code' => 'MX',
            'development' => [
                'client_id'     => 'Acuev5HLE-_8az38Sq3N7VdOnGHoRlhA92_XOCjeoYfaj_pSc9CFVKZBOMAzYD3wvBakvnQ0DjJ0zSKW',
                'secret'        => 'EBuy1fMOjmNDNnLV3AkFAyZl3p7RaFm7BfrQd5iq_pAoqS-o7rIsAH2gHpqH-T7ilR_QiABtXVMg3AYd',
                'xp_profile'    => 'XP-DPTV-MH7E-3L5P-7MLG',
                'host'          => 'https://api.sandbox.paypal.com',
                'mode'          => 'sandbox',
                'mode_checkout' => 'sandbox',
            ],
            'production' => [
                'client_id'     => 'ASi1OMlcCz6FKPeQX8wbfUkqYg5c7CoksyQHBl0pmUlY9VJG7lesQctcEy_a682xqv2ZOW-piWjisgRA',
                'secret'        => 'ELACBPmzNP4o_5r2W7CanauoxjZAe2lLfcPEJ7w7FQEi8uk62sPUBcq_Zd9HBoBmI4y-2lU-ZxpCA7rs',
                'xp_profile'    => 'XP-KEWP-T59W-NJZN-W9H6',
                'host'          => 'https://api.paypal.com',
                'mode'          => 'live',
                'mode_checkout' => 'production',
            ]
        ]
    ]
];
