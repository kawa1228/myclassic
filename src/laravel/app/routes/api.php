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

// 作品
Route::get('/product', "Api\ProductController@index");

// 時代
Route::get('/period', "Api\PeriodController@index");

// 作曲家
Route::get('/composer', "Api\ComposerController@index");

// 楽式
Route::get('/form', "Api\FormController@index");
