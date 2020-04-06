<?php
Route::get('/verify', 'ApplicationController@check_token')->name('verify');
Route::get('/','ApplicationController@index')->name('check');
Route::get('/status','ApplicationController@show_status');
Route::get('/book','ApplicationController@book');
Route::get('/email','ApplicationController@send_email');
Route::post('/book','ApplicationController@book_appointment')->name('book_appointment');
Auth::routes();

/*
| This specifies the route for super admins
| 
|
|
*/
Route::group(['prefix' => 'super_admin'], function() {
    Route::get('/', 'Super_Admin\Super_Admin_Controller@index')->name('super_admin');
});

/* 
| This specifies the routes for admins
|
|
|
*/

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin');
});

/*

Route::get('/admin', 'Admin\AdminController@index')->name('admin');
Route::get('/admin/create', 'AdminController@create');
Route::post('/admin/create','AdminController@create_profile');
Route::get('/admin/pending', 'AdminController@pending_applications');
Route::get('/admin/action', 'AdminController@application_action');
Route::post('/admin','AdminController@update')->name('admin_action');
//Route::resource('/admin', 'AdminController');

*/