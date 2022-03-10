@extends('layouts.app')
@section('content')
@if(auth()->check())<!-- check auth -->
        <div class="text-white px-4 pt-5 my-5 text-center">
            <div class="col-lg-8 mx-auto">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @php
                            $dataBs = 1;
                        @endphp
                        @foreach ($movies as $movie)
                            @if ($loop->first)
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                                @php
                                $i = "isntFirst"
                                @endphp
                            @else 
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{$dataBs}}"></button>
                                @php
                                    $dataBs++;   
                                @endphp
                            @endif
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @forelse ($movies as $movie)
                            @if ($loop->first)
                                @if ($movie->type == 'movie')   
                                    <h1 class="display-4 fw-bold">Películas</h1>
                                    <p class="lead mb-4">Top películas valoradas en IMD</p>
                                @else 
                                    <h1 class="display-4 fw-bold">Series</h1>
                                    <p class="lead mb-4">Top series valoradas en IMD</p>
                                @endif
                                <div class="carousel-item active">
                                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
                                    <div class="container">
                                        <div class="carousel-caption justify-content-center d-flex">
                                            <div class="bg-dark justify-content-center w-60 h-80">
                                                <a href="/visualitzar-stream/{{$movie->id}}" style="text-decoration: none;" class="text-white">
                                                    <img class="rounded" src="/img/{{$movie->cover}}" height="200" width="300rem">
                                                    <p class="mt-2">{{ $movie->title }}</p>
                                                    <p>{{ $movie->sinopsis}}</p>
                                                    @if ($movie->type == 'serie')
                                                        <p>Temporada:&nbsp;{{ $movie->season }}&nbsp;Capitulo:&nbsp;{{ $movie->chapter}}</p>
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else 
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
                                    <div class="container">
                                        <div class="carousel-caption justify-content-center">
                                            <div class="bg-dark justify-content-center w-40 h-60">
                                                <a href="/visualitzar-stream/{{$movie->id}}" style="text-decoration: none;"  class="text-white">
                                                    <img class="rounded" src="/img/{{$movie->cover}}" height="200" width="300rem">
                                                    <p class="mt-2">{{ $movie->title }}</p>
                                                    <p>{{ $movie->sinopsis}}</p>
                                                    @if ($movie->type == 'serie')
                                                        <p>Temporada:&nbsp;{{ $movie->season }}&nbsp;Capitulo:&nbsp;{{ $movie->chapter}}</p>
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @empty
                            <p>No movies</p>
                        @endforelse
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="text-white text-center">All movies</h1>
            <div class="container d-flex justify-content-center" style="height: 5rem;">
                @php
                    $i = 0;
                @endphp    
                @forelse ($movies as $movie)
                    <div class="float-start m-2 p-2">
                        <a href="/visualitzar-stream/{{$movie->id}}" style="text-decoration:none;" class="text-white">
                            <img class="mx-auto rounded" src="/img/{{$movie->cover}}" height="200" width="300rem">
                            <div class="d-flex">
                                <div class="col-6">
                                    <p class="mt-2">{{ $movie->title }}</p>
                                </div>
                                <div class="col-6">
                                    <form method="post" action={{ route('addFavorites') }} class="" style="height:2rem">
                                        @csrf
                                        <input type="hidden" name="title" value="{{$movie->title}}">
                                        <input type="hidden" name="sinopsis" value="{{$movie->sinopsis}}">
                                        <input type="hidden" name="cover" value="{{$movie->cover}}">
                                        <input type="hidden" name="id" value="{{$movie->id}}">
                                        <input type="submit" value="&hearts;" class="btn btn-dark text-white">
                                    </form>
                                </div>
                            </div>
                            <p class="text-wrap" style="width: 20rem;">{{$movie->sinopsis}}</p>
                            @if ($movie->type == 'serie')
                                <p>Temporada:&nbsp;{{ $movie->season }}&nbsp;Capitulo:&nbsp;{{ $movie->chapter}}</p>
                            @endif
                        </a>
                    </div>
                    @php
                        $i++;
                    @endphp
                    @if (($i % 3) == 0)
                        </div><div class="container d-flex justify-content-center" style="height: 5rem;">
                    @endif
                @empty 
                    <p>No movies</p>
                @endforelse
            </div>
        </div>
@else 
<div class="text-white px-4 pt-5 my-5 text-center">
    <div class="col-xl-6 mx-auto">
    <p>No estas loggeado</p>
    <a href="/login"><p>Login In</p></a>
    </div>
</div>
@endif  
@endsection