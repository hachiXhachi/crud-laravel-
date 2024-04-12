<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\middleware;
Route::get('/', function () {
    return view('login');
})->name('user.login');

Route::get('/signup', [ProductController::class, 'signup'])->name('user.signup');
Route::post('/signup', [ProductController::class, 'register'])->name('user.register');
Route::post('/', [ProductController::class, 'verify'])->name('user.verify');
Route::post('/logout', [ProductController::class, 'logout'])->name('logout');
Route::middleware([middleware::class])->group(function () {
    Route::get('/dashboard', [ProductController::class, 'dashboard1'])->name('user.dashboard');
    Route::get('/profile/{id}/edit', [ProductController::class, 'editProfile'])->name('user.edit');
    Route::put('/profile/{user}/update', [ProductController::class, 'storeProfile'])->name('user.update');
    Route::get('/profile', [ProductController::class, 'profile'])->name('user.profile');
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('/product/datatables', [ProductController::class, 'datatables'])->name('product.datatables');
    Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/category', [ProductController::class, 'category'])->name('product.category');
});
