<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Association ; 
use Illuminate\Support\Facades\Storage;

class AdminAssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      
    public function index()
    {
        $associations = Association::latest()->paginate(15) ;
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
     * $request->file('photo') ou bien $request->photo ; dans le .blade.php on a name="photo"
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'nom'=>'required|string',
            'date'=>'required|date',
            'description'=>'required|string',
            'photo'=>'required',
            
        ]);

         // $path =  Storage::disk('public')->put('avatars', $request->photo); on aurait la même chose mais le nom du fichier serait regéneré et il allait nous embêter
         // ici dans request->photo->storeAs on va partir de la fin de Storage 
         /**
          * pour dire on recupere la photo ($request->photo) et on la methode storeage::disk remplacé par storeAS() 
          * 'avatars' le nom du dossier , $filename le nom que l'ont veut specifier et 'public' dans le DISK public

          */
        $filename = time() . '.' . $request->photo->extension() ;

        $path = $request->photo->storeAs(
            'avatars',
            $filename,
            'public',
        );
        
       $association = Association::create(
           [
               'nom'=>$request->nom,
               'date'=> $request->date , 
               'description' =>$request->description,
               'photo' => $path , 
           ]
       ) ; 
        

        return redirect()->route('association.index')->with('success','Une nouvelle association a été créer avec succès.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Association $association)
    {
        $associations = Association::all() ;
        return view('associations.admin.show' , compact(['association','associations']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Association $association)
    {
        $associations = Association::all() ;
        return view('associations.admin.edit', compact(['association','associations']));
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
            'nom'=>'required|string',
            'date'=>'required|date',
            'description'=>'required|string',
            'photo'=>'required',
        ]);

          $filename =time() . '.' . $request->photo->extension() ;

        $path =  $request->photo->storeAs(
            'avatars',
            $filename,
            'public',
        );

        $association->update([
               'nom'=>$request->nom,
               'date'=> $request->date , 
               'description' =>$request->description,
               'photo' => $path , 
        ]);
        

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

    }
    
  
 
}
