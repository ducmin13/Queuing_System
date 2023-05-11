<?php
use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/flogin', 'App\Http\Controllers\LoginController@flogin');
Route::get('/fregister','App\Http\Controllers\LoginController@fregister');
Route::post('/login','App\Http\Controllers\LoginController@login');
Route::post('/register','App\Http\Controllers\LoginController@register');
Route::get('/fforgot', 'App\Http\Controllers\LoginController@fforgot');


Route::get('/dashboard', 'App\Http\Controllers\HomeController@dashboard');
Route::get('/device', 'App\Http\Controllers\HomeController@device');
Route::get('/insert-device', 'App\Http\Controllers\HomeController@finsert_device');
Route::get('/info-device', 'App\Http\Controllers\HomeController@finfo_device');
Route::get('/update-device', 'App\Http\Controllers\HomeController@fupdate_device');
Route::get('/service', 'App\Http\Controllers\HomeController@service');
Route::get('/number', 'App\Http\Controllers\HomeController@fnumber');
Route::get('/add-new-number', 'App\Http\Controllers\HomeController@fnew_number');
Route::get('/insert-service', 'App\Http\Controllers\HomeController@finsert_service');
Route::get('/user', 'App\Http\Controllers\HomeController@user');


Route::post('/update-user/{id}','App\Http\Controllers\HomeConadd-new-servicetroller@update_user');
Route::get('/logout','App\Http\Controllers\HomeController@logout');


Route::post('/send-mail', 'App\Http\Controllers\ResetPasswordController@sendMail');
Route::get('/reset-password/{token}', 'App\Http\Controllers\ResetPasswordController@showResetForm');
Route::post('/password/{token}', 'App\Http\Controllers\ResetPasswordController@reset');
