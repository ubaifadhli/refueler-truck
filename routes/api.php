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

Route::middleware('auth.basic')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('v1.0/tasks', 'TaskController@createTask')->middleware('auth.basic')->name('v1.0-tasks');
Route::post('v1.0/scadas', 'TaskController@createScadas')->middleware('auth.basic')->name('v1.0-scadas');
