<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use Illuminate\Http\Request;

class ListaPeliculasController extends Controller
{
    private $movieModel;
    public function __construct()
    {
        $this->movieModel = new Movie();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request) {
        $tipo = $request->route()->type;
        $list = $this->movieModel->type($tipo);
        return view('lista-contenido-audiovisual')->with('movies', $list->get());
    }
    public function search(Request $search) {
        $search->flash();
        $movies = $this->movieModel->query();
        $movies->joinGenres();
        if ($search->filled('genero')) {
            $movies->genreIn($search->input('genero'));
        }
        if ($search->filled('film')) {
            $movies->title($search->input('film'));
        }
        $movies = $movies
            ->select('movies.id','title','sinopsis','cover');
        return view('resultado-busqueda')->with('movies', $movies->get());
    }
    public function play(Request $request) {
        
        $movies = $this->movieModel->Id($request->route()->id);
        return view('visualitzar-stream')->with('movies', $movies->first());
        
    }
    public function addFavorites(Request $request) {
        $favoritos = $request->session()->get('favoritos', []);
        $actual = (object) array('id'=>$request->input('id'),'cover'=>$request->input('cover'), 'title'=>$request->input('title'), 'sinopsis'=>$request->input('sinopsis'));
        array_push($favoritos, $actual);

        $request->session()->put('favoritos', $favoritos);

        return redirect(url()->previous());
    }
    public function store(Request $request) {
        $movie = Movie::create($request->all());
        //return response()->json($movie, 200);
        return new MovieResource($movie);
    }
}
