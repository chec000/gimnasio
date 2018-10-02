<?php

Route::group(['middleware' => ['web', 'cms.brand_middleware'], 'prefix' => 'web_api', 'namespace' => 'Modules\CMS\Http\Controllers'], function ()
{
    Route::get('categories', ['uses' => 'ProductsApiController@getCategories']);
    Route::get('products', ['uses' => 'ProductsApiController@getProducts']);
    Route::get('global_search', ['uses' => 'SearchApiController@globalSearch']);
});

//Login Routes
Route::group(['middleware' => ['web', 'cms.brand_middleware'], 'prefix' => 'login', 'namespace' => 'Modules\CMS\Http\Controllers'], function()
{
    Route::get('/', ['as' => 'login.index','uses' => 'LoginController@getLogin']);
    Route::post('/auth', ['as' => 'login.auth', 'uses' => 'LoginController@postAuth']);
    Route::get('/logout', ['as' =>  'login.logout', 'uses' => 'LoginController@getLogout']);
});

//Reset Password Routes
Route::group(['middleware' => ['web', 'cms.brand_middleware', 'exit.eo'], 'prefix' => 'resetpassword', 'namespace' => 'Modules\CMS\Http\Controllers'], function() {
    //Step 1
    Route::get('/', ['as' => 'resetpassword.index', 'uses' => 'ResetPasswordController@index']);
    Route::post('/validate_dist', ['as' => 'resetpassword.validate_dist', 'uses' => 'ResetPasswordController@postValidateDist']);

    //Step 2
    Route::get('/option', ['as' => 'resetpassword.option', 'uses' => 'ResetPasswordController@getOption']);
    Route::post('/method', ['as' => 'resetpassword.method', 'uses' => 'ResetPasswordController@postOption']);
    Route::get('/back', ['as' => 'resetpassword.back', 'uses' => 'ResetPasswordController@getBack']);

    //Step 3_1
    Route::get('/code', ['as' => 'resetpassword.code', 'uses' => 'ResetPasswordController@getVerificationCode']);
    Route::post('/verification_code', ['as' => 'resetpassword.verification_code', 'uses' => 'ResetPasswordController@postVerificationCode']);
    Route::get('/back_code', ['as' => 'resetpassword.back_code', 'uses' => 'ResetPasswordController@getBackCode']);

    //Step 3_2
    Route::get('/borndate', ['as' => 'resetpassword.borndate', 'uses' => 'ResetPasswordController@getBornDate']);
    Route::post('/validate_borndate', ['as' => 'resetpassword.validate_borndate', 'uses' => 'ResetPasswordController@postBornDate']);
    Route::post('/parameters', ['as' =>'resetpassword.parameters', 'uses' => 'ResetPasswordController@postParameters']);

    //Step 4
    Route::get('/question', ['as' => 'resetpassword.question', 'uses' => 'ResetPasswordController@getQuestion']);
    Route::post('/validate_question', ['as' => 'resetpassword.validate_question', 'uses' => 'ResetPasswordController@postQuestion']);

    //Step 5
    Route::get('/new_password', ['as' => 'resetpassword.new_password', 'uses' => 'ResetPasswordController@getNewPassword']);
    Route::post('/validate_new_password', ['as' => 'resetpassword.validate_new_password', 'uses' => 'ResetPasswordController@postNewPassword']);
    Route::get('/back_new_password', ['as' => 'resetpassword.back_new_password', 'uses' => 'ResetPasswordController@getBackNewPassword']);
    Route::get('/send_code', ['as' => 'resetpassword.send_code', 'uses' => 'ResetPasswordController@getSendCode']);

    //Step 6
    Route::get('/info_user', ['as' => 'resetpassword.info_user', 'uses' => 'ResetPasswordController@getInfoUser']);
    Route::get('/login', ['as' => 'resetpassword.login', 'uses' => 'ResetPasswordController@getLogin']);
});

Route::group(['middleware' => ['web', 'cms.brand_middleware']], function()
{
    Route::get('test_session', function () {
        $session = Session::all();
        //devolver con dd() puede provocar errores con las variables de sesion, usar con cuidado
        return response()->json($session);
    });
    Route::get('delete_session', function ()
    {
        Session::flush();
        return 'session deleted';
    });
});

Route::group(['middleware' => ['web'], 'namespace' => 'Modules\CMS\Http\Controllers'], function()
{

    Route::get('saveCountry/{lat?}/{lon?}', ['uses' => 'StartController@saveCountry','as'=>'save_country']);
    Route::get('getLanguages/{id}/{saveWHSession?}', ['uses' => 'StartController@getCountryLanguages','as'=>'index']);
    Route::get('saveCountryId/{id}', ['uses' => 'StartController@getCountry','as'=>'save_country_id']);
    Route::get('language/{id}', ['uses' => 'StartController@getLanguageId','as'=>'save_language_id']);
    Route::get('sessionData', ['uses' => 'StartController@sessionData','as'=>'data']);
    Route::get('existSession', ['uses' => 'StartController@existSession','as'=>'exist.session']);
    Route::get('varsMenuSession', ['uses' => 'StartController@getVariablesMenuSession','as'=>'test.varsMenuSession']);
    Route::get('getCitiesWs/{StateKey}', ['uses' => 'StartController@getCitiesWs','as'=>'getCitiesWs']);
    Route::post('setVariablesStartWH', ['uses' => 'StartController@setVariablesWareHouse','as'=>'setVariablesStartWH']);

    Route::get('testFunction', ['uses' => 'StartController@getTestFunction','as'=>'test.testFunction']);
    Route::post('changeCountryLang', ['uses' => 'StartController@changeCountryLanguage','as'=>'country_language.change']);
   
      Route::get('reportDetail', ['uses' => 'SurveyController@getReportWithDetails','as'=>'report.survey']);
    Route::get('report', ['uses' => 'SurveyController@getReport','as'=>'report.survey']);

     Route::post('getCuestionsSurvey', ['uses' => 'SurveyController@saveSurvey','as'=>'get.survey']);
     Route::post('getActiveSurvey', ['uses' => 'SurveyController@getActiveSurvey','as'=>'exist.survey']);
     Route::post('saveSurvey', ['uses' => 'SurveyController@setSurrveyToSave','as'=>'save.survey']);
          
});

Route::group(['middleware' => ['web', 'cms.brand_middleware', 'exit.eo'], 'namespace' => 'Modules\CMS\Http\Controllers'], function()
{
    # CEDIS ROUTES INIT
    Route::get('/cedis', 'CedisController@index')->name('cedis.index');
    Route::get('/cedis/{slug}', 'CedisController@detail')->name('cedis.detail')->where('slug', '[A-Za-z0-9-]+');
    # CEDIS ROUTES END
    Route::get('start', ['uses' => 'StartController@index','as'=>'index']);
    Route::post('save_read_cookies', ['uses' => 'StartController@saveReadCookies', 'as' => 'vars.save_read_cokies']);
});
//cms routes
Route::group(['middleware' => ['web', 'cms.brand_middleware', 'exit.eo'], 'namespace' => 'Modules\CMS\Http\Controllers'], function()
{
    Route::any('{other}', ['uses' => 'CmsController@generatePage'] )->where('other', '.*');
    Route::get('uploads/{filePath}', ['middleware' => 'admin.secure_upload', 'uses' => 'CmsController@getSecureUpload'])->where('filePath', '.*');
});
