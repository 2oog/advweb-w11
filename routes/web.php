<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [ProductsController::class, 'index']);
Route::get('create', [ProductsController::class, 'create']);
Route::post('store', [ProductsController::class, 'store']);
