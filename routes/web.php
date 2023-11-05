<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CostsController;
use Illuminate\Routing\RouteGroup;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StaticController::class, 'index'])->name('login');
Route::get('/homepage', [StaticController::class, 'home'])->name('homepage');
Route::resource('users', UsersController::class);
Route::get('/pages/users/auth', [UsersController::class, 'auth'],)->name('auth');
