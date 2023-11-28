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
//ホーム
Route::get('/', 'HomeController@index')->name('home');
//PDF出力
Route::get('/pdf', 'PdfController@test')->name('pdf.test');


