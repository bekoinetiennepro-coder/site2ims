<?php

use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('pages.accueil');
});

Route::get('/formation', [FormationController::class, 'showPublic'])
    ->name('formations');


Route::get('/formations/{slug}', [FormationController::class, 'details'])
    ->name('formations.details');    

Route::get('service/', function(){
    return view('pages.service');
});

Route::get('propos/', function(){
    return view('pages.propos');
});

Route::get('contact/', function(){
    return view('pages.contact');
});







Route::prefix('admin')
->name('admin.')
->group(function () {

    Route::resource('formations', FormationController::class);
});
