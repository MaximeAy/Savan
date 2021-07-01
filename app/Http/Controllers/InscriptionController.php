<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Illuminate\Support\Facades\Hash;

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
        $admin-> mdp = Hash::make(request('mdp'));
        $admin-> mdp_confirmation = Hash::make(request('mdp_confirmation'));
    
    
        $admin ->save();
    
        return view('Pages/successInscription');
    }


}

