<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    // app/Models/Formation.php

   protected $fillable = [
        'titre',
        'categorie',
        'description',
        'programme',
        'image',
        'brochure',
        'prix',
        'duree',
        'phare',
        'slug'
    ];
}
