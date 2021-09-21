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

Route::get('/', \App\Http\Controllers\HomeController::class)->name('welcome');

Route::get('home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('about', \App\Http\Controllers\AboutController::class)->name('about');

Route::get('contact', \App\Http\Controllers\ContactController::class)->name('contact');

Route::get('blogs', [\App\Http\Controllers\DepartementController::class, 'index'])->name('blogs');

Route::get('blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog');

Route::get('departements', [\App\Http\Controllers\DepartementController::class,'index'])->name('departements');

Route::get('departement/show/{departement}', [\App\Http\Controllers\DepartementController::class,'show'])->name('departement.show');

Route::get('parcours', [\App\Http\Controllers\ParcourController::class,'index'])->name('parcours');

Route::get('parcour/show/{parcour}', [\App\Http\Controllers\ParcourController::class,'index'])->name('parcour.show');

Route::get('filieres',[\App\Http\Controllers\FiliereController::class,'index'])->name('filieres');

Route::get('filiere/show/{filiere}',[\App\Http\Controllers\FiliereController::class,'index'])->name('filiere.show');




