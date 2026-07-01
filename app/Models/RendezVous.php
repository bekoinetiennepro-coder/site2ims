<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    protected $table = 'rendez_vous';
    protected $fillable = [

        'nom',
        'telephone',
        'email',
        'entreprise',
        'service',
        'date_rdv',
        'heure_rdv',
        'message',
        'statut'

    ];
}
