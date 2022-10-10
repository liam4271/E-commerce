<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');
Route::view('admin', 'AdminTab');
Route::view('home', 'Home');
Route::view('logout', 'Logout');

Route::GET('admin', 'App\Http\Controllers\DataController@show');

Route::POST('AddProduct', 'App\Http\Controllers\ProductController@addProduct');
Route::POST('AddCategory', 'App\Http\Controllers\CategoryController@addCategory');
Route::POST('AddUser', 'App\Http\Controllers\UserController@addUser');
Route::POST("Login", "App\Http\Controllers\LoginController@connect");
Route::POST("Logout", "App\Http\Controllers\LoginController@disconect");
