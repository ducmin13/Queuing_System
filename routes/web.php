<?php
use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\HomeController@index');

//login
Route::get('/flogin', 'App\Http\Controllers\LoginController@flogin');
Route::get('/fregister','App\Http\Controllers\LoginController@fregister');
Route::post('/login','App\Http\Controllers\LoginController@login');
Route::post('/register','App\Http\Controllers\LoginController@register');
Route::get('/fforgot', 'App\Http\Controllers\LoginController@fforgot');


//dashboard
Route::get('/dashboard', 'App\Http\Controllers\HomeController@dashboard');
Route::get('/insert-device', 'App\Http\Controllers\HomeController@finsert_device');
Route::get('/info-device', 'App\Http\Controllers\HomeController@finfo_device');
Route::get('/update-device', 'App\Http\Controllers\HomeController@fupdate_device');

Route::get('/number', 'App\Http\Controllers\HomeController@fnumber');
Route::get('/add-new-number', 'App\Http\Controllers\HomeController@fnew_number');

Route::get('/user', 'App\Http\Controllers\HomeController@user');

//user
Route::post('/update-user/{id}','App\Http\Controllers\HomeController@update_user');
Route::get('/logout','App\Http\Controllers\HomeController@logout');
Route::post('/send-mail', 'App\Http\Controllers\ResetPasswordController@sendMail');
Route::get('/reset-password/{token}', 'App\Http\Controllers\ResetPasswordController@showResetForm');
Route::post('/password/{token}', 'App\Http\Controllers\ResetPasswordController@reset');


//device
Route::get('/device', 'App\Http\Controllers\DeviceController@device');
Route::get('/device/new', 'App\Http\Controllers\DeviceController@finsert_device');
Route::get('/device/info/{id}', 'App\Http\Controllers\DeviceController@info_device');
Route::get('/device/fupdate/{id}', 'App\Http\Controllers\DeviceController@fupdate_device');
Route::post('/device/update/{id}', 'App\Http\Controllers\DeviceController@update_device');
Route::post('/device/new-device','App\Http\Controllers\DeviceController@new_device');


//service
Route::get('/service', 'App\Http\Controllers\ServiceController@service');
Route::get('/service/new', 'App\Http\Controllers\ServiceController@finsert_service');
Route::post('/service/new-service','App\Http\Controllers\ServiceController@new_service');