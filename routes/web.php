<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductController::class, 'index'])->name('index');
Route::get('/productos/search', [ProductController::class, 'search'])->name('search');
Route::get('/productos/{productId}', [ProductController::class, 'show'])->name('showProduct');
Route::get('/productos', [ProductController::class, 'allProducts'])->name('productos');
Route::view('/nosotros','nosotros')->name('nosotros');
Route::view('/contacto','contacto')->name('contacto');
