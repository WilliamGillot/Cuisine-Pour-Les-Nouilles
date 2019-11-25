<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cuisine Pour Les Nouilles</title>
        
        <link rel="stylesheet" href='styles.css' type="text/css"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
            </div>
        </div>
    
        <div id="menu">
            <ul>
                <li>
                <a href='#'>Recettes</a>
                <ul>
                    <li><a href="/aperitifs">Apéritif</a></li>
                    <li><a href="/entrees">Entrées</a></li>
                    <li><a href="/plats">Plats</a></li>
                    <li><a href="/desserts">Desserts</a></li>
                    <li><a href="/vegetarien">Végétarien</a></li>
                    <li><a href="/sansgluten">Sans Gluten</a></li>
                </ul>
                </li>
            </ul>
            <ul>
                <li>
                <a href='#'>Recette aléatoire</a>
                </li>
            </ul>
            <ul>
                <li>
                <a href='/articles'>Articles</a>
                </li>
            </ul>
            <ul>
                <li>
                <a href='/boutique'>Boutique</a>
                <ul>
                    <li><a href="/ustensiles">Ustensiles</a></li>
                    <li><a href="/moules">Moules</a></li>
                    <li><a href="/livres">Livres</a></li>
                    <li><a href="/consommables">Consommables</a></li>
                </ul>
                </li>
            </ul>
            <ul>
                <li>
                <a href='/tabledeconversion'>Table de conversion</a>
                </li>
            </ul>
        </div>
    </body>
</html>



