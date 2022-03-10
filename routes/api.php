<?php
namespace App\Models;
use App\Http\Controllers\ListaPeliculasController;
use App\Http\Controllers\MovieController;
use App\Http\Resources\MovieCollection;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Movie;
use App\Http\Resources\MovieResource;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Genero;
use App\Http\Resources\GeneroCollection;
use App\Http\Resources\GeneroResource;


//Usuaris
//List all user
Route::get('/users', function () {
    return new UserCollection(User::all());
});

//Llistar usuari per id
Route::get('/user/{id}', function($id) {
    return new UserResource(User::findOrFail($id));
});

//Crear user
Route::post('/user', [RegisteredUserController::class, 'storeUser']);

//Modificar dades d'un usuari
Route::put('/user', [RegisteredUserController::class, 'update']);

//Eliminar un usuari
Route::delete('/user', [RegisteredUserController::class, 'remove']);

//Peliculas
//List all movies
Route::get('/movies', function () {
    return new MovieCollection(Movie::all());
});

//Llistar una peli per id
Route::get('/movie/{id}', function($id) {
    return new MovieResource(Movie::findOrFail($id));
});

//Crear movie
Route::post('/movie', [MovieController::class, 'newMovie']);

//Modificar movie
Route::put('/movie/{id}', [MovieController::class, 'modifyMovie']);

//Eliminar movie
Route::delete('/movie/{id}', [MovieController::class, 'deleteMovie']);


//Genero
//Listar todos los generos
Route::get('/generos', function () {
    return new GeneroCollection(Genero::all());
});

//Listar genero por id
Route::get('/genero/{id}', function($id) {
    return new GeneroResource(Genero::findOrFail($id));
});

//Crear genero
Route::post('/genero', function(Request $request) {
    $genero = new Genero();
    $genero->create($request->all());
    return new GeneroResource($genero);
});

//Borrar genero
Route::delete('/genero/{id}', function($id) {
    $genero = Genero::find($id)->delete();
});