<?php

namespace App\Http\Controllers;

use App\liste;
use App\cour;
use App\locataires;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class accueilController extends Controller
{
    public function accueil1()
    {  $locataires = liste::all();
        return view('Pages/accueil1',compact('locataires'));


        $cour = cour::all();
        return view('Pages/accueil1',compact('cours'));
                                
    }

    
    public function deconnexion()
    {
        auth::logout();
        return view('Pages/connexion');
    }
}
