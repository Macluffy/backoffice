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

Route::get('/back.html', [HomeController::class, 'back'])->name('back');


// skill



Route::post('/NewPortfolio', [HomeController::class, 'store1'])->name('store1');



Route::get('/modif/portfolio', [HomeController::class, 'edit1'])->name('edit1');



Route::put('/update1/{id}/portfolio/', [HomeController::class, 'update1'])->name('update1');


Route::get('/show1/{id}/portfolio', [HomeController::class, 'show1'])->name('show1');

Route::get('/createportfolio', [HomeController::class, 'portfolio'])->name('porfolio');

Route::get('/edit/portfolio', [HomeController::class, 'goedit1'])->name('goedit');



Route::delete('delete/{id}/portfolio', [HomeController::class, 'destroy1'])->name('delete1');


// skill

Route::post('/NewSkill', [HomeController::class, 'store2'])->name('store2');



Route::get('/modif/skill', [HomeController::class, 'edit2'])->name('edit2');



Route::put('/update2/{id}/skill/', [HomeController::class, 'update2'])->name('update2');


Route::get('/show2/{id}/skill', [HomeController::class, 'show2'])->name('show2');

Route::get('/createskill', [HomeController::class, 'skill'])->name('skill');

Route::get('/edit/skill', [HomeController::class, 'goedit2'])->name('goedit2');



Route::delete('delete/{id}/skill', [HomeController::class, 'destroy2'])->name('delete2');





// About
Route::post('/NewAbout', [HomeController::class, 'store3'])->name('store3');



Route::get('/modif/About', [HomeController::class, 'edit3'])->name('edit3');



Route::put('/update2/{id}/About/', [HomeController::class, 'update3'])->name('update3');


Route::get('/show3/{id}/About', [HomeController::class, 'show3'])->name('show3');



Route::get('/edit/About', [HomeController::class, 'goedit3'])->name('goedit3');



Route::delete('delete/{id}/about', [HomeController::class, 'destroy3'])->name('delete3');

// contact
Route::post('/NewContact', [HomeController::class, 'store4'])->name('store4');



Route::get('/modif/Contact', [HomeController::class, 'edit4'])->name('edit4');



Route::put('/update4/{id}/Contact/', [HomeController::class, 'update4'])->name('update4');


Route::get('/show4/{id}/Contact', [HomeController::class, 'show4'])->name('show4');



Route::get('/edit/contact', [HomeController::class, 'goedit4'])->name('goedit4');



Route::delete('delete/{id}/contact', [HomeController::class, 'destroy4'])->name('delete4');

// titre
Route::post('/NewTitre', [HomeController::class, 'store5'])->name('store5');



Route::get('/modif/Titre', [HomeController::class, 'edit5'])->name('edit5');



Route::put('/update5/{id}/Titre/', [HomeController::class, 'update5'])->name('update5');


Route::get('/show5/{id}/Titre', [HomeController::class, 'show5'])->name('show5');



Route::get('/edit/Titre', [HomeController::class, 'goedit5'])->name('goedit5');



Route::delete('delete/{id}/Titre', [HomeController::class, 'destroy5'])->name('delete5');




