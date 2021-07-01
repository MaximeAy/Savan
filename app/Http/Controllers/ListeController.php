<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\liste;
use App\locataires;
use Illuminate\Support\Facades\DB;

class ListeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locataires = liste::all();
        return view('/Pages.accueil',compact('locataires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {
        request() ->validate([

            'nom' =>['required'],
            'prenom' =>['required'],
            'contact' =>['required'],
            'coord_cour' =>['required'],
            'coord_maison' =>['required'],
    
        ]);
        $locataires = new liste();
        $locataires-> nom = request('nom');
        $locataires-> prenom = request('prenom');
        $locataires-> contact = request('contact');
        $locataires-> coord_cour = request('coord_cour');
        $locataires-> coord_maison = request('coord_maison');
        $locataires-> role = request('role');
        $locataires ->save();
        return view('Pages/success');
        
    } 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      
        $locataires = DB::table('liste')->get();
        return view('/Pages.accueil',['locataires'=>$locataires]);

    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $locataires = liste::find($id);
        $locataires -> delete();
        return back();
    }
}
