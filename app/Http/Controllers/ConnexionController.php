<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    public function formulaire()
{
    return view('Pages/connexion');
}

public function traitement (Request $request )
{
    request() ->validate([

        'email' =>['required' , 'email'],
        'mdp' =>['required' , 'min:6'],
      
       
        ]);
   
        $credentials = $request->only('email', 'mdp');

        // if (Auth::attempt($credentials)) {

        //     return redirect()->intended('/accueil');
        // }else{

        //     return back()->withErrors([
        //         'email' => 'Vos informations sont incorrectes',
        //     ]);
        // }
        
     if (Auth::attempt( $credentials)){
         return 'ok';
     }else{
         return view('Pages/accueil');
     }
       
    }
}






