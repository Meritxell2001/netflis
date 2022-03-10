<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaPeliculasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\VisualitzarStream;

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
Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/historial', function () {
    return view('historial');
});

//Route::get('/login',[SessionsController::class,'index'])->name('login.index');
//Route::post('/login',[SessionsController::class,'store'])->name('login.store');

//Route::post('/registro',[RegisterController::class,'store'])->name('register.store');
//Route::get('/registro',[RegisterController::class,'create'])->name('register.create');


Route::get('/resultado-busqueda',[ListaPeliculasController::class,'search']);
Route::get('/list/{type}',[ListaPeliculasController::class,'list']);

Route::get('/informacion-usuario', function () {
    return view('informacion-usuario');
});
Route::get('/datos-usuario', function () {
    return view('datos-usuario');
});
//Route::get('/ficcion',[ListaPeliculasController::class,'filterGender']);
//Route::get('/accion',[ListaPeliculasController::class,'filterGender']);
//Route::get('/comedia',[ListaPeliculasController::class,'filterGender']);
Route::get('/datos-usuario', function () {
    return 'datos-usuario';
});
Route::get('/lista-usuarios', function () {
    return 'lista-usuarios';
});
Route::get('/modificar-pelicula', function () {
    return 'modificar-pelicula';
});
/*Route::get('/visualitzar-stream', function () {
    return view('visualitzar-stream');
});*/
Route::get('/visualitzar-stream/{id}',[ListaPeliculasController::class,'play']);
Route::get('/favoritos', function () {
    return view('favoritos');
});
Route::post('/addFavorites', [ListaPeliculasController::class, 'addFavorites'])->name('addFavorites');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
