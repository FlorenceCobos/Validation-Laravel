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

Route::get('/', 'View@home');
Route::get('/home', 'View@rooms');
Route::get('/add', 'View@add');

Route::get('/deleteorupdate', 'View@rooms');
Route::post('/insert', 'Change@insertOne');
Route::post('/delete', 'Change@deleteOne');

//J'abandonne la fonction update pcq dans ce cas la il faudrait mieux ajouter ou supprimer une série plutot que l'updater
Route::get('/update', 'View@updateOne');
Route::post('/update', 'Change@UpdateOne');

