
@extends('../../admin/page')
@section('admin')


<div class="container-fluid">
   
  <div class="row g-5">
  <div class="col-md-12">
 <table class="table table-black table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">email</th>
      <th scope="col">Tel</th>
      <th scope="col">Mandat</th>
      <th scope="col">poste</th>
      <th scope="col">association</th>
      
      <th scope="col"></th>
      
      
    </tr>
  </thead>
  <tbody>

   </div>
    @foreach($bureaus as $bureau)
    <tr class="fw-bold">
      <th scope="row" class="pt-3">{{$bureau->id}}</th>
      <td class="pt-3"> {{$bureau->nom}} </td>
      <td class="pt-3"> {{$bureau->prenom}}</td>
      <td class="pt-3"> {{$bureau->email}}</td>
      <td class="pt-3"> {{$bureau->Tel}}</td>
      <td class="pt-3"> {{$bureau->date_mandat}}</td>
      <td class="pt-3"> {{$bureau->Poste}}</td>
      <td class="pt-3"> {{$bureau->association->nom}} <!-- parfois directement a travers la relation tu accède -->
      </td>

      
      <td class="">
        <ul class="nav">
      <span> <a class="btn btn-primary nav-link text-light pe-3"  href="#">Modifier</a> </span> 
        <form class="mb-3 ms-3" action="#" method="POST">
                    
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
         </form>
       
        </ul>
      </td>
      
    </tr>
    @endforeach

  </tbody>
   <div class="float-start me-3">

   @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p class="fw-bold">{{ $message }}</p>
        </div>
    @endif

  
  <a class="btn btn-success" href="#"> <i class="fa-solid fa-plus"></i> Ajouter </a>
  <h4 class="pt-3" style="color:var(--noir--); font-size:35px;font-family: 'Lobster', cursive;">Liste de tous les  membres des Bureau  <i class="fa-solid fa-user-pen text-primary"></i> :  <span> {{$count}} </span></h4> 
  </div>
 

</table>
</div>


  </div>
</div>
@endsection