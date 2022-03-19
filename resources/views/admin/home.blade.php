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
    

<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 ">
   <div class="admin col-12 col-md-2 bg-black pt-3 text-white">
 
    <ul class="nav flex-column fs-5">
      <li class="nav-item">
        <a class="nav-link text-light" aria-current="page" href="/"><i class="fa-solid fa-house-chimney me-2"></i>Acceuil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="{{route('utilisateur.index')}}"><i class="fa-solid fa-person me-2"></i>Utilisateurs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="{{route('association.index')}}"><i class="fa-solid fa-layer-group me-2"></i>Associations</a>
      </li>
       <li class="nav-item">
        <a class="nav-link text-light" href="#"><i class="fa-solid fa-calendar-week me-2"></i>Evènements</a>
      </li>
       <li class="nav-item">
        <a class="nav-link text-light" href="#"><i class="fa-solid fa-user-group me-2 px-0"></i>Membre du <span class="ms-4" style="padding-left:5px;">Bureau</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link text-light" href="{{route('membre.index')}}"><i class="fa-solid fa-user-group me-2 px-0"></i>Membre des  <span class="ms-4" style="padding-left:5px;">associations</span></a>
      </li>
   
    </ul>
    </div>

    <div class="admin_2 col-12 col-md-10 pt-2" >
        
        @yield('admin')
    </div>
</div>
</div>


    <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>
