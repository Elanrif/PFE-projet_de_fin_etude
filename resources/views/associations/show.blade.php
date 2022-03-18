

@extends('../source/layout')
@section('content')
<!-- j'extends mon source layout--> 
<div class="row container-fluid row-cols-1 row-cols-md-3 g-4 pb-5">
  
  <div class="col">
    <div class="card h-100">
      <img src="{{asset('images/'.$association->photo)}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">association : <span class="text-primary">{{$association->nom}}</span></h5>
        <p class="card-text"> Crée le : <span class="text-primary">{{$association->date}}</span> </p>
      </div>
    </div>
  </div>
 
</div>
@endsection