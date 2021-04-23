<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\livre;
use Illuminate\Support\Facades\DB;


class AjoutController extends Controller
{
    public function formulaire ()
    {
        return view('Pages/ajout');
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

        $livres = new livre();
        $livres-> nom_livre = request('nom_livre');
        $livres-> nom_auteur = request('nom_auteur');
        $livres-> prenom_auteur = request('prenom_auteur');
        $livres-> pays = request('pays');
        $livres-> date_parution = request('date_parution');
        $livres-> type = request('type');
       
    
    
        $livres ->save();
    
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

