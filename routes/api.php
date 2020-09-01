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

// APIs
Route::get('hero/fivestar', 'Hero\FivestarController@index');
Route::get('hero/fivestar/shadow', 'Hero\FivestarController@shadow');
Route::get('hero/fivestar/fortress', 'Hero\FivestarController@fortress');
Route::get('hero/fivestar/albyss', 'Hero\FivestarController@albyss');
Route::get('hero/fivestar/forest', 'Hero\FivestarController@forest');
Route::get('hero/fivestar/light', 'Hero\FivestarController@light');
Route::get('hero/fivestar/dark', 'Hero\FivestarController@dark');