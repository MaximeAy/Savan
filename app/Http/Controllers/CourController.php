<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cour;
use Illuminate\Support\Facades\DB;


class CourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $cour = cour::all();
            return view('Pages/accueil',compact('cour'));
        
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

            'type_cour' =>['required'],
            'coord_cour' =>['required'],
            'coord_maison' =>['required'],
            'coord_bailleur' =>['required'],
            'coord_locataire' =>['required'],
    
        ]);
        $cour = new cour();
        $cour-> type_cour = request('type_cour');
        $cour-> coord_cour = request('coord_cour');
        $cour-> coord_maison = request('coord_maison');
        $cour-> coord_bailleur = request('coord_bailleur');
        $cour-> coord_locataire = request('coord_locataire');
        $cour ->save();
        return view('Pages/success');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $cour = DB::table('cours')->get();
        return view('/Pages.accueil',['cour'=>$cour]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from cour where id =?',[$id]);
        return back();
    }
}
