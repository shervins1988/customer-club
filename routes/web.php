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
//Laravel Defaults
Route::get('/', function () {
    return view('welcome');
});

//Account Controll
Auth::routes();
Route::post('password/mobile','Auth\ForgotPasswordController@SendRestToken');
Route::get('password/token','Auth\ForgotPasswordController@showInputCodeForm');
Route::post('password/token','Auth\ForgotPasswordController@resetPassword');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/acc','UserController@acc')->name('acc');
Route::post('/acc','UserController@update');

//Resource Controller
Route::resource('customers', 'CustomerController');
Route::resource('transactions', 'TransactionController');
