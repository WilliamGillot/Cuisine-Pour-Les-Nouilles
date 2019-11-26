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