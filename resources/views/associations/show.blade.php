
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSOCIATION ETUDIANTS</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/component.css')}}">
</head>
<body>

@include('../source/component/header')

<div class="container-fluid">
<div class="clearfix my-5 mx-5 px-5" style="padding-top:10px;height:400px;">
  <img src="{{ asset('images/'.$association->photo)}}" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">

  <h3 class="" style="color:brown;">
    Nom de l'association : <span class="text-primary"> {{$association->nom}} </span>
   
</h3>

   <h5 class="mt-3" style="color:brown;">
    Date Création : <span class="text-primary"> {{$association->date}} </span>
   
</h5>
  <h4 class="mt-3" style="color:brown;">
   description : <span class="text-black">{{$association->description}}</span>
</h4>

<p>
   <button class="btn  btn-primary text-light"><i class="fas fa-hand-point-right fs-4 me-2"></i><a href="#" class="fs-4" style="text-decoration :none; color:white">Suivre</a></button>
</p>

 
</div>
</div>

@include('../source/component/footer')

 <script src="{{asset('js/app.js')}}"></script>
</body>
</html>