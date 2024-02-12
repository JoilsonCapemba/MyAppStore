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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/product', [\App\Http\Controllers\ProductController::class, 'show']);



// Admin Routes

Route::get('/admin/products', [\App\Http\Controllers\AdminProductController::class, 'index']);
Route::get('/admin/products/edit', [\App\Http\Controllers\AdminProductController::class, 'edit']);