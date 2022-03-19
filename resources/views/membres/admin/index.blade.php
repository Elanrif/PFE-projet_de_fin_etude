
@extends('../../admin/home')
@section('admin')


<div class="container-fluid">
   
  <div class="row g-5">
  <div class="col-md-12">
 <table class="table table-dark table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Etudiant_id</th>
      <th scope="col">association_id</th>
      <th scope="col">fonction</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($membres as $membre)
    <tr>
      <th scope="row" class="pt-3">{{$membre->id}}</th>
      <td class="pt-3">numero : {{$membre->user_id}} </td>
      <td class="pt-3">numero : {{$membre->association_id}}</td>
      <td class="">
        <ul class="nav">
      <span> <a class="btn btn-primary nav-link text-light me-3"  href="{{route('membre.edit',$membre->id)}}">Modifier</a> </span> 
        <form class="mb-3 ms-3" action="{{ route('membre.destroy',$membre->id) }}" method="POST">
                    
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

   {{$membres->links()}}
  <a class="btn btn-success" href="{{ route('membre.create') }}"> <i class="fa-solid fa-plus"></i> Ajouter </a>
  <h4 class="pt-3" style="color:var(--noir--); font-size:35px;font-family: 'Lobster', cursive;">Etudiants <i class="fa-solid fa-arrow-right-arrow-left mx-3 text-primary" ></i> Associations : <span class="text-primary" style="font-family: 'Lobster', cursive;"> {{$count}} Participations</span></h4>
  </div>
  <!--
    {{$associations->links()}}
  {{$associations->links()}}
-->

</table>
</div>


  </div>
</div>
@endsection