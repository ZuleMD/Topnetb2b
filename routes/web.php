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



Auth::routes();


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

//Empecher le retour en arriere 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('prevent-back-history')->middleware('auth');



//Empecher le retour en arriere 
Route::group(['middleware' => 'prevent-back-history'], function () {


    Route::group(['middleware' => ['auth', 'Admin']], function () {

        //Utilisateur
        Route::resource('CommercialPro', 'CommercialProController');
        //Agence
        Route::resource('Agence', 'AgenceController');
        //Activé ou Déactivé utilisateur
        Route::get('/statusagent/update/{id}', 'CommercialProController@toggleStatus')->name('update.statusagent');
        //Historique
        Route::resource('Historique', 'AuditController');
    });



    Route::group(['middleware' => ['auth', 'CommercialPro']], function () {
        //Apporteur
        Route::resource('Apporteur', 'ApporteurController');
        //Activé ou Déactivé apporteur
        Route::get('/statusapporteur/update/{id}', 'ApporteurController@toggleStatus')->name('update.statusapporteur');
        //Offre
        Route::resource('Offre', 'OffreController');
        Route::get('/statusopportunite/update/{id}', 'OpportuniteController@toggleStatus')->name('update.statusopportunite');


        //Opportunité
        Route::resource('Opportunite', 'OpportuniteController')->only(['index']);
    });

    Route::group(['middleware' => ['auth', 'ApporteurAffaire']], function () {
        //Opportunité
        Route::resource('Opportunite', 'OpportuniteController')->except(['index']);
    });
});
