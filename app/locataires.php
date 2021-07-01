<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class locataires extends Model
{
    protected $fillable = [
        'nom','prenom', 'contact', 'coord_cour', 'coord_maison', 'role'
    ];

    
}
