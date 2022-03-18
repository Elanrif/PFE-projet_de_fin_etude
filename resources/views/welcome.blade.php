@extends('source.layout')
@section('content')
 
   
 <!--
  <div class="index1 carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('images/esma.jpg')}}" class="image bg-dark d-block w-100 ;height:50vh;" alt="...">
      <div class="carousel-caption d-none d-md-block" style="padding-bottom:100px;">
       
       <div class="rounded rounded-2 card_1 card text-center " style="background-color:black;">
    <div class="card-header">
    <span style="color:brown;font-size:25px;"><i class="fas fa-people-carry text-light"></i> c'est quoi une Association Etudiants ? </span> 
    <p>C’est une association qui est constituée d’étudiants. Le nombre peut varier selon les activités exercées par cette dernière. De plus, les étudiants proviennent de différents niveaux et de différentes filières. L’association peut exister à différentes échelles : école, université, ville, région, pays, continent et le monde. Il faut savoir qu’il existe plusieurs sortes d’associations pour les causes humanitaires, les enfants, l’éducation, le sport, la vie étudiante, le logement étudiant et bien d’autres.</p>
  </div>

  <div class="card-body">
    <h5 class="card-title " style="color:brown;font-size:25px;"><i class="fas fa-people-arrows text-light me-2"></i>Pourquoi integrer une association ? </h5>
    <p class="card-text">Faire partie d'une association étudiante vous donnera l'occasion de vivre une expérience enrichissante mais aussi d'ajouter une précieuse ligne à votre CV. On peut tout à fait considérer que certains postes associatifs sont aussi valorisants sur un CV qu’un stage.</p>
    <a href="#" class="btn btn-primary">En savoir Plus</a>
  </div>
  <div class="card-footer text-muted">
    .....
  </div>
</div>
      </div>
    </div>
    
    
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

-->

<!-- image avec linear gradient -->
<div class="linear container-fluid"> <!-- ici il y'a l'image en des etudiants voir liens CSS -->
  <div class="pt-2">
    <img src="{{asset('images/Université-Abdelmalek-Essaâdi.jpg')}}" > <!-- le logo de la FAC -->
  </div>

  <!-- pour le texte sur la photo --> 
  <div class="d-flex justify-content-center">
    <h2 class="text-center px-5 mx-5" style="padding-top:70px;color:var(--blanc--); font-size:80px;font-family: 'Lobster', cursive;">Les associations Etudiants de la Facultés Abdelmalek Essaâdi Tetouan</h2>
  </div>
  <!-- fin texte --> 
  
</div>
<!-- --> 
<!-- card en grande image en haut -->
<div class="card mb-3 container-fluid">
 
  <div class="card-body row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <h5 class="card-title fs-3 fw-bold" style="color:var(--noir--);"> C'est quoi une association ? </h5>
      <p class="card-text fs-5"> 
        Il s’agit d’une association <span class="text-primary"> loi 1901</span> . A l’instar des autres, elle ne cherche pas à réaliser des bénéfices. L’idée de <span class="text-primary"> créer un organisme associatif </span> vise à concrétiser un projet commun entre étudiants. Elle donne la possibilité à ces derniers de <span class="text-primary"> découvrir </span> de nouveaux aspects de <span class="text-primary"> la vie étudiante</span>.</p>
      </div>
      <div class="col">
       <h5 class="card-title fs-3 fw-bold" style="color:var(--noir--);"> A quoi servent les Associations Etudiants  ? </h5>
    <p class="card-text fs-5"> 
      Dans un premier temps, elles servent à réunir les étudiants autour d'une cause qui leur tient à cœur. En effet, vous allez rencontrer de nouvelles personnes qui ont des intérêts similaires aux vôtres. Dans cette ambiance, vous serez capable de construire un projet et de vous fixer des objectifs réalisables.</p>
    </div>
    <div class="col">
          <h5 class="card-title fs-3 fw-bold" style="color:var(--noir--);"> Pourquoi intégrer une association ? </h5>
    <p class="card-text fs-5"> 
      
      Faire partie d'une association étudiante vous donnera l'occasion de vivre une expérience enrichissante mais aussi d'ajouter une précieuse ligne à votre CV. On peut tout à fait considérer que certains postes associatifs sont aussi valorisants sur un CV qu’un stage.</p> 
    </div>
  </div>
</div>


  <!-- --> 
  <hr class="text-primary fw-bold " style="width:90%;">
  <!-- quelque example d'associations pour la page d'acceuil -->
  <h3 class="my-2 ps-4 text-center" style="color:var(--noir--); font-size:80px;font-family: 'Lobster', cursive;"> Les différentes types d'associations ? </h3>
  <div class="row container-fluid row-cols-1 row-cols-md-3 g-4 pb-5">
    <div class="col">
      <div class="card h-100">
      <img src="{{asset('images/assos-etudiant-4__1_.webp')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{asset('images/assos-etudiant-4__1_.webp')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{asset('images/assos-etudiant-4__1_.webp')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{asset('images/assurance_association_sportive.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{asset('images/assurance_association_sportive.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{asset('images/assurance_association_sportive.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>

<!-- -->



<!-- quelques associations -->
 @yield('associations')
<!-- -->
@yield('user')



@endsection