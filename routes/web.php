<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;


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

Route::post(
    '/inscriptions',
    [InscriptionController::class,'store']
)->name('inscriptions.store');

Route::patch(
    'inscriptions/{inscription}/valider',
    [InscriptionController::class,'valider']
)->name('admin.inscriptions.valider');

Route::patch(
    'inscriptions/{inscription}/refuser',
    [InscriptionController::class,'refuser']
)->name('admin.inscriptions.refuser');




Route::get(
    '/admin/dashboard',
    [DashboardController::class, 'index']
)->name('admin.dashboard');


Route::prefix('admin')
->name('admin.')
->group(function () {

    Route::resource('formations', FormationController::class);
});


Route::prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::resource(
            'inscriptions',
            InscriptionController::class
        )->except(['store']);

});

