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
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('/product/datatables', [ProductController::class, 'datatables'])->name('product.datatables');
    Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
});
