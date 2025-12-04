<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [ProductsController::class, 'index'])->name('products.index');
Route::get('create', [ProductsController::class, 'create'])->name('products.create');
Route::post('store', [ProductsController::class, 'store'])->name('products.store');
Route::get('edit/{product}', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('update/{product}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('destroy/{product}', [ProductsController::class, 'destroy'])->name('products.destroy');
