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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/register', function () {
//     return "Contact site creator to get an account";
// })->name('register');

Route::resource('/heroes', 'Hero\HeroesController');
Route::get('/heroes/{star}/{name}/edit', 'Hero\HeroesController@edit');
Route::delete('/heroes/{star}/{name}', 'Hero\HeroesController@destroy');

// Truncate tables
// Route::get('/heroes/delete/all/fivestars', 'Hero\FivestarController@delete')->middleware('auth');
// Route::get('/heroes/delete/all/sixstars', 'Hero\SixstarController@delete')->middleware('auth');
// Route::get('/heroes/delete/all/tenstars', 'Hero\TenstarController@delete')->middleware('auth');
