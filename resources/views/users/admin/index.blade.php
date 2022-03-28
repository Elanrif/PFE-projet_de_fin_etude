
@extends('../../admin/page')
@section('admin')


<div class="container-fluid">
   
  <div class="row g-5">
  <div class="col-md-12">
 <table class="table fs-5 fw-bold table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">email</th>
      <th scope="col">code apogée</th>
      <th scope="col">filière</th>
      <th scope="col">Numero</th>
      <th scope="col">Post</th>
      
      
      
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row" class="pt-3">{{$loop->index + 1 }}</th>
      <td class="pt-3"> {{$user->nom}} </td>
      <td class="pt-3"> {{$user->prenom}}</td>
      <td class="pt-3"> {{$user->email}}</td>
      <td class="pt-3"> {{$user->code_apogée}}</td>
      <td class="pt-3"> {{$user->filiere}}</td>
      <td class="pt-3"> {{$user->num_tel}}</td>
      <td class="pt-3"> {{$user->role}}</td>
      
      <td>
        <ul class="nav"> 

           <a class="btn mx-3 btn-primary nav-link text-light pe-3"  href="{{ route('user.edit',$user->id) }}">Modifier</a> 
          
          <button class="btn btn-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">supprimer</button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasTopLabel"><i class="fa-solid fs-4 fa-triangle-exclamation text-danger fw-bold mt-2 me-2 fs-4"></i>Attention</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
 
      <div class="offcanvas-body" style="padding-top:150px;line-height:30px;">
    <div>
    <i class="fa-solid fa-exclamation text-danger"></i> êtes-vous vraiment sûr de vouloir supprimer   : <span class="text-primary fw-bold"> {{ $user->nom }} {{ $user->prenom }} </span>  ? 
    </div>
    <div class="dropdown mt-3">
      <form class="mb-3 ms-3" action="{{ route('user.destroy',$user->id) }}" method="POST">
                    
                     @csrf
                    @method('DELETE')
      
      
                    <button type="submit" class="btn btn-info fw-bold px-3">OK</button>
                     <button type="button" class="btn btn-outline-success  mx-3 px-3 text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><span class="text-dark fw-bold">Annuler</span> </button>
                  
         </form>
    </div>
  </div>
  
</div>
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

   {{$users->links()}}
  <a class="btn btn-success" href="{{route('user.create')}}"> <i class="fa-solid fa-plus"></i> Ajouter </a>
  <h4 class="pt-3" style="color:var(--noir--); font-size:35px;font-family: 'Lobster', cursive;">Listes des  Etudiants inscrits  <i class="fa-solid fa-user-pen text-primary"></i> :  <span> {{$count}} Etudiants</span></h4> 
  </div>
 

</table>
</div>


  </div>
</div>
@endsection