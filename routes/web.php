<?php
Route::get('/verify', 'ApplicationController@check_token')->name('verify');
Route::get('/','ApplicationController@index')->name('check');
Route::get('/status','ApplicationController@show_status');
Route::get('/book','ApplicationController@book');
Route::post('/book','ApplicationController@book_appointment')->name('book_appointment');
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
/*
Route::get('/admin','AdminController@admin_index');
Route::post('/admin','AdminController@approve_application');
Route::get('/profile','AdminController@admin_profile');
Route::post('/profile','AdminController@update_profile');
*/
Route::get('/admin', 'AdminController@index');
Route::get('/admin/create', 'AdminController@profile');
Route::post('/admin/create','AdminController@create_profile');
Route::resource('/admin', 'AdminController');
?>