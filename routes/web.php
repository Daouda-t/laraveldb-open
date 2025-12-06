<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\publicController;
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
Route::get('/', [publicController::class, 'homepage'])->name('homepage');
Route::get('/chi-siamo', [publicController::class, 'aboutUs'])->name('aboutUs');


Route::get('/chi-siamo/detail/{name}', [publicController::class, 'aboutUsDetail'])->name('aboutUsDetail');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');

Route::get('/movies', [MovieController::class, 'movielist'])->name('movie.list');

Route::get('/movies/detail/{id}', [MovieController::class, 'movieDetail'])->name('movie.detail');

//invio mail//
Route::post('/contact-us', [publicController::class, 'contactUs'])->name('contactUs');