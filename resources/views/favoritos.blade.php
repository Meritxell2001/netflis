@extends('layouts.app')
@section('content')
@if(auth()->check())<!-- check auth -->
    <div class="container">
        <div class="text-white px-4 pt-5 my-5 text-center">
            <div class="container justify-content-center" style="height:30rem">
                <h1 class="text-white text-center">Favoritos</h1>
                <div class="container d-flex justify-content-center" style="height: 5rem;"> <!--Treure per veure en format llista vertical-->
                    @php
                        $i = 0;
                    @endphp
                    @forelse (app('request')->session()->get('favoritos',[]) as $movie)
                        <div class="float-none m-2 d-flex p-2">
                            <a href="/visualitzar-stream/{{$movie->id}}" style="text-decoration: none;" class="text-white">
                            <img class="mx-auto rounded" src="/img/{{$movie->cover}}" height="200" width="300rem">
                            <p class="text-white text-wrap" style="width: 20rem;">{{$movie->title}}</p>
                            <p class="text-white text-wrap" style="width: 20rem;">{{$movie->sinopsis}}</p>
                        </div>
                        @php
                            $i++;
                        @endphp
                        @if (($i % 3) == 0)
                            </div><div class="container d-flex justify-content-center" style="height: 5rem;">
                        @endif
                    @empty
                        <p class="text-white text-center">No movies in favorites</p>
                    @endforelse
                    </a>
                </div> <!--Treure per veure en format llista vertical-->
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