<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductController; // Import the ProductController
use App\Http\Controllers\HomeController; // Import the ProductController


// Home route to display products
// In web.php, you define your routes
// In web.php
// In web.php
Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::resource('products', ProductController::class);
// Route::get('/', [ProductController::class,'showSort']);