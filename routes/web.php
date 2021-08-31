<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



Route::get('/index.html', [HomeController::class, 'index'])->name('index');

// Route::get('/index.html', [HomeController::class, 'create'])->name('create');

// Route::get('/index.html', [HomeController::class, 'index'])->name('index');

// Route::get('/index.html', [HomeController::class, 'index'])->name('index');

// Route::get('/index.html', [HomeController::class, 'index'])->name('index');

// Route::get('/index.html', [HomeController::class, 'index'])->name('index');

Route::get('/back.html', [HomeController::class, 'back'])->name('back');

Route::get('/createportfolio', [HomeController::class, 'portfolio'])->name('porfolio');