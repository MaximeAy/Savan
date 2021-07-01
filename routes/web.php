<?php

use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\ListeController;
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


Route::get('/inscription', 'InscriptionController@formulaire');
Route::post('/inscription', 'InscriptionController@traitement');

Route:: get('/connexion' , 'ConnexionController@formulaire');
Route:: post('/connexion' , 'ConnexionController@traitement');

Route:: get('/accueil' , 'accueilController@accueil');
Route:: get('/deconnexion' , 'accueilController@deconnexion');

Route:: get('/ajout' , 'ajoutController@formulaire');
Route:: post('/ajout' , 'ajoutController@traitement');
Route::resource('/liste', 'ListeController'); 
Route::resource('/cour', 'courController'); 
Route::get('/cour', 'courController@show'); 
Route::get('/liste', 'ListeController@show'); 

// Route::get('/delete/{id}', 'SupprimerController@destroy')->name('supprimer');
// Route::get('/update/{id}', 'SupprimerController@edit')->name('modifier');
