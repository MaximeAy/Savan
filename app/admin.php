<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class admin extends Model implements Authenticatable 
{

    use BasicAuthenticatable;


     /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->mdp;
    }
    protected $fillable = [
     'email', 'mdp','mdp_confirmation',
    ];
    

     
}



