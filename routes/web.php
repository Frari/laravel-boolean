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



Route::get('/','HomeController@index')->name('home');
Route::get('Privacy-Policy','HomeController@privacyPolicy')->name('privacy-policy');
Route::get('Lavora-Con-Noi','HomeController@lavoraConNoi')->name('lavora-con-noi');
