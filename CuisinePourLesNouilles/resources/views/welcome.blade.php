<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cuisine Pour Les Nouilles</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Cuisine pour les Nouilles
                </div>

                <nav class="navbar navbar-expand-md navbar-light bg-light">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Recette
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Apéritif</a>
                            <a class="dropdown-item" href="#">Entrées</a>
                            <a class="dropdown-item" href="#">Plats</a>
                            <a class="dropdown-item" href="#">Desserts</a>
                            <a class="dropdown-item" href="#">Végétarien</a>
                            <a class="dropdown-item" href="#">Sans Gluten</a>
                        </div>
                    </li>
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item active">
                        <a class="nav-link" href="#">Recette Aléatoire <span class="sr-only">Accueil</span></a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Articles</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Boutique
                            </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Ustensiles</a>
                            <a class="dropdown-item" href="#">Moules</a>
                            <a class="dropdown-item" href="#">Livres</a>
                            <a class="dropdown-item" href="#">Consommables</a>
                        </div>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Table de Conversion</a>
                        </li>
                    </ul>
                </nav>
            </div>
    </body>
</html>



