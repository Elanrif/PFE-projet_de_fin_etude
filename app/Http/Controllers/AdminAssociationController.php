<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Association ; 

class AdminAssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      
    public function index()
    {
        $associations = Association::latest()->paginate(3) ;
        
        $count = Association::count() ; 
        return view('associations.admin.index', compact(['associations','count']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('associations.admin.create');
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
            'nom'=>'required',
            'date'=>'required',
            'description'=>'required',
            'mini_description'=>'required',
            
        ]);

        Association::create($request->all()) ; 

        return redirect()->route('association.index')->with('success','L\'association a été créer avec succès.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Association $association)
    {
        return view('associations.admin.show' , compact('association'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Association $association)
    {
        return view('associations.admin.edit', compact('association'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Association $association)
    {
        $request->validate([
            'nom'=>'required',
            'date'=>'required',
            'description'=>'required',
            'mini_description'=>'required'
        ]);

        $association->update($request->all());

        return redirect()->route('association.index')->with('success' , 'L\'association a été modifier avec succès .') ; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Association $association)
    {
       $association->delete() ;

       return redirect()->route('association.index')->with('success','L\'association a été supprimé avec succès.');
;
    }
}
