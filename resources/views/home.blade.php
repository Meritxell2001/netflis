@extends('layouts.app')
@section('content')
<div class="text-white px-4 pt-5 my-5 text-center">
    <h1>Direct streaming</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">No dejes de ver las mejores películas y series en nuestra plataforma de streaming en directo,<br> con contenido para todas las edades valoradas por vosotros</p>
        <div id="myCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><!--<rect width="100%" height="100%" fill="#777"/>--></svg>
                    <div class="container">
                        <div class="carousel-caption">
                            <a href="/register">
                                <img src="img/register.jpg" class="w-50 rounded">
                            </a>
                            <h1 class="mt-4">Registrarse</h1>
                            <p>Registrate en Streaming</p>
                            <p><a class="btn btn-dark" href="/register">Sign up</a></p>
                        </div>
                    </div>
                </div>
                @if(auth()->check())<!-- check auth -->
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
                    <div class="container">
                        <div class="carousel-caption">
                            <a href="/list/series">
                                <img src="img/pelis.jpg" class="w-50 rounded">
                            </a>
                            <h1 class="mt-4">Ver peliculas y series</h1>
                            <p class="mt-4">La mejor plataforma de series y peliculas</p>
                            <p><a class="btn btn-dark" href="peliculas">Peliculas</a></p>
                        </div>
                    </div>
                </div>
                @else 
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
                    <div class="container">
                        <div class="carousel-caption">
                            <img src="img/pelis.jpg" class="w-50 rounded">
                            <h1 class="mt-4">Ver peliculas y series</h1>
                            <p>No estas loggeado</p>
                            <a href="/login"><p>Login In</p></a>
                        </div>
                    </div>
                </div>
                @endif  
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
        
                    <div class="container">
                        <div class="carousel-caption">
                            <a href="/login">
                                <img src="img/login.jpg" class="w-50 rounded">
                            </a>
                            <h1 class="mt-4">Iniciar sesión</h1>
                            <p>Inicia sesión</p>
                            <p><a class="btn btn-dark" href="login">LogIn</a></p>
                        </div>
                    </div>
                </div>
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
    </main>
    </div>
</div>
@endsection