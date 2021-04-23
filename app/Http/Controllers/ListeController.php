<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\liste;
use App\livre;
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
        $livres = livre::all();
        return view('/Pages.liste',compact('livres'));
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

            'nom_livre' =>['required'],
            'nom_auteur' =>['required'],
            'prenom_auteur' =>['required'],
            'pays' =>['required'],
            'date_parution' =>['required'],
            'type' =>['required'],
    
        ]);
        $livres = new liste();
        $livres-> nom_livre = request('nom_livre');
        $livres-> nom_auteur = request('nom_auteur');
        $livres-> prenom_auteur = request('prenom_auteur');
        $livres-> pays = request('pays');
        $livres-> date_parution = request('date_parution');
        $livres-> type = request('type');
        $livres ->save();
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
       $livres = DB::table('livres')->get();
       return view('/Pages.liste',['livres'=>$livres]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/ajout', compact('$livres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = request() ->validate([

            'nom_livre' =>['required'],
            'nom_auteur' =>['required'],
            'prenom_auteur' =>['required'],
            'pays' =>['required'],
            'date_parution' =>['required'],
            'type' =>['required'],
    
        ]);
            $id->update($validated);
            return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        DB::delete('delete from livres where id =?',[$id]);
        return 'vue';
    }
}
