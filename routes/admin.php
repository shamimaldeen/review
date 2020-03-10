<?php

/*sRoute::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');*/

Route::namespace('Admin')->group(function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::match(['get', 'post'], 'setting', 'AdminController@setting')->name('setting');
    Route::resource('category', 'CategoryController');
    Route::get('category/delete/{id}', 'CategoryController@delete');
    Route::resource('package', 'PackageController');
    Route::resource('blog_category', 'BlogcategoryController');
    Route::resource('blog', 'BlogPostController');
    Route::resource('founder', 'AboutController');
    Route::get('company/status/{status}/{id}', 'CompanyController@update_status');
    Route::resource('company', 'CompanyController');
    Route::group(['prefix' => 'review'], function () {
        Route::get('/', 'ReviewController@index');
        Route::get('approve/{id}', 'ReviewController@approve');
        Route::get('deny/{id}', 'ReviewController@deny');
    });
});