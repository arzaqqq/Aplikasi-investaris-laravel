<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;

Route::get('/product', [ProductController::class, 'index']);
Route::get('product/create', [ProductController::class,'create']);
Route::post('product/store', [ProductController::class,'store']);

Route::get('product/edit/{id}', [ProductController::class,'edit']);
Route::put('product/{id}', [ProductController::class,'update']);

Route::delete('product/{id}', [ProductController::class, 'delete']);
