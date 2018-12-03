<?php

Route::group(['middleware' => 'web', 'prefix' => 'paymentmethods', 'namespace' => 'Modules\PaymentMethods\Http\Controllers'], function()
{
    Route::get('/', 'PaymentMethodsController@index');
});


Route::group(['middleware' => ['web', 'auth.eo', 'cms.brand_middleware'], 'prefix' => 'payment', 'namespace' => 'Modules\PaymentMethods\Http\Controllers'], function() {
    Route::post('/paypal/create', 'PaypalController@createPayment')->name('paypal.create');
    Route::post('/paypal/cancel', 'PaypalController@cancelPayment')->name('paypal.cancel');
    Route::post('/paypal/process', 'PaypalController@processPayment')->name('paypal.process');

    Route::post('/paypalplus/create', 'PaypalPlusController@createPayment')->name('paypalplus.create');
    Route::post('/paypalplus/process', 'PaypalPlusController@processPayment')->name('paypalplus.process');
});
