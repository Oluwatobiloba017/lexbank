<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\GeneralController::class, 'landingPage']);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('transfer', [\App\Http\Controllers\HomeController::class, 'transfer']);
Route::get('deposit', [\App\Http\Controllers\HomeController::class, 'deposit']);
Route::get('withdraw', [\App\Http\Controllers\HomeController::class, 'withdraw']);
Route::get('view', [\App\Http\Controllers\HomeController::class, 'viewTransfer']);
