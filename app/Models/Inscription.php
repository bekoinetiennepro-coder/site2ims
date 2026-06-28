<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
     protected $fillable = [
        'formation_id',
        'type',
        'nom',
        'prenoms',
        'fonction',
        'entreprise',
        'libelle',
        'nb_personnes',
        'telephone',
        'email',
        'message',
        'statut'
    ];

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }
}
