<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = 
    [
        'title',
        'year', 
        'sinopsis',
        'duration',
        'type',
        'file',
        'size',
        'cover',
        'season',
        'chapter'
    ];

    public $timestamps = false;



    public function scopeJoinGenres($query){
        // only one genre
        //return $query->Leftjoin('genres', 'movies.genre', '=', 'genres.id');
        // multi genre
        return $query->join('movies_x_genres', 'movies.id', 'id_movie')
            ->join('genres', 'id_genre', 'genres.id');

    }
    public function scopeType($query,$input){
        return $query->where('type',$input);
    }
    // Only one genre
    public function scopeGenre($query,$input) {
        return $query->where('genres.genre','=',$input);
    }
    // Multi genre
    public function scopeGenreIn($query, $input) {
        return $query->whereIn('genres.genre',$input);
	}
    public function scopeTitle($query, $title) {
        return $query->where('title','like','%' . $title  .'%');
	}
    public function scopeId($query, $id) {
        return $query->where('id',$id);
	}
    public function scopeListFilms($query){
        return $query->where('type','movie');
    }
    public function scopeListChapters($query){
        return $query->where('type','serie');
    }

}