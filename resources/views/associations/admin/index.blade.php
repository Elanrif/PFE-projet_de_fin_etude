

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
      <th scope="col">Description</th>
      <th scope="col">Photo</th>   
      <th scope="col">date</th>
 
    </tr>
  </thead>
  <tbody>

   </div>
    @foreach($associations as $association)
    <tr class="fw-bold">
      <th scope="row" class="pt-3">{{$loop->index + 1}}</th>
      <td class="pt-3"> {{$association->nom}} </td>
      <td class="pt-3 w-25"> {{$association->description}}</td>
      <td class="pt-3"> {{$association->photo}}</td>
      <td class="pt-3"> {{$association->date}}</td>
      </td>

      
      <td class="">
        
<!-- Début offcanvas --> 

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title fw-bold fs-4 text-dark" id="offcanvasExampleLabel"> <i class="fa-solid fa-triangle-exclamation text-danger me-2 fs-4"></i>Attention</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body" style="padding-top:150px;line-height:30px;">
    <div>
    <i class="fa-solid fa-exclamation text-danger"></i> êtes-vous vraiment sûr de vouloir supprimer cette association :  {{ $association->nom }} ? 
    </div>
    <div class="dropdown mt-3">
      <form class="mb-3 ms-3" action="{{ route('association.destroy',$association->id) }}" method="POST">
                    
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-info fw-bold px-3">OK</button>
                     <button type="button" class="btn btn-outline-success  mx-3 px-3 text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><span class="text-dark fw-bold">Annuler</span> </button>
                  
         </form>
    </div>
  </div>
</div>
        <ul class="nav d-flex">
      <span> <a class="btn btn-primary nav-link text-light pe-3"  href="{{ route('association.edit',$association->id) }}">Modifier</a> </span> 
       <a class="btn btn-danger mx-3" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
          Supprimer
        </a>
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

  
  <a class="btn  btn-success" href="{{route('association.create') }}"> <i class="fa-solid fa-plus"></i> Ajouter </a>
  <h4 class="pt-3" style="color:var(--noir--); font-size:35px;font-family: 'Lobster', cursive;">Liste de tous les  Associations : nombres  {{$count}} </span></h4> 
  </div>
 

</table>
</div>


  </div>
</div>
@endsection