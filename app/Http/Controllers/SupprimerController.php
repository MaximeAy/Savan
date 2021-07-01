<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupprimerController extends Controller
{
    public function destroy($id)
    {  
        DB::delete('delete from listes where id =?',[$id]);
        return back();
    }

    public function edit($id)
    {
        $livres = DB::table('livres')->get();
        return view('/Pages.edit',['livres'=>$livres]);
    }


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
}
