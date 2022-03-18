
@extends('../../admin/home')
@section('admin')
<!-- j'extends mon source layout--> 
<div class="row container-fluid row-cols-1 row-cols-md-2 g-4 pb-5">
  
  <div class="col pt-3">
    <h3 style="color:var(--noir--); font-size:35px;font-family: 'Lobster', cursive;">Les Membres de l'associations </h3>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach($association->users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->nom}}</td>
      <td>{{$user->prenom}}</td>
      <td>{{$user->email}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
    
  </div>
  <div class="col pt-3">
    <div class="card h-100">
      <img src="{{asset('images/'.$association->photo)}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">association : <span class="text-primary">{{$association->nom}}</span></h5>
        <p class="card-text"> Crée le : <span class="text-primary">{{$association->date}}</span> </p>
        <p class="card-text"> Objectif :  <span class="text-primary">{{$association->description}}</span> </p>
      </div>
      <a href="#" class="nav-link text-danger">Voir tout les évenement de notre associations ? </a>
    </div>
  </div>

 
</div>
@endsection