<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [

    'nom',

    'entreprise',

    'telephone',

    'email',

    'service',

    'message',

    'statut'

    ];
}
