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
    

<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 g-3">
        <div class="col-12 col-md-2 bg-dark text-white" style="height:100vh;width:150px;">
        <ul>
    
            <li>Acceuil</li>
            <li>Associations</li>
            <li>Evenements</li>
            <li>Utilisateurs</li>
            <li>paramètre</li>
        </ul>
    </div>

    
    <div class="col-12 col-md-10">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa consequuntur repellat necessitatibus quod, nihil minima. Odio et numquam nostrum nam. Rem quidem atque illo amet minus blanditiis, placeat ex similique aut dolores corrupti officia excepturi a odio beatae impedit praesentium repudiandae animi molestiae error assumenda nihil voluptatem tempora? Sapiente voluptatem temporibus laborum commodi culpa voluptatum fugiat perspiciatis facere rerum odit incidunt exercitationem tempora sint autem cumque eos soluta fuga architecto, numquam, sequi, veritatis quo sunt aspernatur quaerat. Architecto quam cum eligendi fugiat itaque at ex dignissimos adipisci delectus vel neque vero omnis necessitatibus est, corporis autem quas non veritatis. Id.</div>
</div>
</div>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <!-- {{ config('app.name', 'Acceuil') }} -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        
                     <li class="nav-item">
                                    <a class="nav-link fw-bold fs-5" href="/">{{ __('Acceuil') }}</a>
                                </li>
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                                    <a class="nav-link fw-bold fs-5" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                                </li>
                                @endif
                                
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link fw-bold fs-5" href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
                                </li>
                                @endif
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nom  }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se déconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
        </nav>
        
        <main class="py-5">
          
            @yield('admin')
            
        </main>
    </div>
    
    <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>
