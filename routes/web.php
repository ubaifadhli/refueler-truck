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
    Route::get('/airport/{airportId}/log-report/{productId}', 'AirportController@logReport')->name('airport.log-report');
    Route::get('/airport/{airportId}/product/{productId}', 'AirportController@product')->name('airport.product');
    Route::get('/airport/{airportId}/product/{productId}/warning-event', 'AirportController@warningEvent')->name('airport.warning-event');
    Route::get('/log', 'LogController@index')->name('log.index');
    Route::get('/unit', 'UnitController@index')->name('unit.index');
});

// // Testing routing for Airport CRUD
//
// Route::get('add','AirportController@create');
// Route::post('add','AirportController@store');
// Route::get('/','AirportController@index');
// Route::get('edit/{id}','AirportController@edit');
// Route::post('edit/{id}','AirportController@update');
// Route::delete('{id}','AirportController@destroy');

// // Testing routing for Truck Unit CRUD
//
// Route::get('add','UnitController@create');
// Route::post('add','UnitController@store');
// Route::get('/','UnitController@index');
// Route::get('edit/{id}','UnitController@edit');
// Route::post('edit/{id}','UnitController@update');
// Route::delete('{id}','UnitController@destroy');
