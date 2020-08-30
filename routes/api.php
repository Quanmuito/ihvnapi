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

// List
Route::get('articles', 'Article\ArticleController@index');
Route::get('heroes/shadow', 'HeroesController@shadow');

// API design
Route::get('heroes/fivestar/shadow', 'Hero\FivestarController@shadow');
// Route::get('heroes/fivestar/shadow/{id}', 'Hero\FivestarController@show');