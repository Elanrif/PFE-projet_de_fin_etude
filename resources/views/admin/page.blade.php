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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<!-- La page de l'administrateur --> 
    
<!-- si je veux passer une variable au parents je dois la passer aux enfants qui n'ont pas cette variable comme ça les enfants vont prendre en compte la varialbe -->
<!-- exemple ici , je veux passer "$association->nom" alors tout ceux qui vont extends leur parent et qui n'ont pas cette variable je dois la définir -->

<!-- ici on a remarqué que sur les utilisateur et les membres de bureau ça ne marche pas car tout simplement ils n'ont pas cette variable dans leur controller -->

<!-- Maintenant les membres de bureau marche car tout simplement ils ont conscience de cette variable $associations . donc puisque leur parent a cette variable c'est comme si j'utilise $associations du controller enfant dans la page parent puisque la page parent va contenir son fils -->

<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 ">
    <div class="admin col-12 col-md-2 bg-black pt-3 text-white">
 
   

    <ul class="nav flex-column fs-6">
      <li class="nav-item" style="width:150px;">
        <a class="nav-link text-light btn-outline-primary {{request()->is('/') ? 'active':''}}" aria-current="page" href="/"><i class="fa-solid fa-house-chimney me-2"></i>Acceuil</a>
      </li>
      <li class="nav-item my-3" style="width:150px;">
        <a class="nav-link text-light btn-outline-primary {{request()->is('admin/utilisateur') ? 'active':''}}" href="{{route('utilisateur.index')}}"><i class="fa-solid fa-person me-2"></i>Utilisateurs</a>
      </li>
    
    </ul>
    <!-- ('admin/association*') me permet a partir de cette chaine ; sinon si seulement ('admin/association/*') il ne va prendre en compte ('admin/association') ce qui est un problème -->
    <div class="btn-group dropend my-3">
  <button class="btn border border-dark text-white my-3 dropdown-toggle btn-outline-primary {{request()->is('admin/association*')  ? 'active': ''}}" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-layer-group me-2"></i>Associations
  </button>
  <ul class="dropdown-menu fs-5 fs-5" aria-labelledby="dropdownMenuButton1">
   
    <li><a class="dropdown-item" href="{{url('/admin/association/1')}}">BDE</a></li> 
    <li><a class="dropdown-item" href="{{url('/admin/association/2')}}">Culturelle</a></li> 
    <li><a class="dropdown-item" href="{{url('/admin/association/3')}}">Sportive</a></li> 
  
   
    <li><a class="dropdown-item" href="{{route('association.index')}}">Tous les associations</a></li>
  </ul>
    </div>

     <div class="btn-group dropend my-3 ">
  <button class="btn btn-black border border-dark text-white dropdown-toggle btn-outline-primary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   <i class="fa-solid fa-calendar-week me-2"></i>Evenements
  </button>
  <ul class="dropdown-menu fs-5" aria-labelledby="dropdownMenuButton1">
   <li><a class="dropdown-item" href="#">Thêatre</a></li> 
    <li><a class="dropdown-item" href="#">Culturelle</a></li> 
    <li><a class="dropdown-item" href="#">Sportive</a></li> 
   
    <li><a class="dropdown-item" href="{{route('association.index')}}">Tous les Evenements</a></li>
  </ul>
    </div>

     <div class="btn-group dropend my-3">
  <button class="btn border border-dark text-white dropdown-toggle btn-outline-primary {{request()->is('admin/bureau*') ? 'active': ''}}" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   <i class="fa-solid fa-user-group me-2 px-0"></i>Membres du Bureau
  </button>
  <ul class="dropdown-menu fs-5" aria-labelledby="dropdownMenuButton1">
   <li><a class="dropdown-item" href="#">BDE</a></li> 
    <li><a class="dropdown-item" href="#">Culturelle</a></li> 
    <li><a class="dropdown-item" href="#">Sportive</a></li> 
     
    <li><a class="dropdown-item" href="{{route('bureau.index')}}">Les membres de tout les bureau </a></li>
  </ul>
    </div>

    </div>

    <div class="admin_2 col-6 col-md-10 pt-2" >
        
        @yield('admin')

    </div>
</div>
</div>


    <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>
