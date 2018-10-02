<?php

Route::group(['middleware' => ['web', 'auth.eo'], 'prefix' => 'distributorarea', 'namespace' => 'Modules\DistributorArea\Http\Controllers'], function()
{
    Route::get('/', 'DistributorAreaController@index');
});
