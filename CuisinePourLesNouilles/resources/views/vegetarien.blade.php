<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Cuisine Pour Les Nouilles</title>
            
            <link rel="stylesheet" href='styles.css' type="text/css"/>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
        <!-- Style -->

        <style>

            /* STYLE DE LA PAGE */
             
           
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                height:100%;
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
                position: absolute;
                right: 500px;
                top: 20px;
                
            }

            /* TAILLE DU TITRE */

            .title {
                font-size: 55px;
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

            /* MENU DEROULANT  */

            #menu 
            {
                position: relative;
                top: -575px;
                left: 350px;
            }

            #menu ul
            {
                margin:0;
                padding:0;
                line-height: 31px;
            }

            #menu li
            {
                list-style: none;
                float: left;
                position: relative;
                background-color: #FFF;
            }

            #menu ul li a
            {
                color: #000;
                text-decoration: none;
                width: 150px;
                height: 40px;
                display: block;
                text-align: center;
                border: transparent;
                /* text-shadow: 1px 1px 1px #ff0000; */

            }

            #menu ul ul 
            {
                position: absolute;
                top: 31px;
                visibility: hidden;
            }

            #menu ul li:hover ul
            {
                visibility: visible;
            }

            #menu li:hover
            {
                background-color: #999;
            }

            #menu ul li ul a:hover
            {
                color: #FFF;
                background-color: #999;
            }

            /* BARRE DE RECHERCHE */
            
            #test
            {
                height: 40px;
                width: 750px;
            }

            #recherche
            {
                position: relative;
                top: -585px;
                left: 370px;
            }

            /* BUTTON BARRE DE RECHERCHE */

            .button1
            {
                background-color: white;
                border: 2px solid #999;
                color: black;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 4px;   
            }

            .button1:hover
            {
                background-color: #999; 
                color: black;
            }

            /* FOOTER */
            
            #footer  
            {
                position: absolute;
                width: 100%;
                bottom: 0;
                background: #EEEEEE url(img/footer.png) repeat-x;
                color: #000;
            }

          


        </style>
    </head>
    <body>
    <div id="main">
        <header>

        <!-- LOGIN REGISTER -->
        
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

            <!-- TITRE -->

            <div class="content">
                <div class="title m-b-md">
                    Cuisine pour les Nouilles
                </div>
            </div>
        </div>

        <!-- BARRE DE RECHERCHE -->

        <div id='recherche'>
            <input id="test" type="search" name="q" aria-label="Search through site content">
            <button class="button1">Rechercher</button>
        </div>

        <!-- BARRE DE MENU -->

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
                <a href='#'>Boutique</a>
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
        </header>
    </body>
    <footer>
        <div id="footer">
            <p>Nous contacter:<p>
            
            <a href="#"target="_blank">Instagram</a>
                
        </div>
    </footer>
    </div>    
</html>



