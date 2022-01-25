@extends('apprenant.headerapprenant')


<link rel="stylesheet" href="{{ asset('css/pages/biblio.css') }}">

@section('content')

    <section class="py-3">
        <div class="container">
            <div class="row">
                <!-- Main content START -->
                <div class="col-md-12 ">
                    <div class="row">
                        <!-- Right sidebar START -->
                        <div class="col-md-3">
                            <form>

                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-3">Tags</h4>
                                    <ul class="list-inline mb-0 g-3">

                                        <li class="list-inline-item mb-2">
                                            <a href="{{ route('showbiblio') }}"
                                                >
                                                <label class="btn btn-light btn-primary-soft-check">
                                                    Tout</label>
                                            </a>
                                        </li>
                                        <!-- Item -->
                                        @foreach ($tags as $tag)
                                            <li class="list-inline-item mb-2">
                                                <a style="font-size:{{ 1 + round($tag->piece_count / $max_tags, 2) }}rem;"
                                                    href="{{ route('pieces_tag', ['slug' => $tag->slug]) }}"
                                                    >
                                                    <label class="btn btn-light btn-primary-soft-check">
                                                        {{ $tag->name }}</label>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @if ( Auth::user()->statut  == 'formateur')
                                <div style="margin-bottom: 20px" class="d-grid p-2 p-lg-0 text-center">
                                    <a href="{{ route('pieces_edit') }}" class="btn-card"> nouvelle piece </a>
                                </div>
                                 @endif


                                <!-- Category START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-3">Catégorie</h4>
                                    <!-- Category group -->
                                    <div class="col-12">
                                        <!-- Checkbox -->
                                        @foreach ($tags as $tag)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <a
                                                    href="{{ route('pieces_tag', ['slug' => $tag->slug]) }}"
                                                    >
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault9">
                                                <label class="form-check-label" for="flexCheckDefault9"> {{ $tag->name }}</label>
                                                </a>
                                            </div>
                                            <span class="small">({{ $tag->piece_count}})</span>
                                        </div>
                                    @endforeach
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault10">
                                                <label class="form-check-label"
                                                    for="flexCheckDefault10">Developement</label>
                                            </div>
                                            <span class="small">(365)</span>
                                        </div>

                                    </div>
                                </div>
                                <!-- Category END -->

                                <!-- Price START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-3">Fréquence</h4>
                                    <ul class="list-inline mb-0">
                                        <!-- Rent -->
                                        <li class="list-inline-item">
                                            <input type="radio" class="btn-check" name="options" id="option1">
                                            <label class="btn btn-light btn-primary-soft-check" for="option1">Tout</label>
                                        </li>
                                        <!-- Sale -->
                                        <li class="list-inline-item">
                                            <input type="radio" class="btn-check" name="options" id="option2">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="option2">Populaire</label>
                                        </li>
                                        <!-- Buy -->
                                        <li class="list-inline-item">
                                            <input type="radio" class="btn-check" name="options" id="option3">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="option3">Spécial</label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Price END -->

                                <!-- Skill level START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-3">Niveau</h4>
                                    <ul class="list-inline mb-0">
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-12">
                                            <label class="btn btn-light btn-primary-soft-check" for="btn-check-12">Tout
                                                niveau</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-9">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="btn-check-9">Débutant</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-10">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="btn-check-10">Intermédiaire</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-11">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="btn-check-11">Avancé</label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Skill level END -->

                                <!-- Language START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-3">Langue</h4>
                                    <ul class="list-inline mb-0 g-3">
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-2">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="btn-check-2">Anglais</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-3">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="btn-check-3">Français</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-4">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="btn-check-4">Hindien</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-5">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="btn-check-5">Russe</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-6">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="btn-check-6">Espagnol</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-7">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="btn-check-7">Italien</label>
                                        </li>
                                        <!-- Item -->
                                        <li class="list-inline-item mb-2">
                                            <input type="checkbox" class="btn-check" id="btn-check-8">
                                            <label class="btn btn-light btn-primary-soft-check"
                                                for="btn-check-8">Chinois</label>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Language END -->
                            </form><!-- Form End -->
                            <!-- Button -->
                            <div class="d-grid p-2 p-lg-0 text-center">
                                <button class="btn btn-primary mb-0">Filtrer</button>
                            </div>

                        </div>


                        <!-- Search option END -->

                        <!-- Course Grid START -->

                        <!-- Search option START -->

                        <!-- Search bar -->
                        <div class="col-md-9">
                            <form action="{{ route('pieces.search') }}" class="border rounded p-2">
                                <div class="input-group input-borderless">
                                    <input name="q" class="form-control me-1" type="search" placeholder="Tapez ici">
                                    <button type="submit" class="btn btn-primary mb-0 rounded z-index-1">
                                        Rechercher</button>
                                </div>
                            </form>
                            <br>
                            <!-- Content -->
                            <div class="row mb-4 align-items-center">
                                <!-- Card item START -->
                                @foreach ($pieces as $piece)
                                    <div style="margin-bottom:30px" class="col-sm-6 col-xl-4">
                                        <div class="card shadow h-100">
                                            <!-- Image -->
                                            <a class=""
                                                href="{{ route('pieces_details', ['id' => $piece->id]) }}">
                                                <img src={{ asset('storage/' . $piece->image_piece) }}
                                                    class="card-img-top" alt="course image">
                                            </a>
                                            <!-- Card body -->
                                            <div class="card-body pb-0">
                                                <!-- Badge and favorite -->
                                                <div class="d-flex justify-content-between mb-2">
                                                    <a href="#"
                                                        class="badge bg-danger bg-opacity-10 text-danger">Avancé</a>
                                                    @foreach ($piece->tags as $tag)
                                                        <a href="{{ route('pieces_tag', ['slug' => $tag->slug]) }}"
                                                            class="badge bg-primary bg-opacity-2 ">{{ $tag->name }}</a>
                                                    @endforeach

                                                    <a href="#"
                                                        class="h6 fw-light mb-0 rounded badge bg-primary bg-opacity-20 text-white"><b>Ajouter</b></a>
                                                </div>
                                                <!-- Title -->
                                                <h5 class="card-title"><a href="#">{{ $piece->nom_piece }}</a></h5>
                                                <p class="mb-2 text-truncate-2">{{ $piece->description_piece }}</p>
                                                <!-- Rating star -->
                                            </div>

                                            <div class="tag-margin">

                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer pt-0 pb-3">
                                                {{-- <div class="d-flex justify-content-between">
                                                    <span class="h6 fw-light mb-0"><i
                                                            class="far fa-clock text-danger me-2"></i>3h 56m</span>
                                                    <span class="h6 fw-light mb-0"><i
                                                            class="fas fa-table text-orange me-2"></i>15 lectures</span>
                                                </div> --}}

                                              
                                            @if ( Auth::user()->statut  == 'formateur')
                                                <div class="row" style="margin-top: 20px">

                                                    <!-- panel-footer -->
                                                    <div class="col-6 text-left">
                                                        <a class=""
                                                            href="{{ route('pieces_edite', ['id' => $piece->id]) }}">
                                                            <button type="submit" form="delete_form"
                                                                class="btn btn-primary "
                                                                style="background-color: #0b5ed7"
                                                                value="Submit">Editer</button></a>
                                                    </div>
                                                    <div class="col-6 text-center">

                                                        <a method="get"
                                                            href="{{ route('pieces_delete', ['id' => $piece->id]) }}"
                                                            id="delete_form">
                                                            <button type="submit" form="delete_form"
                                                                class="btn btn-danger "
                                                                value="Submit">Supprimer</button></a>
                                                    </div>

                                                </div>
                                            @else
                                            @endif

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="text-center displayed" style>
                                    {{ $pieces->links('pagination::bootstrap-4') }}
                                </div>

                            </div>

                            <!-- Responsive offcanvas body END -->
                        </div>
                        <!-- Right sidebar END -->
                    </div><!-- Row END -->
                </div>
    </section>

@endsection
