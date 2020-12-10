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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
//admin
//Route::resource('admins', 'AdminController')->middleware('auth:admin');
Route::resource('admin', 'App\Http\Controllers\Admin\AdminController');
Route::get('/admin/login', 'App\Http\Controllers\Admin\AdminController@showLoginForm');

Route::resource('users', 'App\Http\Controllers\Admin\UserController');
Route::resource('orders', 'App\Http\Controllers\Admin\OrderController');
Route::resource('carousels', 'App\Http\Controllers\Admin\CarouselController');
Route::resource('products', 'App\Http\Controllers\Admin\ProductController');
Route::resource('categories', 'App\Http\Controllers\Admin\CategoryController');

Route::resource('order', 'App\Http\Controllers\OrderController');
Route::resource('payment', 'App\Http\Controllers\PaymentController');
Route::resource('card', 'App\Http\Controllers\CardController');
Route::resource('product', 'App\Http\Controllers\ProductController');

Route::get('/user', 'App\Http\Controllers\UserController@index');
Route::get('/user/basket', 'App\Http\Controllers\UserController@basket');
Route::get('/user/changePassword', 'App\Http\Controllers\UserController@change_password');

Route::get('/lastProduct','App\Http\Controllers\HomeController@last_products');
Route::get('/opportunity','App\Http\Controllers\HomeController@opportunity');
Route::get('/mesafeli-satıs-sözlesmesi','App\Http\Controllers\InfoController@distance_sales_construct');
Route::get('/hakkimizda','App\Http\Controllers\InfoController@about_us');
Route::get('/iade-degisim','App\Http\Controllers\InfoController@return_product');
