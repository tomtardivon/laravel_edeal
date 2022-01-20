<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon" href="assets/4815Favicon.ico" />
    
    <title>EDEAL</title>

 





   
    
    
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
      

    <!-- Fonts -->

    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --> 
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-tokenfield.css') }} ">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootsrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">  -->
    

</head>
<body>


 
<div class='container'>       <!-- Bar de navigation-->

</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
<div class="row justify-content-center md-0"> 
<img src="images/Logos dégradé 2-100.jpg" height="100" width="30" style="margin-left:10em;width:8em;" >      
</div>
                <div class="card-body"> 
                    @if (session('status') ) 
                        <div class="alert alert-success" role="alert"> 
                            {{ session('status') }} 
                        </div> 
                    @endif 
                </div>  
        </div>
    </div> 
   
  <div class="container">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item active">
          <a class="nav-link " aria-current="page" href="/apprenant_acceuilapprenant">Accueil</a>
        </li>
        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Navire générique
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="/apprenant_model3D">Navire de pêche</a></li>
            <li><a class="dropdown-item" href="">Navire de guerre</a></li>
            <li><a class="dropdown-item" href="">Navire de commerce</a></li>
            <li><a class="dropdown-item" href="#">Autres</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/apprenant_biblio">Bibliothèque</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/apprenant_projet">Projets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/apprenant_recherche">Recherche avancée</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="col-md-2"> <!--bar de profil -->
        <div class="nav-item dropdown">
        
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/apprenant_profilapprenant">
                                        {{ __('Profil') }}
                                    </a>   
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    

                                </div>
  <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Entrer ici" aria-label="Search">
      
        <button class="btn btn-primary" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>Rechercher</button>
  </form>
</nav>
<!-- Content-->
@yield('content')
 <!-- Footer-->
 </div>
 @extends('layouts.footer')
         <div class=" container"><p class=" text-center text-white"> Edeal : Electronical and Digital Environment for Apprenticeship and Learning </p></div>
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Edeal 2022</p></div>
       
</body>

 <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-3.1.1.js"></script>   
    <script src="https://code.jquery.com/ui/1.13.0-rc.1/jquery-ui.min.js"
          integrity="sha256-99EbVPLVptiwdCNWDh/DN9qe/8Lntijxrvsf3YGPO7k=" 
          crossorigin="anonymous"></script> 
    <script src="/js/bootstrap-tokenfield.js" defer></script>   
     
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    


</html>