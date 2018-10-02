<?php

Route::group(['middleware' => ['web', 'confirm.env'], 'prefix' => 'rest', 'namespace' => 'Modules\Mockup\Http\Controllers'], function()
{
    Route::get('/', ['uses' => 'RestWsController@index'] );
    /* PRIMER ENTREGA */
    Route::get('/getCountryConfiguration', ['uses' => 'RestWsController@getCountryConfiguration'] );
    Route::get('/getZipCode', ['uses' => 'RestWsController@getZipCode'] );
    Route::get('/getState', ['uses' => 'RestWsController@getState'] );
    Route::get('/getCity', ['uses' => 'RestWsController@getCity'] );
    Route::get('/getAvailableWH', ['uses' => 'RestWsController@getAvailableWH'] );
    Route::get('/getCarrerTitle', ['uses' => 'RestWsController@getCarrerTitle'] );
    Route::get('/getShippingCompanies', ['uses' => 'RestWsController@getShippingCompanies'] );
    Route::get('/getDocumentsId', ['uses' => 'RestWsController@getDocumentsId'] );
    Route::get('/validateLogin', ['uses' => 'RestWsController@validateLogin'] );
    Route::get('/getDataPassword', ['uses' => 'RestWsController@getDataPassword'] );
    Route::get('/resetPassword', ['uses' => 'RestWsController@resetPassword'] );
    Route::get('/validateSponsor', ['uses' => 'RestWsController@validateSponsor'] );

    /* SEGUNDA ENTREGA */
    Route::get('/getShipmentAddress', ['uses' => 'RestWsController@getShipmentAddress'] );
    Route::get('/addShipmentAddress', ['uses' => 'RestWsController@addShipmentAddress'] );
    Route::get('/updateShipmentAddress', ['uses' => 'RestWsController@updateShipmentAddress'] );
    Route::get('/deleteShipmentAddress', ['uses' => 'RestWsController@deleteShipmentAddress'] );

    /* TERCER ENTREGA */
    Route::get('/addFormSalesTransaction', ['uses' => 'RestWsController@addFormSalesTransaction'] );
    Route::get('/addFormEntrepreneur', ['uses' => 'RestWsController@addFormEntrepreneur'] );
    Route::get('/addEntrepreneur', ['uses' => 'RestWsController@addEntrepreneur'] );
    Route::get('/addSalesWeb', ['uses' => 'RestWsController@addSalesWeb'] );

    Route::get('/proccessSales', ['uses' => 'RestWsController@proccessSales'] );
    Route::get('/proccessInscription', ['uses' => 'RestWsController@proccessInscription'] );
    Route::get('/proccessCustomer', ['uses' => 'RestWsController@proccessCustomer'] );


    /* AUTENTICACIÓN */
    Route::get('/login', ['uses' => 'RestWsController@login'] );

});

Route::group(['middleware' => ['web', 'cms.brand_middleware', 'confirm.env'], 'prefix' => 'mockup', 'namespace' => 'Modules\Mockup\Http\Controllers'], function()
{
    Route::any('{other}', ['uses' => 'MockupController@generateMockup'] )->where('other', '.*');
});

