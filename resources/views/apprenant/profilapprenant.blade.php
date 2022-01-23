@extends('apprenant.headerapprenant')
@section('content')

    <body>

        <div class="card">
            <div class="card-body">
                <section>
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-lg-9 col-xl-7">
                            <div class="card bg-dark">
                                <div class="rounded-top text-white d-flex flex-row"
                                    style="background-image: url('https://www.lesbateliersdelarade.com/assets/images/cdg-1014x676.png'); height:200px;">
                                    <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                                            alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                                            style="width: 150px; z-index: 1">
                                    </div>
                                    <div class="ms-3" style="margin-top: 90px;">
                                        <h5>{{ Auth::user()->name }} </h5>
                                        <p>Etudiant</p>

                                    </div>
                                    <div>

                                    </div>
                                </div>
                                <div class="container my-5 bg_color:#">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6 bg-white" style="width:800px">
                                            <label>Nom d'utilisateur</label>
                                            <form method="POST" action="{{ route('showprofil_update', '$id') }}">
                                                @if (session('success'))
                                                    <div class="container">
                                                        <div class="alert alert-success">
                                                            {{ session('success') }}
                                                        </div>
                                                    </div>
                                                @endif
                                                @csrf
                                                <div class="input-group mb-3">
                                                    <input type="text" name="name" class="form-control"
                                                        id="account-username" placeholder="Nom"
                                                        value="{{ Auth::user()->name }}" required
                                                        data-validation-required-message="This username field is required">
                                                    <button type="submit" class="btn btn-primary" type="button"
                                                        id="button-addon2" data-mdb-ripple-color="dark">
                                                        Modifier
                                                    </button>
                                                </div>
                                                <label>Adresse mail</label>
                                                <div class="input-group mb-3">
                                                    <input type="email" name="email" class="form-control"
                                                        id="account-e-mail" placeholder="Email"
                                                        value="{{ Auth::user()->email }}" required
                                                        data-validation-required-message="This email field is required">
                                                    <button type="submit" class="btn btn-primary" type="button"
                                                        id="button-addon2" data-mdb-ripple-color="dark">
                                                        Modifier
                                                    </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            </div>
                        </div>
                        <!-- Content section-->
<section>
                        <div class="container my-5">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <h2>Changer le mot de passe</h2>
                                    <p class="mb-0">saisisez votre Nouveau mot de passe.</p>
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput"
                                                placeholder="Password">
                                            <label for="floatingInput">Mot de passe actuel</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="floatingPassword"
                                                placeholder="Password">
                                            <label for="floatingPassword">Nouveau mot de passe</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="floatingPassword"
                                                placeholder="Password">
                                            <label for="floatingPassword">Confirmer mot de passe</label>
                                        </div>

                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="rememberPasswordCheck">
                                            <label class="form-check-label" for="rememberPasswordCheck">
                                                Remember password
                                            </label>
                                        </div>
                                        <div class="d-grid">
                                            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2"
                                                type="submit">Modifier</button>
                                            <div class="text-center">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
    </body>

    </html>
@endsection
