<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\HomeController;


Route::get('/', [Dashboard::class, 'index'])->name('home');

Route::get('product/{id}/gallery', [ProductController::class, 'gallery'])
    ->name('product.gallery');
    
Route::resource('products', ProductController::class);
Route::resource('product-galleries', ProductGalleryController::class);

Route::get('transactions/{id}/set-status', [TransactionController::class, 'setStatus'])
    ->name('transactions.status');

Route::resource('transactions', TransactionController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
