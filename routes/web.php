<?php

//use App\Http\Controllers\GenreController;
//use App\Http\Controllers\MovieController;
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
Route::get('posts', [PublicController::class, 'posts'])->name('posts');


