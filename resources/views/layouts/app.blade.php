<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <style type="text/css">
            @font-face {
                font-family: fontStreaming;
                src: url(/font/Courgette-Regular.ttf);
            }
        </style>
        <link rel="stylesheet" href="{{ asset('/css/headerNavFooter.css') }}">
        <link rel="shortcut icon" type="image/x-icon" href="/icono.png" />
        <title>Streaming</title>
    </head>
    <body class="bg-dark">
        <header class="fixed-top d-flex p-3 bg-dark text-white flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 p-4 border-bottom">
            <span class="fs-4 justify-content-lg-start"><img src="/logo.png" width="40rem">&nbsp;Streaming</span>
            <ul class="nav d-flex justify-content-end">
                @if(!auth()->check())<!-- check if not auth then you can acces home to register or login-->
                <li>
                    <a href="/" class="nav-link px-2 text-white">Home</a>
                </li>
                @endif
                @if(auth()->check())<!-- check auth -->
                <li>
                    <a href="/list/movie" class="nav-link px-2 text-white">Lista Películas</a>
                </li>
                <li>
                    <a href="/list/serie" class="nav-link px-2 text-white">Lista Series</a>
                </li>
                <li>
                    <a href="/favoritos" class="nav-link px-2 text-white">Favoritos</a>
                </li>
                <li>
                    <a class="text-white" href="/informacion-usuario">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" fill="currentColor" class="bi bi-person-circle mt-1" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    </a>
                    <i class="bi bi-person-circle"></i>
                </li>
                <li class="p-2">
                    @if(auth()->user())
                        <p><a class="text-white" href="/informacion-usuario">{{auth()->user()->name}}</a>&nbsp;<a href="/logout"><img src="/img/poweroff.png" width="20rem"></a></p>
                    @endif
                </li>
                @endif
            </ul>
        </header>
        @if(auth()->check())
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Categoría</a>
                    <ul class="dropdown-menu bg-secondary text-white p-1" aria-labelledby="dropdown03">
                        <form action="/resultado-busqueda"  method="get" enctype="multipart/form-data">
                        <li class="p-2">
                            <input class="form-check-input" type="checkbox" value="fiction" name="genero[]">
                            <label class="form-check-label" for="flexCheckChecked">Ficción</label>
                        </li>
                        <li class="p-2">
                            <input class="form-check-input" type="checkbox" value="action" name="genero[]">
                            <label class="form-check-label" for="flexCheckChecked">Acción</label>
                        </li>
                        <li class="p-2">
                            <input class="form-check-input" type="checkbox" value="comedy" name="genero[]"></a>
                            <label class="form-check-label" for="flexCheckChecked">Comedia</label>
                        </li><br>
                        <input class="m-3 bg-dark text-white p-2 rounded" type="text" placeholder="Write a film to search..." name="film">
                        <input class="w-100 bg-dark text-white rounded" type="submit" value="Filter">
                        </form>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        @endif
        <main class="container">
            @yield('content')
        </main>
        <footer class="mt-6 border-top d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-dark text-white">
            <ul class="nav col-md-4 justify-content-lg-start list-unstyled d-flex">
                <li class="ms-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
                    <i class="bi bi-twitter"></i>
                </li>
                <li class="ms-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                    <i class="bi bi-instagram"></i>
                </li>
                <li class="ms-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                    <i class="bi bi-facebook"></i>
                </li>
            </ul>

            <div class="col-md-4 d-flex justify-content-end">
                <span class="text-muted">&copy; Streaming Copyright 2021</span>
            </div>
        </footer>
    </body>
</html>
