<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
----------------------------------------------
| Web Routes
----------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|----------------------------------------------
*/
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/chi-siamo', [PublicController::class, 'aboutUs'])->name('aboutUs');


Route::get('/chi-siamo/detail/{name}', [PublicController::class, 'aboutUsDetail'])->name('aboutUsDetail');

Route::get('/contatti', [PublicController::class, 'contacts'])->name('contacts');

Route::get('/movies', [MovieController::class, 'movieList'])->name('movie.list');

Route::get('/movies/detail/{id}', [MovieController::class, 'movieDetail'])->name('movie.detail');

//invio mail//
Route::post('/contact-us', [PublicController::class, 'contactUs'])->name('contactUs');

//INSERIMENTO FILM
Route::get('/movie/create', [MovieController::class, 'create'])->name('movie.create');
Route::post('/movie/submit', [MovieController::class, 'store'])->name('movie.submit'); 