
<!-- juste sans extends tu écris ce que tu veux et tu peux faire l'include ou tu veux -->
<div class="row container-fluid row-cols-1 row-cols-md-3 g-4 pb-5">
  @foreach($associations as $association)
  <div class="col">
    <div class="card h-100">
      <img src="{{asset('images/'.$association->photo)}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title fw-bold">association : <span class="text-primary fw-bold">{{$association->nom}}</span></h5>
        <p class="card-text h5 fw-bold"> Date création : <span class="text-primary fw-bold"><i class="fa-solid fa-calendar-minus mx-1"></i> {{$association->date}}</span> </p>
      </div>
      <div class="h5 fw-bold ps-3" style="color:var(--bleu--);">  {{$association->users->count()}} Bénévoles <i class="fa-solid fa-user-group"></i></div>
     <div class="d-flex">
      <button class="btn btn-outline-primary border w-25"><i class="fa-solid fa-eye fs-3" style="color:var(--bisque--);"></i></button>
      <button class="btn btn-outline-success border border border-primary fs-4  w-50" style="margin-left:220px;"><i class="fa-solid fa-star pe-1"></i>suivre</button>
      </div>
    </div>
  </div>
  @endforeach
</div>
