<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::where('role','utilisateur')->latest()->paginate(15) ;
        $count = User::count() ;
        return view('users.admin.index',compact(['users','count'])) ; 
    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.admin.create') ; 
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
            'nom' => ['required', 'string','min:3','max:255'],
            'prenom'=>['required', 'string' ,'min:3', 'max:255'],
            'email' => ['required', 'string', 'email','min:13','max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'num_tel' => ['required','numeric','unique:users','digits:10'],
            'code_apogée'=>['required','numeric','unique:users','digits:8'],
            'filiere' =>['required','string'],
            
        ]);

        User::create($request->all()) ;        
        
        return redirect()->route('user.index')->with('success','Un nouveau utilisateur a été créer avec succès ') ; 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $users = User::all() ; 
        return view('users.admin.show',compact(['user','users'])) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
       
        return view('users.admin.edit',compact('user')) ; 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
          $request->validate([
            'nom' => ['required', 'string','min:3','max:255'],
            'prenom'=>['required', 'string' ,'min:3', 'max:255'],
            'email' => ['required', 'string', 'email','min:13','max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'num_tel' => ['required','numeric','unique:users','digits:10'],
            'code_apogée'=>['required','numeric','unique:users','digits:8'],
            'filiere' =>['required','string'],
            
        ]);

        $user->update($request->all()) ;

        return redirect()->route('user.index')->with('success','Un nouveau utilisateur a été créer avec succès ') ; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete() ; 
        return redirect()->route('user.index')->with('succes' , 'La personne a été supprimer avec succès ');

    }
}

