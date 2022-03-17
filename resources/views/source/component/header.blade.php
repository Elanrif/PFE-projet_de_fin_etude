

  <!--header-->
  <nav class="index2 navbar navbar-expand-lg navbar-light bg-light" style="height:100px;">
  <div class="container-fluid fs-4">
    <a class="navbar-brand ps-5" href="#">Logo Etudiants</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse bg-light Z-index-3 ps-3" id="navbarSupportedContent">
      <ul class="index navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item px-3">
          <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link active" href="#">Presentation</a>
        </li>

        <li class="nav-item px-3">
          <a class="nav-link active" href="#">Associations</a>
        </li>
         <li class="nav-item px-3">
          <a class="nav-link active " href="#">Avantage</a>
        </li>

        <li class="nav-item dropdown px-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Actualité
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">lien1</a></li>
            <li><a class="dropdown-item" href="#">lien2</a></li>
            <li><a class="dropdown-item" href="#">lien3</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">autre information</a></li>
          </ul>
        </li>
       
      </ul>
      <form class="d-flex me-5 pe-5">
        @guest
        <ul class="togle navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
         <button class="btn btn-outline-success me-3"> <a class="nav-link active" aria-current="page" href="{{route('register')}}"><i class="fas fa-user me-2"></i>s'inscrire</a></button>
        </li>
        
         <li class="nav-item">
          <button class="btn btn-outline-primary me-3"><a class="nav-link active" aria-current="page" href="{{route('login')}}"><i class="fas fa-user-check me-2"></i>se connecter</a></button>
        </li>
        </ul>
        @endif

        @auth
         <ul class="togle navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
         <button class="btn btn-outline-danger me-3"> <a class="nav-link active" aria-current="page" href="{{route('login')}}"><i class="fas fa-user me-2"></i>Se deconnecter</a></button>
        </li>
     
        </ul>
        @endif
        
      </form>
    </div>
  </div>
</nav>
     <!-- -->