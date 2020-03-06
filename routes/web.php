<?php
Route::get('/verify', 'ApplicationsController@check_token')->name('verify');
Route::get('/','ApplicationsController@index')->name('check');
Route::get('/status','ApplicationsController@show_status');
?>