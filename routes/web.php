<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ValidationController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/loginilhamblog', [ValidationController::class, 'login'])->name('login');
Route::post('actionlogin', [ValidationController::class, 'action'])->name('actionlogin');
Route::get('actionlogout', [ValidationController::class, 'logout'])->name('actionlogout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('blog', BlogController::class)->middleware('auth');
Route::resource('category', CategoryController::class)->middleware('auth');
Route::get('category.all', [CategoryController::class, 'all'])->middleware('auth');

Route::get('/profile', [DashboardController::class, 'profile'])->middleware('auth');

Route::get('/', [FrontEndController::class, 'index']);
Route::get('/{article:slug}', [FrontEndController::class, 'view']);
