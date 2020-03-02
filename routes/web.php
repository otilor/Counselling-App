<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function() {
    return view('about');
});


Route::get('/contact', function() {
    return view('contact');
});
Route::get('/apply', 'Applicants@validateApplicants');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/
Route::get('/','TodosController@index');
Route::post('/create/submit', 'TodosController@storeTodo')->name('store_todo');
//Route::post('/todo/delete', 'TodosController@destroy')->name('delete_todo');
Route::resource('todo', 'TodosController');
