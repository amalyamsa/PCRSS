<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/Caseregister', function () {
    return view('Caseregister');
});
Route::get('/caselists', function () {
    return view('caselists');
});
Route::get('/criminalregister', function () {
    return view('criminalregister');
});
Route::get('/informations', function () {
    return view('informations');
});
Route::get('/officerregister', function () {
    return view('officerregister');
});
Route::get('/victimregister', function () {
    return view('victimregister');
});
Route::get('/witnessregister', function () {
    return view('witnessregister');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contacts', function () {
    return view('contacts');
});

