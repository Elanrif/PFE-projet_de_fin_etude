
@extends('../../admin/page')
@section('admin')
<!-- j'extends mon source layout--> 



<div class="row container px-5  g-4 pb-5">
    <h3 style="color:var(--noir--);padding-top:30px; font-size:35px;font-family: 'Lobster', cursive;">Les Membres du Bureau </h3>
    <table class="table fw-bold table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Tel</th>
      <th scope="col">Sexe</th>
      <th scope="col">Poste</th>
    </tr>
  </thead>
  <tbody>
    @foreach($association->bureaus as $bureau)
    <tr>
      <th scope="row">{{$bureau->id}}</th> <!-- $user->id peut être remplaçé par $loop->index -->
      <td>{{$bureau->nom}}</td>
      <td>{{$bureau->prenom}}</td>
      <td>{{$bureau->email}}</td>
      <td>{{$bureau->Tel}}</td>
      <td>{{$bureau->sexe}}</td>
      <td>{{$bureau->roles}}</td>
      
      <td><button type="submit" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i></button></td>
      <td> <a class="btn btn-success" href="{{ route('association.edit',$association->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
      <td><button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>


<div class="row container px-5  g-4 pb-5">
    <h3 style="color:var(--noir--);padding-top:30px; font-size:35px;font-family: 'Lobster', cursive;">Les Membres de l'associations </h3>
    <table class="table fw-bold table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Tel</th>
      <th scope="col">code etudiant</th>
      <th scope="col">filière</th>
    </tr>
  </thead>
  <tbody>
    @foreach($association->users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th> <!-- $user->id peut être remplaçé par $loop->index -->
      <td>{{$user->nom}}</td>
      <td>{{$user->prenom}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->num_tel}}</td>
      <td>{{$user->code_apogée}}</td>
      <td>{{$user->filiere}}</td>
      <td><button type="submit" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i></button></td>
      <td> <a class="btn btn-success" href="{{ route('association.edit',$association->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
      <td><button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>

@endsection