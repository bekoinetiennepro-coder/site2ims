<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    protected $fillable=[

        'adresse',

        'telephone',

        'email',

        'email_support',

        'facebook',

        'linkedin',

        'whatsapp',

        'google_maps',

        'horaire'

        ];
}
