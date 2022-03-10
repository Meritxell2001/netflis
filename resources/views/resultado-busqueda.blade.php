@extends('layouts.app')
@section('content')
@if(auth()->check())<!-- check auth -->
        <div class="text-white px-4 pt-5 my-5 text-center">
            <h1 class="display-4 fw-bold">Películas y Series</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4">Resultado de busqueda</p>
                  <div class="container d-flex justify-content-center" style="height:5rem">
                    @php
                        $i = 0;
                    @endphp     
                    @forelse ($movies as $movie)
                        <div class="float-end m-2 d-flex p-2">
                            <a href="/visualitzar-stream/{{$movie->id}}" style="text-decoration: none;" class="text-white">
                                <img class="mx-auto" src="/img/{{$movie->cover}}" height="200" width="300rem">
                                <p>{{ $movie->title }}</p>
                                <p>
                                    @if($movie->season != null)
                                    Temporada: {{$movie->season}}&nbsp;Capitulo: {{$movie->chapter}}
                                    @endif
                                </p>
                                <p class="text-wrap" style="width: 20rem;">{{$movie->sinopsis}}</p>
                            </a>
                        </div>
                        @php
                            $i++;
                        @endphp
                        @if (($i % 3) == 0)
                            </div><div class="container d-flex justify-content-center" style="height:5rem">
                        @endif
                      @empty 
                          <p>No movies and series</p>
                      @endforelse
                  </div>
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