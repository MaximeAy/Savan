<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livre extends Model
{
    protected $fillable = [
        'nom_livre','nom_auteur', 'prenom_auteur', 'pays', 'date_parution' , 'type'
    ];

    
}
