<?php

use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('movies', [MovieController::class, 'index']);

// Opção de uma rota
Route::put('movies/{movie}/favorite', [MovieController::class, 'favorite']);

// Opção de duas rotas
// Route::put('movies/{movie}/favorite', [MovieController::class, 'addFavorite']);
// Route::put('movies/{movie}/unfavorite', [MovieController::class, 'removeFavorite']);
