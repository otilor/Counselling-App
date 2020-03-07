<?php
Route::get('/verify', 'ApplicationsController@check_token')->name('verify');
Route::get('/','ApplicationsController@index')->name('check');
Route::get('/status','ApplicationsController@show_status');
Route::get('/book','ApplicationsController@book');
Route::post('/book','ApplicationsController@book_appointment')->name('book_appointment');
?>