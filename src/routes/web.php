<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accounts', [AccountController::class, 'index']);
Route::get('/accounts/{account}', [AccountController::class, 'show']);

Route::get('/accounts/{account}/categories', [CategoryController::class, 'index']);
Route::get('/accounts/{account}/categories/{category}', [CategoryController::class, 'show']);

Route::get('/accounts/{account}/categories/{category}/transactions', [TransactionController::class, 'index']);
Route::get('/accounts/{account}/categories/{category}/transactions/{transaction}', [TransactionController::class, 'show']);





