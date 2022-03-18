

@extends('../source/layout')
@section('content')

<div class="text">
  <h3 class="ms-3" style="color:var(--noir--); font-size:80px;font-family: 'Lobster', cursive;">Integrer une association ? </h3>
</div>
<div class="row container-fluid row-cols-1 row-cols-md-3 g-4 pb-5">
  @foreach($associations as $association)
  <div class="col">
    <div class="card h-100">
      <img src="{{asset('images/'.$association->photo)}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">association : <span class="text-primary">{{$association->nom}}</span></h5>
        <p class="card-text"> Crée le : <span class="text-primary">{{$association->date}}</span> </p>
      </div>
      <button class="btn btn-outline-primary border border-light w-25"><i class="fa-solid fa-eye fs-3"></i></button>
    </div>
  </div>
  @endforeach
</div>
@endsection