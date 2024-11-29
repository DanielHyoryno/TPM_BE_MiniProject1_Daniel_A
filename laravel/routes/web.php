<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthenticationController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::controller(ProductController::class)->group(function() {
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('index', 'index')->name('index'); 
        Route::get('create', 'create')->name('create'); 
        Route::post('store', 'store')->name('store');
        Route::get('{id}/edit', 'edit')->name('edit'); 
        Route::put('{id}', 'update')->name('update');
        Route::delete('{id}', 'destroy')->name('destroy');
    });
});

Route::controller(AuthenticationController::class)->group(function() {
    Route::get('/register', 'getRegister')->name('getRegister');
    Route::post('/register', 'register')->name('register');
    Route::get('/login', 'getLogin')->name('getLogin');
    Route::post('/login', 'login')->name('login');
});
