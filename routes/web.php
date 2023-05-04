<?php
use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/flogin', 'App\Http\Controllers\LoginController@flogin');
Route::get('/fregister','App\Http\Controllers\LoginController@fregister');
Route::post('/login','App\Http\Controllers\LoginController@login');
Route::post('/register','App\Http\Controllers\LoginController@register');
Route::get('/fforgot', 'App\Http\Controllers\LoginController@fforgot');
Route::get('/confirm-password', 'App\Http\Controllers\LoginController@confirm_password');


Route::get('/dashboard', 'App\Http\Controllers\HomeController@dashboard');
Route::get('/user', 'App\Http\Controllers\HomeController@user');
Route::post('/update-user/{id}','App\Http\Controllers\HomeController@update_user');
Route::get('/logout','App\Http\Controllers\HomeController@logout');


