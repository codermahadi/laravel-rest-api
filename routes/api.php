<?php

use Illuminate\Http\Request;

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

// List Article
Route::get('articles', 'ArticleCtrl@index');

//Single article show
Route::get('article/{id}', 'ArticleCtrl@show');

//Create new Article
Route::post('article', 'ArticleCtrl@store');

//Update Article
Route::put('article', 'ArticleCtrl@store');

//Delete Article
Route::delete('article/{id}', 'ArticleCtrl@destroy');

