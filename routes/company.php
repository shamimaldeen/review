<?php

Route::namespace('Company')->group(function () { 
   
    Route::match(['get','put'],'update_profile','CompanyController@update_profile');

    Route::post('update_password','CompanyController@update_password');

});
