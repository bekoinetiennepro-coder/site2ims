<?php
use App\Models\Equipe;
use App\Models\Reference;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;

/*
|--------------------------------------------------------------------------
| SITE PUBLIC
|--------------------------------------------------------------------------
*/

Route::get('/', [AccueilController::class, 'index'])
    ->name('accueil');

Route::get('/formation', [FormationController::class, 'showPublic'])
    ->name('formations');

Route::get('/formations/{slug}', [FormationController::class, 'details'])
    ->name('formations.details');

Route::get('/service', function () {
    return view('pages.service');
});



Route::get('/propos', function () {

    $equipes = Equipe::where('actif', 1)
        ->orderBy('ordre')
        ->get();

   
    $references = Reference::all();

    return view(
        'pages.propos',
        compact('equipes', 'references')
    );

});

// Route::get('/contact', function () {
//     return view('pages.contact');
// });

Route::get('/contact',[ContactController::class,'index'])
    ->name('contact');

Route::post('/contact',[ContactController::class,'store'])
    ->name('contact.store');



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

    Route::resource(
        'services',
        ServiceController::class
    );

    Route::resource(
        'references',
        ReferenceController::class
    );


    Route::resource(
            'contacts',
            AdminContactController::class
        )->only([
            'index',
            'show',
            'destroy'
        ]);

    // Route::resource('parametres',ParametreController::class)
    //     ->only(['edit','update']);

    Route::get('/parametres', [ParametreController::class,'index'])
        ->name('parametres.index');

    Route::get('/parametres/edit', [ParametreController::class,'edit'])
        ->name('parametres.edit');

    Route::put('/parametres', [ParametreController::class,'update'])
        ->name('parametres.update');

        

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