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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index');
Route::get('/login', 'CustomAuthController@index');
Route::post('/login', 'CustomAuthController@checkUser')->name('custom.login');
Route::get('/register', 'CustomAuthController@registerView');
Route::post('/register', 'CustomAuthController@registerUser')->name('custom.register');
Route::get('/logout', 'CustomAuthController@logout')->name('logout');

// ADMIN ROUTES

Route::get('/admin/dashboard', 'admin\AdminDashboardController@index');
