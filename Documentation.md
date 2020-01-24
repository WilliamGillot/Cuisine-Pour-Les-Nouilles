# Documentation

## I- Installation et création de projet

**Installation de composer**
```bash
https://getcomposer.org/download/
```

**Téléchargement de Laragon**
```bash
https://laragon.org/download/index.html
```

**Téléchargement de Php7**
```bash
https://windows.php.net/download/
```

**Installation de Laravel**
```bash
$composer global require laravel/installer
```

**Création d'un projet Laravel**
```bash
$composer create-project laravel/laravel Name
```

**Mise en route du serveur**
```bash
$php artisan serv
```


## II- Les dossiers et fichiers

**App**
```bash
Ce dossier est la racine de l appli avec le modèle 'User'.
```

**Config**
```bash
Ce dossier contient les configs des applications qui sont installées.
```

**Database**
```bash
Ce dossier contient les fichiers pour la base de données.
```

**Public**
```bash
Ce dossier est un point d entrée de l application pour rediriger les URL par exemples.
```

**Resources**
```bash
Ce dossier contient 'Larecipe' pour établir la documentation ainsi que les 'views' qui est le fichier gérant le contenu des pages de notre site.
```

**Routes**
```bash
Ce dossier contient les routes de l application comme 'web.php'.
```

**Storage**
```bash
Ce dossier contient les logs de l application et ses fichiers stockés.
```

**Vendor**
```bash
Ce dossier contient les packages qui ont été installés.
```

**.env**
```bash
Ce fichier est l endroit pour les variables d’environnement de notre projet.
```

**.env.example**
```bash
Ce fichier edit l’environnement où on développe, c’est une copie d’un '.env' vierge.
```

**.gitignore**
```bash
Ce fichier n a pas de /vendor, c est tout ce qui ne part pas en production.
```

**composer.json**
```bash
Ce fichier est un « sommaire » de notre projet, au moment de 'composer install' il va installer tous les requires.
```

**package.json**
```bash
Ce fichier est utilisé pour les librairie nod.
```

**webpack.mix**
```bash
Ce fichier est utilisé pour minifier les js et css/sass.
```


## III- Commandes

**$php artisan migrate**
```bash
$php artisan migrate >>> Execute les migrations restantes.
$php artisan migrate:refresh >>> Supprime la base de données et refais les migration.
$php artisan migrate:refresh --seed >>> Variante qui permet de lancer les seeders en plus.
$php artisan migrate:reset >>> Supprime la base de données.
```

**$php artisan make**
```bash
$php artisan make:controller Name >>> Création de controller dans le dossier 'app/Http/Controllers'.
$php artisan make:middleware Name >>> Création de middleware dans le dossier 'app/Http/Middleware'.
$php artisan make:migration Name >>> Création de fichier de migration dans le dossier 'database/migrations'.
$php artisan make:seeder Name >>> Création de seeder dans le dossier 'database/seeds'.
```

**Inclure des photos**
```bash
$php artisan storage:link
Ajouter la photo dans le dossier '/public/storage'
```


## IV- Développement de Laravel

**Créer une page**
```bash
Créer une page 'contact.blade.php' dans le dossier 'ressource/views'.
Ajouter sa route dans le dossier 'routes/web.php':
Route::get('/contact', function () {
    return view('Contact');
})->name("contact");
```

**Remplir une base de donnée**
```bash
Dans le dossier 'database/seeds/UsersTableSeeder.php':
factory(App\User::class, 100)->create();
//permet la création de 100 utilisateurs
```

**Ajouter un système d authentification**
```bash
$composer require laravel/ui --dev
$php artisan ui vue --auth
```

**Ajouter des rôles**
```bash
Créer une 'RolesTableSeeder.php' dans le dossier 'database/seeds' et créer un role:
Role::create(['name' => 'admin']);

Modifier la 'DatabaseSeeder/php' pour ajouter la table de rôle pour la migration dans le dossier 'database/seeds':
$this->call(
            RolesTableSeeder::class
        );
        
        $this->call(
            UsersTableSeeder::class
        );

Modifier la 'UsersTableSeeder.php' pour créer 10 utilisateurs avec le rôle admin dans le dossier 'database/seeds':
factory(App\User::class, 10)->create()->each (function ($user) {
            $user->assignRole('admin');
        });
```

**Utiliser les Middleware**
```bash
Pour les routes dans le dossier 'routes/web.php':
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth', 'role:admin');
```

**Barre de Recherche**
```bash
Dans tous les fichiers '.blade.php' du dossier 'views' :
'Html' :
<div id='recherche'>
     <input id="test" type="search" name="q" aria-label="Search through site content">                                                
     <button class="button1">Rechercher</button>
</div>

'Css barre de recherche' :
#test
            {
                height: 40px;
                width: 750px;
            }

            #recherche
            {
                position: relative;
                top: -620px;
                left: 370px;
            }

'Css bouton de la barre de recherche' :
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
```

**Menu déroulant**
```bash
Dans tous les fichiers '.blade.php' du dossier 'views' :
'Html' :
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

'Css' :
#test
            {
                height: 40px;
                width: 750px;
            }

            #recherche
            {
                position: relative;
                top: -620px;
                left: 370px;
            }
```

**Priorité d'affichage dans le css**
```bash
z-index: 1000;
```

**Footer**
```bash
Dans tous les fichiers '.blade.php' du dossier 'views' :
'Html' :
<footer>
        <div id="footer">
            <div class='contact'>
                <p>Nous contacter:<p>
                <a href="#"target="_blank">Instagram</a>
                <br>
                <a href="#"target="_blank">Facebook</a>
            </div>
                <a href="#"></a>
                <br>
                <a href="#"></a>

            <div>

            </div>
        </div>
    </footer>

'Css' :

#footer  
            {
                position: fixed;
                width: 100%;
                bottom: 0;
                background: #EEEEEE url(img/footer.png) repeat-x;
                color: #000;
            }
```

**Afficher une table de la bdd**
```bash
Controller pour la requête SQL :
<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LayoutController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get()->all();
        return view('home', ['users' => $users]);
    }
}
?>

Dans le fichier '/route/web.php' :
Route::get('/layout','LayoutController@index')->name('layout');
```

**Afficher un élément de la bdd sur les views**
```bash
@foreach ($users as $user)
            {{$user->name}}
@endforeach
```

**Téléchargement Adminlte3**
```bash
https://adminlte.io/
```

**Image cliquable**
```bash
<a href="{{ url('/') }}"><img src="{{asset('storage/logo.jpg')}}" class="logo"/></a>
```


## V- Procédure pour avoir Laravel en local

**Télécharger Laragon**
```bash
https://laragon.org/
```

**Activer Apache et MySQL de Laragon**
```bash
Appuyer sur Play après le lancement de Laragon.
```

**Lancer les migrations et seeder**
```bash
$php artisan migrate:refresh seed
```

**Ajout d'un administrateur dans la base bdd de Laragon**
```bash
Rentrer dans la table admins de la bdd et ajouter un nouvel administrateur avec nom, email et mot de passe hashé (par bcrypted par exemple).
```

**Ajout des images du sites**
```bash
$php artisan storage:link
Ajouter les images 'logo.jpg' et 'choco.jpg' dans le fichier 'public/storage'.
```

**Lancer le serveur en local**
```bash
$php artisan serv
http://127.0.0.1:8000
```

**Pour le login admin**
```bash
Ajouter directement dans l URL : http://127.0.0.1:8000/admin/login
```