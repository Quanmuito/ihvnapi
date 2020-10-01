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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/register', function () {
    return '<h1 style="text-align: center; margin-top: 40vh">Contact site creator to get an account</h1>';
})->name('register');

Route::resource('/heroes', 'Hero\HeroesController');
Route::get('/heroes/{star}/{name}/edit', 'Hero\HeroesController@edit');
Route::delete('/heroes/{star}/{name}', 'Hero\HeroesController@destroy');

// Truncate tables
// Route::get('/heroes/delete/all/fivestars', 'Hero\FivestarController@delete')->middleware('auth');
// Route::get('/heroes/delete/all/sixstars', 'Hero\SixstarController@delete')->middleware('auth');
// Route::get('/heroes/delete/all/tenstars', 'Hero\TenstarController@delete')->middleware('auth');
