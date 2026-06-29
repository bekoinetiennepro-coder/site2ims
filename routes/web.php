<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| SITE PUBLIC
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.accueil');
});

Route::get('/formation', [FormationController::class, 'showPublic'])
    ->name('formations');

Route::get('/formations/{slug}', [FormationController::class, 'details'])
    ->name('formations.details');

Route::get('/service', function () {
    return view('pages.service');
});

Route::get('/propos', function () {
    return view('pages.propos');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/inscriptions',
    [InscriptionController::class, 'store']
)->name('inscriptions.store');


/*
|--------------------------------------------------------------------------
| BACK OFFICE
|--------------------------------------------------------------------------
*/

Route::middleware([
    'auth',
    'admin'
])->prefix('admin')
  ->name('admin.')
  ->group(function () {

    Route::get('/admin/dashboard',
        [DashboardController::class, 'index']
    )->name('dashboard');

    Route::resource(
        'formations',
        FormationController::class
    );

    Route::resource(
        'inscriptions',
        InscriptionController::class
    );

    Route::patch(
        'inscriptions/{inscription}/valider',
        [InscriptionController::class,'valider']
    )->name('inscriptions.valider');

    Route::patch(
        'inscriptions/{inscription}/refuser',
        [InscriptionController::class,'refuser']
    )->name('inscriptions.refuser');

    Route::resource(
        'users',
        UserController::class
    );

});


/*
|--------------------------------------------------------------------------
| PROFIL BREEZE
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile',
        [ProfileController::class, 'edit']
    )->name('profile.edit');

    Route::patch('/profile',
        [ProfileController::class, 'update']
    )->name('profile.update');

    Route::delete('/profile',
        [ProfileController::class, 'destroy']
    )->name('profile.destroy');

});

require __DIR__.'/auth.php';