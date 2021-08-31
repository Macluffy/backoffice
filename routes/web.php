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

Route::get('/edit/portfolio', [HomeController::class, 'edit1'])->name('edit1');

Route::get('/modif/portfolio/', [HomeController::class, 'update1'])->name('update1');




Route::get('/show1/{id}/portfolio', [HomeController::class, 'show1'])->name('show1');



Route::get('/back.html', [HomeController::class, 'back'])->name('back');

Route::get('/createportfolio', [HomeController::class, 'portfolio'])->name('porfolio');


Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('porfolio');

Route::delete('delete/{id}/portfolio', [HomeController::class, 'destroy1'])->name('delete1');

