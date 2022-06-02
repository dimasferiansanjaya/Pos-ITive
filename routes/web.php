<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaterkitController;
use App\Http\Controllers\LanguageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [StaterkitController::class, 'home'])->name('home');
Route::get('home', [StaterkitController::class, 'home'])->name('home');
// Route Components
Route::get('products/categories', [StaterkitController::class, 'layout_empty'])->name('products.categories');
Route::get('products/list', [StaterkitController::class, 'layout_empty'])->name('products.list');

// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);
