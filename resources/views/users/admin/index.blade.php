
@extends('../../admin/page')
@section('admin')


<div class="container-fluid">
   
  <div class="row g-5">
  <div class="col">
 <table class="table fs-5 fw-bold table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">email</th>
      <th scope="col">code apogée</th>
      <th scope="col">filière</th>
      <th scope="col">semestre</th>
      <th scope="col">Téléphone</th>
      <th scope="col">role</th>
      <th scope="col"></th>
      
      
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row" class="pt-3">{{$user->id}}</th>
      <td class="pt-3"> {{$user->nom}} </td>
      <td class="pt-3"> {{$user->prenom}}</td>
      <td class="pt-3"> {{$user->email}}</td>
      <td class="pt-3"> {{$user->code_apogée}}</td>
      <td class="pt-3"> {{$user->filiere}}</td>
      <td class="pt-3"> {{$user->semestre}}</td>
      <td class="pt-3"> {{$user->num_tel}}</td>
      <td class="pt-3"> {{$user->role}}</td>
      
      <td>
        <ul class="nav">
        <form class="d-flex mb-3 ms-3" action="#" method="POST">         
                    @csrf
                    @method('DELETE')
           <a class="btn mx-3 btn-primary nav-link text-light pe-3"  href="#">Modifier</a> 
          <button type="submit" class="btn btn-danger">Supprimer</button>
         </form>
        </ul>
      </td>
      
    </tr>
    @endforeach
    
    <!--
    @foreach($users as $user)
   @foreach($user->associations as $association)
   <tr>
     <th scope="row">{{$association->nom}}</th>
     <td>{{$association->pivot->user_id}} </td>
     <td>{{$association->pivot->association_id}} {{$association->nom}}</td>
    </tr>
    @endforeach
    @endforeach
  -->
  </tbody>
   <div class="float-start me-3">

   @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p class="fw-bold">{{ $message }}</p>
        </div>
    @endif

   {{$users->links()}}
  <a class="btn btn-success" href="{{route('register')}}"> <i class="fa-solid fa-plus"></i> Ajouter </a>
  <h4 class="pt-3" style="color:var(--noir--); font-size:35px;font-family: 'Lobster', cursive;">Listes des  Etudiants inscrits  <i class="fa-solid fa-user-pen text-primary"></i> :  <span> {{$count}} Etudiants</span></h4> 
  </div>
 

</table>
</div>


  </div>
</div>
@endsection