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

Route::post('login', 'Api\Auth\AuthController@login');
Route::post('logout', 'Api\Auth\AuthController@logout');

Route::group(['middleware' => ['auth:api']], function(){
    Route::post('qoute-list', 'Api\QouteBasicDataController@qouteList');
    Route::post('qoute-save', 'Api\QouteBasicDataController@store');

});



