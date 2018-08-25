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
//guest o invitado
Route::get('/', 'Auth\LoginController@showLoginForm')->middleware('guest');

Route::get('dashboard','DashboardController@index')->name('dashboard');

Route::post('login', 'Auth\LoginController@login')->name('login');