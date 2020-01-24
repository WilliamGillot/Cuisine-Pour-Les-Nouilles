<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

////////////////////////////// test ///////////////////////////////////////////////////////////////
Route::get('/layout','LayoutController@index')->name('layout');
Route::get('/aperitif', 'AperitifController@index')->name('aperitif');
Route::get('/articles', 'ArticlesController@index')->name('articles');
Route::get('/boutique', 'BoutiqueController@index')->name('boutique');
Route::get('/consommables', 'ConsommablesController@index')->name('consommable');
Route::get('/desserts', 'DessertController@index')->name('dessert');
Route::get('/entrees', 'EntreesController@index')->name('entrees');
Route::get('/livres', 'LivresController@index')->name('livres');
Route::get('/moules', 'MoulesController@index')->name('moules');
Route::get('/plats', 'PlatsController@index')->name('plats');
Route::get('/recette', 'RecetteController@index')->name('recette');
Route::get('/recettealeatoire', 'RecettealeatoireController@index')->name('recettealeatoire');
Route::get('/sansgluten', 'SansglutenController@index')->name('sansgluten');
Route::get('/tabledeconversion', 'TabledeconversionController@index')->name('tabledeconversion');
Route::get('/ustensiles', 'UstensilesController@index')->name('ustensiles');
Route::get('/vegetarien', 'VegetarienController@index')->name('vegetarien');
Route::get('/welcome', 'WelcomeController@index')->name('welcome');
///////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/recette', function () {
    return view('recette');
})->name("recette");

Route::get('/recettealeatoire', function () {
    return view('recettealeatoire');
})->name("recettealeatoire");

Route::get('/articles', function () {
    return view('articles');
})->name("articles");

Route::get('/boutique', function () {
    return view('boutique');
})->name("boutique");

Route::get('/tabledeconversion', function () {
    return view('tabledeconversion');
})->name("tabledeconversion");

Route::get('/aperitifs', function () {
    return view('aperitifs');
})->name("aperitifs");

Route::get('/entrees', function () {
    return view('entrees');
})->name("entrees");

Route::get('/plats', function () {
    return view('plats');
})->name("plats");

Route::get('/desserts', function () {
    return view('desserts');
})->name("desserts");

Route::get('/vegetarien', function () {
    return view('vegetarien');
})->name("vegetarien");

Route::get('/sansgluten', function () {
    return view('sansgluten');
})->name("sansgluten");

Route::get('/ustensiles', function () {
    return view('ustensiles');
})->name("ustensiles");

Route::get('/moules', function () {
    return view('moules');
})->name("moules");

Route::get('/livres', function () {
    return view('livres');
})->name("livres");

Route::get('/consommables', function () {
    return view('consommables');
})->name("consommables");


/* Route Admin */
Route::namespace('Admin')->group(function() {
    Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/admin/login', 'Auth\LoginController@Login');
    Route::get('/admin/home', 'AdminController@index')->name('admin.home');
});