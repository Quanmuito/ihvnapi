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
// Route::get('articles', 'Article\ArticleController@index');
// Route::get('users', 'Article\ArticleController@user');

// /* 
// APIs for getting data
// */

// // Get fivestars collection
// Route::get('heroes/fivestar', 'Hero\FivestarController@index');
// Route::get('heroes/fivestar/shadow', 'Hero\FivestarController@shadow');
// Route::get('heroes/fivestar/fortress', 'Hero\FivestarController@fortress');
// Route::get('heroes/fivestar/albyss', 'Hero\FivestarController@albyss');
// Route::get('heroes/fivestar/forest', 'Hero\FivestarController@forest');
// Route::get('heroes/fivestar/light', 'Hero\FivestarController@light');
// Route::get('heroes/fivestar/dark', 'Hero\FivestarController@dark');

// // Get sixstars collection
// Route::get('heroes/sixstar', 'Hero\SixstarController@index');
// Route::get('heroes/sixstar/shadow', 'Hero\SixstarController@shadow');
// Route::get('heroes/sixstar/fortress', 'Hero\SixstarController@fortress');
// Route::get('heroes/sixstar/albyss', 'Hero\SixstarController@albyss');
// Route::get('heroes/sixstar/forest', 'Hero\SixstarController@forest');
// Route::get('heroes/sixstar/light', 'Hero\SixstarController@light');
// Route::get('heroes/sixstar/dark', 'Hero\SixstarController@dark');

// // Get tenstars collection
// Route::get('heroes/tenstar', 'Hero\TenstarController@index');
// Route::get('heroes/tenstar/shadow', 'Hero\TenstarController@shadow');
// Route::get('heroes/tenstar/fortress', 'Hero\TenstarController@fortress');
// Route::get('heroes/tenstar/albyss', 'Hero\TenstarController@albyss');
// Route::get('heroes/tenstar/forest', 'Hero\TenstarController@forest');
// Route::get('heroes/tenstar/light', 'Hero\TenstarController@light');
// Route::get('heroes/tenstar/dark', 'Hero\TenstarController@dark');