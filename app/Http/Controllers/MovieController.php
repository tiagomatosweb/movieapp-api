<?php

namespace App\Http\Controllers;

use App\Http\Resources\MovieResource;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::paginate(5);
        return MovieResource::collection($movies);
    }

    public function addFavorite()
    {
        // Adicionar no banco
    }

    public function removeFavorite()
    {
        // remover no banco
    }
}
