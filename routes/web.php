<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductController::class, 'index'])->name('index');
Route::get('/productos/{encryptedProductId}', [ProductController::class, 'show'])->name('showProduct');
Route::view('/productos','productos')->name('productos');
Route::view('/nosotros','nosotros')->name('nosotros');
Route::view('/contacto','contacto')->name('contacto');
