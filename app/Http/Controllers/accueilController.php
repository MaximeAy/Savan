<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class accueilController extends Controller
{
    public function accueil()
    {
        return view('Pages/accueil');
    }


    public function deconnexion()
    {
        auth::logout();
        return view('Pages/connexion');
    }
}
