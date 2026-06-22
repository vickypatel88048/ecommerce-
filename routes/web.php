<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('login', [AuthController::class, 'index'])
    ->name('login');

Route::post('post-login', [AuthController::class, 'postLogin'])
    ->name('login.post');

Route::get('registration', [AuthController::class, 'registration'])
    ->name('register');

Route::post('post-registration', [AuthController::class, 'postRegistration'])
    ->name('register.post');

Route::get('logout', [AuthController::class, 'logout'])
    ->name('logout');

/*
|--------------------------------------------------------------------------
| User Protected Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [ProductController::class, 'index'])
        ->name('dashboard');

    Route::get('/cart', [CartController::class, 'index'])
        ->name('cart');

    Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])
        ->name('add.to.cart');

    Route::get('/cart/increase/{id}', [CartController::class, 'increase'])
        ->name('cart.increase');

    Route::get('/cart/decrease/{id}', [CartController::class, 'decrease'])
        ->name('cart.decrease');

    Route::get('/cart/remove/{id}', [CartController::class, 'remove'])
        ->name('cart.remove');

    Route::get('/checkout', [CartController::class, 'checkout'])
        ->name('checkout');
});

/*
|--------------------------------------------------------------------------
| Admin Login Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AdminController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminController::class, 'login'])
    ->name('admin.login.submit');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');

/*
|--------------------------------------------------------------------------
| Admin Product Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {

    Route::get('/products', [AdminProductController::class, 'index'])
        ->name('products.index');

    Route::get('/products/create', [AdminProductController::class, 'create'])
        ->name('products.create');

    Route::post('/products', [AdminProductController::class, 'store'])
        ->name('products.store');

    Route::get('/products/{id}/edit', [AdminProductController::class, 'edit'])
        ->name('products.edit');

    Route::put('/products/{id}', [AdminProductController::class, 'update'])
        ->name('products.update');

    Route::delete('/products/{id}', [AdminProductController::class, 'destroy'])
        ->name('products.destroy');
});


Route::get('/admin/logout', [AdminController::class, 'logout'])
    ->name('admin.logout');