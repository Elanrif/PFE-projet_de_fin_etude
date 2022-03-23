

@extends('../../admin/page')
@section('admin')

<!-- dans chaque page admin je vais exteindre la page home de l'admin -->
 <div class="float-start me-3">
    {{$associations->links()}}
  <a class="btn btn-success" href="{{ route('association.create') }}"> <i class="fa-solid fa-plus"></i> Créer une association</a>
  <h4 class="pt-3" style="color:var(--noir--); font-size:35px;font-family: 'Lobster', cursive;">Nombre des  Associations : <span class="text-primary" style="font-family: 'Lobster', cursive;"> + {{$count}} </span></h4>
  </div>
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p class="fw-bold">{{ $message }}</p>
        </div>
    @endif
    
    <div class="row container-fluid row-cols-1 row-cols-md-3 g-4 pb-5">


      @foreach($associations as $association)

  <div class="col">
    <div class="card h-100">
      <img src="{{asset('images/'.$association->photo)}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">association : <span class="text-primary">{{$association->nom}}</span></h5>
        <p class="card-text"> Crée le : <span class="text-primary">{{$association->date}}</span> </p>
        <!-- pour voir tout les membres -->
       <span class="fs-5" style="color:violet;"> <a href="{{route('membre.create')}}"> <i class="fa-solid fa-user-plus me-2"></i></a> </span> <span class="fs-5 fw-bold" style="color:saddlebrown;"> {{$association->users->count()}} Membres </span>
        
      </div>
        <form class="mb-3 ms-3" action="{{ route('association.destroy',$association->id) }}" method="POST">
                    <a class="btn btn-info h-100" href="{{ route('association.show',$association->id) }}"><i class="fa-solid fa-eye fs-5"></i></a>
                    <a class="btn btn-primary" href="{{ route('association.edit',$association->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>

                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
         </form>
    </div>
  </div>
  @endforeach
</div>
@endsection