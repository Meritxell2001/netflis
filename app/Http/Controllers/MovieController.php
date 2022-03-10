<?php

namespace App\Http\Controllers;

use App\Http\Resources\MovieResource;
use App\Http\Resources\MovieCollection;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function newMovie(Request $request) {
        $movie = Movie::create($request->all());
        return new MovieResource($movie);
    }

    public function modifyMovie(Request $request, $id) {
        $movie = Movie::find($id);
        if ($movie) {
            $movie->update($request->all());
            return new MovieResource($movie);
        }
        return response()->json('Aquesta pelicula no existeix', 200);

    }

    public function deleteMovie(Request $request, $id) {
        $movie = Movie::find($id)->delete();
    }
}
