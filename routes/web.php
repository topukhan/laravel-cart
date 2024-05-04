<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@add')->name('cart.add');
Route::post('/cart/conditions', 'CartController@addCondition')->name('cart.addCondition');
Route::delete('/cart/conditions', 'CartController@clearCartConditions')->name('cart.clearCartConditions');
Route::get('/cart/details', 'CartController@details')->name('cart.details');
Route::delete('/cart/{id}', 'CartController@delete')->name('cart.delete');
