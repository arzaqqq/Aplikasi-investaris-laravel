<?php

use App\Http\Middleware\IsLogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;

Route::get("/login", [AuthController::class,"loginview"]);
Route::post("/login", [AuthController::class,"login"]);
Route::post("/logout", [AuthController::class,"logout"]);

Route::middleware(IsLogin::class)->group(function () {
    // DASHBOARD
    Route::get('/', [DashboardController::class,'index']);

    // PRODUCT
    Route::get('/product', [ProductController::class, 'index']);
    Route::get('product/create', [ProductController::class,'create']);
    Route::post('product/store', [ProductController::class,'store']);
    Route::get('product/edit/{id}', [ProductController::class,'edit']);
    Route::put('product/{id}', [ProductController::class,'update']);
    Route::delete('product/{id}', [ProductController::class, 'delete']);

    // CATEGORY
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [CategoryController::class,'create']);
    Route::post('categories/store', [CategoryController::class,'store']);
    Route::get('categories/edit/{id}', [CategoryController::class,'edit']);
    Route::put('categories/{id}', [CategoryController::class,'update']);
    Route::delete('categories/{id}', [CategoryController::class, 'delete']);

});


