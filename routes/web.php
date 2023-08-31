<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MoviesController::class,'index'])->name('movie.index');
Route::get('/movies /{movie}', [MoviesController::class, 'show'])->name('movie.show');
