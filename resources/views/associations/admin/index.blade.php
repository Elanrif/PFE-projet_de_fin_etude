

@extends('../../admin/home')
@section('admin')

<!-- dans chaque page admin je vais exteindre la page home de l'admin -->
 <div class="float-end me-3">
  <a class="btn btn-success" href="{{ route('association.create') }}"> <i class="fa-solid fa-plus"></i> Créer</a>
  </div>
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
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
      </div>
        <form class="mb-3 ms-3" action="{{ route('association.destroy',$association->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('association.show',$association->id) }}"><i class="fa-solid fa-eye fs-3"></i></a>
                    <a class="btn btn-primary" href="{{ route('association.edit',$association->id) }}">Editer</a>

                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Supprimer</button>
         </form>
    </div>
  </div>
  @endforeach
</div>
@endsection