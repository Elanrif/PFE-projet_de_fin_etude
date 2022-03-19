<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Membre;
use Illuminate\Http\Request;
use App\Models\User;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(7) ;
        $associations = Association::latest()->paginate(7) ; 
        $membres = Membre::latest()->paginate(7)  ; 
        return view('membres.admin.index',compact(['membres','users','associations'])) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $associations = Association::all() ;
        $users = User::all();
        return view('membres.admin.create' , compact(['associations','users']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
            'user_id'=>'required',
            'association_id'=>'required',
            
            
        ]);

        Membre::create($request->all()) ; 

        return redirect()->route('membre.index')->with('success','L\'etudiant a été ajoutée avec succès.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function show(Membre $membre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function edit(Membre $membre)
    {
        $users =User::class ;
        $associations = Association::class ;
       return view('membres.admin.edit',compact(['membre','users','associations']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membre $membre)
    {
         $request->validate([
            'user_id'=>'required',
            'association_id'=>'required',
            
        ]);

        $membre->update($request->all());

        return redirect()->route('association.index')->with('success' , 'La modification  a été pris en compte avec succès .') ; 
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membre $membre)
    {
        $membre->delete() ; 
        return redirect()->route('membre.index')->with('success','La personne a bien été desabonnée de l\'association .');
    }
}
