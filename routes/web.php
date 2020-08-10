<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'Auth\LoginController@showLoginForm')->name('root');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/airport', 'AirportController@index')->name('airport.index');
    Route::get('/airport/{id}', 'AirportController@details')->name('airport.details');
    Route::get('/airport/{airportId}/log/{productId}', 'AirportController@log')->name('airport.log');
    Route::get('/log', 'LogController@index')->name('log.index');
    Route::get('/unit', 'UnitController@index')->name('unit.index');
});
