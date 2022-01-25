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
    <!-- -->
    <link href="css/login.css" rel="stylesheet" />
    <style>
        .vertical {
            border-left: 4px solid gray;
            height: 200px;
            display: inline-block;
        }

    </style>
</head>

<body>
    <div class="content">

        <div class="container my-5 bg-white" style="width: 1000px ">
            <div class="card">
                <div class="card-body">
                    <img src="images/cmq-economie-mer_logo.png" height="67" width="120"> <img src="images/images.png"
                        height="68" width="120"> <img src="images/logo_univ_toulon.jpg" height="47" width="120">
                    <div class="text-center">
                        <img src="images/edeal.png" 
                            style="margin-left:2em;width:8em;">
                        <h2>Service d'Authentification</h2>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-5">

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <p class="lead fw-bold mb-2">Bienvenue !</p>
                                <p class="mb-0"></p>
                                <p class="mb-0"> </p>
                                <form>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="floatingInput" placeholder="email" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <label for="floatingInput">Votre adresse mail</label>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            id="floatingPassword" placeholder="Password" name="password" required
                                            autocomplete="current-password">
                                        <label for="floatingPassword"> Mot de passe</label>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror


                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2"
                                            type="submit">se connecter</button>

                                    </div>
                        </div>
                        <div class="col-md-2 text-center"> <span class="vertical"></span>
                        </div>
                        <div class="col-md-5 contents">


                            <div class="justify-text">
                                <a style="text-decoration: none;" class="btn btn-link" href="{{ route('register') }}" style="color: #212529"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                        class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                    </svg>
                                    {{ __('Activer mon compte') }}
                                </a>
                                <div class="justify-text">
                                    @if (Route::has('password.request'))
                                        <a style="text-decoration: none;" class="btn btn-link" href="{{ route('password.request') }}"
                                            style="color: #212529"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                height="20" fill="currentColor" class="bi bi-arrow-right-circle-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                            </svg>
                                            {{ __('Perte de mon mot de passe') }}
                                        </a>
                                    @endif

                                </div>

                            </div>
                            <div class="justify-text">
                                <a style="text-decoration: none;" class="btn btn-link" href="{{ route('register') }}" style="color: #212529"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                        class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                    </svg>
                                    {{ __('Besoin d\'aide?') }}
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class=" bg-primary" style="height: 100px ">
                    <div class=" container ">
                        <p class=" justify-text text-white"> Pour des raisons de sécurité, veulliez vous déconnecter et
                            fermer votre navigateur lorsque vous avez fini d'accéder aux services authentifiés. </p>
                    </div>
                    <div class="container">
                        <p class="m-0 justify-text text-white">Vos identifiants sont strictement confidentiels et ne
                            doivent en aucun cas etre transmis à une tierce personne. </p>
                    </div>

                </div>
                <div>
                    <div style="height: 50px "></div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>
