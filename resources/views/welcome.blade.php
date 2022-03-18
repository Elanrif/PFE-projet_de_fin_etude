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

<!--quelque exemples d'evenements -->


 <h3 class="my-2 ps-4 text-center my-2" style="color:var(--bleu_ciel--); font-size:80px;font-family: 'Lobster', cursive;"> Les Evènements associatifs  . </h3>
 <div class="row container-fluid row-cols-1 row-cols-md-5 g-4 pb-5 ">
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
<!-- pour manar un exemple 
<div class="container-fluid mb-3">
  <div class="row row-cols-1 row-cols-md-3 g-2">


    <div class="col">
      <div class="p-3 h-100 border bg-dark text-white"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem voluptatibus voluptas nihil! Magni ipsa iusto rerum, sunt in nemo veniam nostrum amet placeat ullam similique. Culpa corrupti quibusdam nam vel explicabo, id beatae? Tempore corrupti excepturi delectus esse consequatur id, suscipit nihil dicta placeat iusto a nemo natus debitis facere, distinctio qui? Itaque aut, maiores veniam consectetur, in et dolor, nam ea expedita sapiente asperiores quaerat quisquam laborum possimus. Repudiandae aliquid accusamus non, a amet asperiores voluptas ullam dolore distinctio molestias culpa quam minima ut sit ipsam. Quam, ipsum eum assumenda excepturi quaerat distinctio obcaecati debitis itaque ab error ea!</div>
    </div>
    <div class="col">
      <div class="p-3 h-100 border  bg-dark text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nesciunt ex deleniti laborum incidunt ipsa, quia voluptate enim similique hic illo, delectus reiciendis dolor amet officiis et quas. Ipsa quia voluptates ab optio adipisci aliquam recusandae aliquid. Dolorem blanditiis voluptate distinctio quia quasi eius doloribus, possimus nam sequi ex rerum aut officiis nesciunt officia accusamus nostrum animi autem delectus? Est nam commodi et eveniet nobis, omnis nostrum dolore excepturi quis sapiente mollitia explicabo unde quam architecto tenetur reiciendis aliquid. Sint et molestias fugit autem magnam? Accusamus dolores quaerat, eaque accusantium temporibus maxime, repellat inventore nisi voluptate, ipsa ab delectus enim!</div>
    </div>
    <div class="col ">
      <div class="p-3 h-100 border bg-dark text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse dignissimos culpa itaque alias omnis recusandae facilis et eaque minus soluta sunt molestiae corrupti ullam obcaecati eligendi fugiat numquam corporis ipsam, accusamus error nihil. Possimus tempora repudiandae, sit sapiente ex molestiae neque assumenda amet adipisci! Aut rerum alias officia. Consectetur eligendi nihil iure dicta incidunt molestias, voluptatem inventore dolorem perspiciatis ipsam nobis at doloribus. Odit voluptatum beatae minima voluptatibus laborum iste quaerat dolor qui cupiditate tempora id doloremque earum accusantium mollitia est, blanditiis facilis recusandae hic iusto optio totam fuga eius vitae impedit! Maiores qui debitis voluptatem voluptatum eos rerum?</div>
    </div>
    <div class="col ">
      <div class="p-3 h-100 border bg-dark text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quia recusandae doloribus ratione aliquid rem adipisci natus ullam et officia! Illo officiis est suscipit, voluptatem explicabo natus accusantium nihil obcaecati hic veniam quasi culpa blanditiis cupiditate et similique quia labore minima sapiente quos nesciunt expedita! Facere quidem ut, libero placeat magni ipsa harum veniam quas pariatur, ratione officiis aperiam vero obcaecati, architecto dolor ab explicabo neque. Dicta saepe dolorem eum adipisci aspernatur nisi, aliquam dolorum nulla non reprehenderit ipsum eos. Tenetur vel, eaque fugiat maiores doloremque officiis odio omnis eos porro repellat dolorem, dolor illum sint ipsam tempore, veritatis ut.</div>
    </div>
  </div>
</div>

-->

<!-- quelques associations -->
 @yield('associations')
<!-- -->
@yield('user')



@endsection