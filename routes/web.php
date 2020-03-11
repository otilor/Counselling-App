<?php
Route::get('/verify', 'ApplicationController@check_token')->name('verify');
Route::get('/','ApplicationController@index')->name('check');
Route::get('/status','ApplicationController@show_status');
Route::get('/book','ApplicationController@book');
Route::post('/book','ApplicationController@book_appointment')->name('book_appointment');
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@admin_index');
Route::get('/admin/fetch_data','AdminController@fetch_data');
?>




