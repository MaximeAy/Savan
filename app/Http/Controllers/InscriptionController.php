<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;

class InscriptionController extends Controller
{
    public function formulaire ()
    {
        return view('Pages/inscription');
    }

    public function traitement()
    {
        request() ->validate([

            'email' =>['required' , 'email'],
            'mdp' =>['required' , 'confirmed' , 'min:6'],
            'mdp_confirmation' =>['required'],
    
        ]);
    
        $admin = new admin;
        $admin-> email = request('email');
        $admin-> mdp = request('mdp');
        $admin-> mdp_confirmation =request('mdp_confirmation');
    
    
        $admin ->save();
    
        return 'Nous avons reçu votre email qui est ' . request('email') . 'Votre mot de passe est'. '' . request('mdp');
        
    }


}

