<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/4815Favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>EDEAL</title>
    <STYLE>
        A {
            text-decoration: none;
        }

    </STYLE>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


    <div class='container'>
        <!-- Bar de navigation-->

    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        </div>
        </div>

        <div class="container">
            <div class="row justify-content-center md-0">
                <a class="navbar-brand" href="/apprenant_acceuilapprenant">
                    <img src="images/LogoEDEAL.png" width="90" height="90" class="d-inline-block align-top" alt="">

                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item active">
                        <a class="nav-link " aria-current="page" href="/apprenant_acceuilapprenant">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link" href="/apprenant_cours">Cours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/apprenant_recherche">Recherche avancée</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <div class="input-group search-box">
                        <input type="text" class="form-control" placeholder="Que cherchez-vous?"
                            aria-label="Search for...">

                    </div>
                </form>
            </div>

        </div>


        <div class="col-md-2">
            <!--bar de profil -->
            <div class="nav-item dropdown">

                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-check-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg> {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/apprenant_profilapprenant">
                        {{ __('Profil') }}
                    </a>
                    <a class="dropdown-item" href="#">
                        {{ __('Paramétres') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Se déconnecter') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>


                </div>
    </nav>
    <!-- Content-->
    @yield('content')
    <!-- Footer-->

    <footer style="" class="bs-5 bg-dark">
        <div class=" bg-primary">
            <div class=" container ">
                <div class="row">
                    <div class="col-sm">
                        <h5 style="color:#ffffff">E-DEAL</h5>
                        <a href="/apprenant_acceuilapprenant" class="footer-logo"
                            style="color:#ffffff; text-decoration: none;"> <img src="../../images/LogoEDEAL.png" width="100"
                                height="100" class="d-inline-block align-center" alt=""> </a>
                    </div>
                    <div class="col-sm">
                        <h5>
                            <font style="color:#ffffff">Navire générique</font>
                        </h5>
                        <ul class="list-unstyled links">
                            <li><a href="/apprenant_model3D">
                                    <font style="color:#ffffff; text-decoration: none;">Navire de pêche</font>
                                </a></li>
                            <li><a href="#">
                                    <font style="color:#ffffff; text-decoration: none;">Navire de guerre</font>
                                </a></li>
                            <li><a href="#">
                                    <font style="color:#ffffff; text-decoration: none;">Navire de commerce</font>
                                </a></li>
                            <li><a href="#">
                                    <font style="color:#ffffff; text-decoration: none;">Autres</font>
                                </a></li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <h5>
                            <font style="color:#ffffff; text-decoration: none;">Cours</font>
                        </h5>
                        <ul class="list-unstyled links">
                            <li><a href="/apprenant_cours">
                                    <font style="color:#ffffff; text-decoration: none;">Consulter</font>
                                </a></li>
                            <li><a href="/apprenant_recherche">
                                    <font style="color:#ffffff; text-decoration: none;">Recherche avancée</font>
                                </a></li>
                            <li><a href="/apprenant_biblio">
                                    <font style="color:#ffffff; text-decoration: none;">Bibliothéque</font>
                                </a></li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <h5>
                            <font style="color:#ffffff; text-decoration: none;">Mon Compte</font>
                        </h5>
                        <ul class="list-unstyled links">
                            <li><a href="/apprenant_profilapprenant">
                                    <font style="color:#ffffff; text-decoration: none;">Profil</font>
                                </a></li>
                            <li><a href="/apprenant_profilapprenant">
                                    <font style="color:#ffffff; text-decoration: none;">Paramétres</font>
                                </a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>
                            <font style="color:#ffffff; text-decoration: none;">Contact</font>
                        </h5>
                        <p class=" justify-text  text-white"> 13 allé de Marseille, 83000 Toulon </p>
                        <p class=" justify-text text-white"> edeal@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=" container">
            <p class=" m-0 text-center text-white"> Edeal : Electronical and Digital Environment for Apprenticeship and
                Learning </p>
        </div>
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Edeal 2022</p>
        </div>
    </footer>
</body>


</html>
