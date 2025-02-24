<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
Route::get('/', function () {
    return view('welcome');
});

// Route for Home Page
Route::get('/', [HomeController::class, 'index']);

// Routes for Product Categories (Route Prefix)
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

// Route for User Profile (Route Parameters)
Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

// Route for Sales Page
Route::get('/sales', [SalesController::class, 'index']);

