<?php

use App\Http\Controllers\auth\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaterkitController;
use App\Http\Controllers\LanguageController;
use Illuminate\Routing\RouteGroup;

Route::middleware('auth')->group(function(){
    Route::get('home', [StaterkitController::class, 'home'])->name('home');
    Route::get('/', [StaterkitController::class, 'home'])->name('home');
    Route::get('products/categories', [StaterkitController::class, 'layout_empty'])->name('products.categories');
    Route::get('products/list', [StaterkitController::class, 'layout_empty'])->name('products.list');
});

// authentication
Route::middleware('guest')->group(function(){
    Route::get('auth/login', [AuthenticationController::class, 'index'])->name('login');
    Route::post('auth/login', [AuthenticationController::class, 'login']);
    Route::get('auth/register', [AuthenticationController::class, 'register'])->name('register');
    Route::post('auth/register', [AuthenticationController::class, 'store']);
});
Route::get('auth/logout', [AuthenticationController::class, 'logout'])->name('logout');

// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);
