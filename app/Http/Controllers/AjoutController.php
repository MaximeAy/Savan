<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\locataires;
use Illuminate\Support\Facades\DB;


class locatairesController extends Controller
{
    public function formulaire ()
    {
        return view('Pages/accueil');
    }

    public function traitement()
    {
        request() ->validate([

            'nom_auteur' =>['required'],
            'prenom_auteur' =>['required'],
            'pays' =>['required'],
            'date_parution' =>['required'],
            'type' =>['required'],
    
        ]);

        $locataires = new locataires();
        $locataires-> nom_livre = request('nom_livre');
        $locataires-> nom_auteur = request('nom_auteur');
        $locataires-> prenom_auteur = request('prenom_auteur');
        $locataires-> pays = request('pays');
        $locataires-> date_parution = request('date_parution');
        $locataires-> type = request('type');
       
    
    
        $locataires ->save();
    
        return view('Pages/success');
        
    }

    // public function liste ()
    // {
    //     $livres = livre::all();
    //     // dd($livres);
    //     return view('Pages/liste',compact('livres'));
    // }

    // public function show(){
       
    //     $livres = DB::table('livres')->get();
    //     return view('/liste',['livres'=>$livres]);
    // }

}  

