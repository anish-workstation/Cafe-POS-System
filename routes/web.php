<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProductController,OrderController,CustomerController};

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::resource('customers', CustomerController::class);
