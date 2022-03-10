@extends('layouts.app')
@section('content')
<div class="text-white px-4 pt-5 my-5 text-center">
    <div class="bg-dark justify-content-center w-40 h-60">
        <h1 class="text-white mb-4">{{$movies->title}}</h1>
        <div class="container">
            <video width="100%" height="100%" controls>
                <source src="/movies/{{$movies->file}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>
@endsection