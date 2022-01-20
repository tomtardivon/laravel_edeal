<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon" href="assets/4815Favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>EDEAL</title>
    
      
        <!-- -->
        <link href="css/login.css" rel="stylesheet" />

</head>
<body>
<div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                    <div class="card">

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="text-center">
                        <h2>Service d'Authentification</h2>
</div>
                        <p class="lead fw-bold mb-2">*Bienvenue!</p>
                        <p class="mb-0"></p>
                        <p class="mb-0">  </p>
                        <form>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  <label for="floatingInput">Votre adresse mail</label>
                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required autocomplete="current-password">
                  <label for="floatingPassword"> mot de passe</label>
                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
               

                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="rememberPasswordCheck">
                    Remember password
                  </label>
                </div>

                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">se connecter</button>
                  <div class="text-center">
                  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                    
                  </div>
                </div>
               
              </form>
                   
                    </div>
                </div>
</div>
<div class="container my-5">
<div class="row justify-content-center">
                    <div class="col-lg-6">
<div class=" card">
<div class="card-body">
<form method="POST" action="{{ route('register') }}">

<div class="text-center">
<p class="lead">ou </p>
                <h2>Créer un compte</h2>
        
                            @if (Route::has('register'))
                                <li class="d-grid">
                                   <button class="btn btn-primary text-uppercase fw-bold mb-2 "><a href="{{ route('register') }}" style="color:white;"> {{ __('Register') }}</a></button>
                                </li>
                            @endif
                    
                  
                </div>
</form>
</div>
</div>
</div>
</div>
</div>
</form> 
     </div>
     <footer class="bs-5 bg-white">
         <div class=" container"><p class=" text-center text-dark"> E-DEAL : Electronical and Digital Environment for Apprenticeship and Learning </p></div>
         <div class="container"><p class="m-0 text-center text-dark">E-DEAL-83000 Toulon Email: contact@edeal.fr </p></div>
         <div class="container"><p class="m-0 text-center text-dark">Copyright &copy; Edeal 2022</p></div>
        </footer>
</body>
</html>

