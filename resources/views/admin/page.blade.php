
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Acceuil') }}</title>

    <!-- Scripts -->
    
    <!-- Fonts -->
    
 
    <link rel="stylesheet" href="{{asset('css/component.css')}}">
    <!-- Styles -->
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
<!-- La page de l'administrateur --> 
 <div class="container-fluid">
   <div class="row gy-5">      
     <div class="col-12 col-xxl-2 bg-dark" style="position:fixed;"> <!-- a partir de md vers > je veux 2colonnes et le reste 12 ç-â-d toute le colonne -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="admin-s container-fluid flex-column"> <!-- aussi j'ai ajouté a tout les parent flex-column pour la verticale -->
    
    <button class="navbar-toggler text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse flex-column bg-dark px-4 pb-4 z-index-5 navbar-collapse" id="navbarSupportedContent1"> <!-- j'ai mis un différente nom de id pour difféncier avec les id des autres navbar -->
      <!-- padding p pour le padding du navbar z-index-4 pour que quand je dimunue la largeur par défaut il se cache et on ne voit rien -->
      <ul class="navbar-nav flex-column me-auto fs-5 mb-lg-0 ">
        <li class="nav-item my-3">
          <a class="nav-link  btn-outline-primary text-light rounded-3 {{request()->is('/') ? 'active':''}}" aria-current="page" href="/"><i class="fa-solid fa-right-from-bracket me-2"></i>Acceuil</a>
        </li>
        <li class="nav-item my-3">
          <a class="nav-link text-light btn-outline-primary rounded-3 {{ request()->is('admin/utilisateur')? 'active':'' }} " href="{{route('utilisateur.index')}}"><i class="fa-solid fa-users me-2"></i>Utilisateurs</a>
        </li>
        <li class="nav-item dropdown my-3">
          <a class="nav-link text-light dropdown-toggle btn-outline-primary rounded-3 {{request()->is('admin/bureau*')  ? 'active': ''}}" type="but" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Membre du Bureau
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Bureau Des Etudiants (BDE)</a></li>
            <li><a class="dropdown-item" href="#">CULTURELLE</a></li>
            <li><a class="dropdown-item" href="#">SPORTIVE</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('bureau.index')}}">Tous les Membres des Bureau</a></li>
          </ul>
        </li>
         <li class="nav-item dropdown my-3">
          <a class="nav-link text-light dropdown-toggle btn-outline-primary rounded-3 {{request()->is('admin/association*')  ? 'active': ''}}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-layer-group me-2"></i>
            Les Associations
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Bureau Des Etudiants</a></li>
            <li><a class="dropdown-item" href="#">CULTURELLE</a></li>
            <li><a class="dropdown-item" href="#">SPORTIVE</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('association.index')}}">Toutes Les Associations</a></li>
          </ul>
        </li>
         <li class="nav-item dropdown my-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-calendar-check"></i>
           Les Evênements
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item my-3">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex row g-2"><!--j'ai ajouté row et les col pour si je diminue il se met chacun en ligne-->
        <input class="form-control col-12 me-2 my-3" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success col-12" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav></div> <!-- fin de 1er col --> 
     <div class="voix col pt-5"> <!--VOIR 'voix'CSS j'ai été obligé d'ajouter margin-left pour séparer cette bloc de celle de position:fixed -->
      <div class="voi-x">
          @yield('admin')
      </div>
     </div>
   </div>
 </div>
<br><br><br>
 <!-- exemple -->
 <script src="{{ asset('js/app.js') }}" ></script>
 <script>
$(document).ready(function(){
$('#myBtn').click(function(){
  $('.toast').toast({delay: 200000});
  $('.toast').toast('show');
});
});
</script>
</body>
</html>
