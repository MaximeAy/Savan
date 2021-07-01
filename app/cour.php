<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cour extends Model
{
    protected $fillable = [
        'type_cour','coord_cour', 'coord_maison', 'coord_bailleur', 'coord_locataire'
    ];
}
