<?php

use App\Http\Controllers\ProductController;
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

Route::get('/products', [ProductController::class, 'index'])->name('list_products');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('detail_produt');
Route::get('/product', [ProductController::class, 'new'])->name('new_product');
Route::post('/product', [ProductController::class, 'store'])->name('post_product');
Route::post('/poduct/{id}', [ProductController::class, 'edit'])->name('edit_product');
