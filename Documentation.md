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

**Priorité d'affichage dans le css**
```bash
z-index: 1000;
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

## V- Procédure pour avoir Laravel en local

**Télécharger Laragon**
```bash
https://laragon.org/
```

**Activer Apache et MySQL de Laragon**
```bash
Appuyer sur Play après le lancement de Laragon
```

**Lancer les migrations et seeder**
```bash
php artisan migrate:refresh seed
```

**Ajout d'un administrateur dans la base bdd de Laragon**
```bash
Rentrer dans la table admins de la bdd et ajouter un nouvel administrateur avec nom, email et mot de passe hashé (par bcrypted par exemple)
```

**Lancer le serveur en local**
```bash
php artisan serv
http://127.0.0.1:8000
```

**Pour le login admin**
```bash
Ajouter directement dans l URL : http://127.0.0.1:8000/admin/login
```