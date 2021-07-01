<?php

namespace App\Http\Controllers;

use App\liste;
use App\cour;
use App\locataires;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class accueilController extends Controller
{
    public function accueil()
    {  $locataires = liste::all();
       $cours = cour::all();
            return view('Pages/accueil',compact('locataires','cours'));  
    }

    
    


    public function deconnexion()
    {
        auth::logout();
        return view('Pages/connexion');
    }
}
