<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
});


Auth::routes();


Route::group(['middleware' => ['auth', 'Admin']], function () {
    //Historique
    Route::resource('Historique', 'AuditController');
    //Utilisateur
    Route::resource('CommercialPro', 'CommercialProController');
    //Agence
    Route::resource('Agence', 'AgenceController');
    //Activé ou Déactivé utilisateur
    Route::get('/statusagent/update/{id}', 'CommercialProController@toggleStatus')->name('update.statusagent');
});

Route::group(['middleware' => ['auth', 'CommercialPro']], function () {
    //Historique
    Route::resource('Historique', 'AuditController');
    //Apporteur
    Route::resource('Apporteur', 'ApporteurController');
    Route::get('/statusapporteur/update/{id}', 'ApporteurController@toggleStatus')->name('update.statusapporteur');
    //Offre
    Route::resource('Offre', 'OffreController');
    //Consulter les opportunités 
    Route::resource('Opportunite', 'OpportuniteController@index');
});


Route::group(['middleware' => ['auth', 'ApporteurAffaire']], function () {
    //Opportunités
    Route::resource('Opportunite', 'OpportuniteController');
});
