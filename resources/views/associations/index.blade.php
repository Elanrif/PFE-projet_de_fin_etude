

@extends('../source/layout')
@section('content')
<div class="row container-fluid row-cols-1 row-cols-md-3 g-4 pb-5">
  @foreach($associations as $association)
  <div class="col">
    <div class="card h-100">
      <img src="{{asset('images/'.$association->photo)}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nom des associations : {{$association->nom}}</h5>
        <p class="card-text">{{$association->mini_description}}.</p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection