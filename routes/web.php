<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RendezVousController;

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

use App\Models\Equipe;

Route::get('/propos', function () {

    $equipes = Equipe::where('actif', 1)
        ->orderBy('ordre')
        ->get();

    return view(
        'pages.propos',
        compact('equipes')
    );

});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/inscriptions',
    [InscriptionController::class, 'store']
)->name('inscriptions.store');


Route::get(
    '/rendez-vous',
    [RendezVousController::class,'create']
)->name('rendezvous.create');


Route::post(
    '/rendez-vous',
    [RendezVousController::class,'store']
)->name('rendezvous.store');

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

    Route::resource(
        'rendezvous',
        RendezVousController::class
    );

    Route::patch(
            'rendezvous/{rendezvous}/confirmer',
            [RendezVousController::class,'confirmer']
        )->name('rendezvous.confirmer');

    Route::patch(
            'rendezvous/{rendezvous}/annuler',
            [RendezVousController::class,'annuler']
        )->name('rendezvous.annuler');


    Route::resource(
        'equipes',
        EquipeController::class
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