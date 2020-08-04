<?php

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
    return view('accueill');
});
Route::get('/apprenant/new', 'ApprenantController@new')->name('nouveau');
Route::post('/apprenant/new', 'ApprenantController@store')->name('store');

Route::post('/apprenant/tuteur/new', 'TuteurController@store')->name('tuteur.store');
Route::get('/apprenant/form/liste','ApprenantController@list')->name('form.liste');

Route::get('/apprenant/supprimer/{id}','ApprenantController@destroy')->name('supprimer');
Route::get('/Apprenant/{apprenant}/details/{id}', 'ApprenantController@details')->name('details');
Route::get('/apprenant/modifier/{id}','ApprenantController@update')->name('modifier');
