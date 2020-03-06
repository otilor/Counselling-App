<?php
Route::get('/check', 'ApplicationsController@check')->name('check');
Route::get('/verify', 'ApplicationsController@check_token')->name('verify');
Route::get('/','ApplicationsController@index');
?>