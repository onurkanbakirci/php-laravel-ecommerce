<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/register","App\Http\Controllers\Api\AuthController@register");
Route::post("/login","App\Http\Controllers\Api\AuthController@login");
Route::get("/products","App\Http\Controllers\Api\ProductController@product");
Route::get("/categories","App\Http\Controllers\Api\CategoryController@category");
Route::get("/carousels","App\Http\Controllers\Api\CarouselController@carousel");
Route::get("/messages","App\Http\Controllers\Api\MessageController@message");
Route::get("/sendMessage","App\Http\Controllers\Api\MessageController@sendMessage");

Route::group(["middleware"=>"auth:api"],function(){
    /*
        payment
    */
});

