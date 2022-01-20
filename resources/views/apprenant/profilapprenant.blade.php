@extends('apprenant.headerapprenant')
@section('content')

    <body>
        <!-- Responsive navbar-->
        
        <!-- Header - set the background image for the header in the line below-->
        <header class="py-5 bg-image-full"  style="background-image: url('https://www.meretmarine.com/objets/10945.jpg')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" src="https://secure.gravatar.com/avatar/95843d6f11c045e248f4fdf21653f8b3?s=125&d=mm&r=g" alt="..." />
                <h1 class="text-Black fs-3 fw-bolder">Pascal </h1>
                <p class="text-Black-50 mb-0">Etudiant 2ème Année</p>
            </div>
        </header>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Changer le mot de passe</h2>
                        <p class="lead">A propos de l'apprenant</p>
                        <p class="mb-0">saisisez votre Nouveau mot de passe.</p>
                        <form>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="Password">
                  <label for="floatingInput">Mot de passe actuel</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Nouveau mot de passe</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Confirmer mot de passe</label>
                </div>

                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                  <label class="form-check-label" for="rememberPasswordCheck">
                    Remember password
                  </label>
                </div>

                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Modifier</button>
                  <div class="text-center">
                    
                  </div>
                </div>

              </form>
                   
                    </div>
                </div>
            </div>
        </section>
        <!-- Image element - set the background image for the header in the line below-->
    <!--    <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')"> -->
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>
        </div>
        <!-- Content section
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Engaging Background Images</h2>
                        <p class="lead">The background images used in this template are sourced from Unsplash and are open source and free to use.</p>
                        <p class="mb-0">I can't tell you how many people say they were turned off from science because of a science teacher that completely sucked out all the inspiration and enthusiasm they had for the course.</p>
                    </div>
                </div>
            </div>
        </section>-->
        
    </body>
</html>
@endsection