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

Route::get('/', 'HomeController@index')->name('home');


Route::get('search-qoute', 'HomeController@getMoreUsers')->name('qoute.search-qoute');
Route::get('get-qoute-rand', 'HomeController@getqouterand')->name('qoute.get-qoute-rand');

