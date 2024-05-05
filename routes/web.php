<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

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
    return view('dashboard');
})->name('dashboard');


Route::resource('products', ProductController::class);

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/conditions', [CartController::class, 'addCondition'])->name('cart.addCondition');
Route::delete('/cart/conditions', [CartController::class, 'clearCartConditions'])->name('cart.clearCartConditions');
Route::get('/cart/details', [CartController::class, 'details'])->name('cart.details');
Route::delete('/cart/{id}', [CartController::class, 'delete'])->name('cart.delete');
