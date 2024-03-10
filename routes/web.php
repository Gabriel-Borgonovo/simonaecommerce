<?php

use Illuminate\Support\Facades\Route;

Route::view('/','index')->name('index');
Route::view('/productos','productos')->name('productos');
Route::view('/nosotros','nosotros')->name('nosotros');
Route::view('/contacto','contacto')->name('contacto');
