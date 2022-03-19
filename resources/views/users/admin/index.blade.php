
@extends('../../admin/home')
@section('admin')


<div class="container-fluid">
   
  <div class="row g-5">
  <div class="col-md-12">
 <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Etudiant_id</th>
      <th scope="col">association_id</th>
      <th scope="col">email</th>
      <th scope="col">code apogée</th>
      <th scope="col">filière</th>
      <th scope="col">semestre</th>
      
      
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row" class="pt-3">{{$user->id}}</th>
      <td class="pt-3"> {{$user->nom}} </td>
      <td class="pt-3"> {{$user->prenom}}</td>
      <td class="pt-3"> {{$user->email}}</td>
      <td class="pt-3"> {{$user->num_tel}}</td>
      <td class="pt-3"> {{$user->code_apogée}}</td>
      <td class="pt-3"> {{$user->filière}}</td>
      <td class="pt-3"> {{$user->semestre}}</td>
      
      <td class="">
        <ul class="nav">
      <span> <a class="btn btn-primary nav-link text-light me-3"  href="#">Modifier</a> </span> 
        <form class="mb-3 ms-3" action="#" method="POST">
                    
                    @csrf
                    @method('DELETE')
      
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
  <a class="btn btn-success" href="#"> <i class="fa-solid fa-plus"></i> Ajouter </a>
  <h4 class="pt-3" style="color:var(--noir--); font-size:35px;font-family: 'Lobster', cursive;">Les Etudiants</h4>
  </div>
 

</table>
</div>


  </div>
</div>
@endsection