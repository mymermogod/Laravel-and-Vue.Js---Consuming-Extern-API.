<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrendingMoviesController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\SearchController;


Route::get('/', [TrendingMoviesController::class,'index']);
Route::get('/search', [SearchController::class,'searchMovie']);
Route::get('/genres/{id}', [GenderController::class,'searchByGenres']);


