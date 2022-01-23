@extends('apprenant.headerapprenant')


<link rel="stylesheet" href="{{ asset('css/pages/biblio.css') }}">

@section('content')


    {{-- <div class="container-fluid ">

        <div class=" h-100 row bg-secondary col-lg-2" style="float: left !important; ">

            <div class="justify-content-end  text-center">
                @foreach ($tags as $tag)
                    <a style="font-size:{{ 1 + round($tag->piece_count / $max_tags, 2) }}rem;"
                        href="{{ route('pieces_tag', ['slug' => $tag->slug]) }}" class="">
                        {{ $tag->name }}
                    </a>
                @endforeach

            </div>
            <div class="justify-content-end  text-center">
                <a href="{{ route('pieces_edit') }}" class="btn default"> nouvelle piece </a>
            </div>

        </div>

        <div class="row  col-lg-10 bg-success" , style="">

            @foreach ($pieces as $piece)
                <div class="col-lg-2">
                    <div class="card m-2" style=" ">
                        <!-- <img src= "{{ asset('storage/users/' . $piece->image_piece) }}">

                                            <img src="images/Logos dégradé 2-100.jpg"  width="110" style="d-inline-block align-top" > -->
                        <img src="{{ asset('storage/' . $piece->image_piece) }}">
                        <!--images/piéces/illustration/1642882732.jpg  -->
                        <div class="card-body">

                            <h2><a href="">{{ $piece->nom_piece }}</a> </h2>
                            <p>{{ $piece->description_piece }}</p>

                            @foreach ($piece->tags as $tag)


                                <a href="{{ route('pieces_tag', ['slug' => $tag->slug]) }}"
                                    class="">{{ $tag->name }} </a>

                            @endforeach



                            <form method="get" action="{{ route('pieces_delete', ['id' => $piece->id]) }}"
                                id="delete_form">
                                <a href="{{ route('pieces_edit', $piece) }}" class="btn default"> editer </a>
                                <button type="submit" form="delete_form" class="btn default"
                                    value="Submit">delete</button>
                            </form>
                        </div>


                    </div>



                </div>
            @endforeach
            <div class="text-center displayed" style>
                {{ $pieces->links('pagination::bootstrap-4') }}
            </div>

        </div>
    </div> --}}



    





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
                                        <!-- Item -->
                                        @foreach ($tags as $tag)
                                        <li class="list-inline-item mb-2">
                                            <a style="font-size:{{ 1 + round($tag->piece_count / $max_tags, 2) }}rem;"
                                            href="{{ route('pieces_tag', ['slug' => $tag->slug]) }}" class="nav-link d-flex py-75">
                                            <label class="btn btn-light btn-primary-soft-check" > {{ $tag->name }}</label>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div style="margin-bottom: 20px" class="d-grid p-2 p-lg-0 text-center">
                                <a href="{{ route('pieces_edit') }}" class="btn-card"> nouvelle piece </a>
                                </div>
                                

                                <!-- Category START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <!-- Title -->
                                    <h4 class="mb-3">Catégorie</h4>
                                    <!-- Category group -->
                                    <div class="col-12">
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault9">
                                                <label class="form-check-label" for="flexCheckDefault9">Tout</label>
                                            </div>
                                            <span class="small">(1256)</span>
                                        </div>
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
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault11">
                                                <label class="form-check-label" for="flexCheckDefault11">Designe</label>
                                            </div>
                                            <span class="small">(156)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault12">
                                                <label class="form-check-label" for="flexCheckDefault12">Accounting</label>
                                            </div>
                                            <span class="small">(65)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault17">
                                                <label class="form-check-label" for="flexCheckDefault17">Translation</label>
                                            </div>
                                            <span class="small">(245)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault13">
                                                <label class="form-check-label" for="flexCheckDefault13">Conception</label>
                                            </div>
                                            <span class="small">(184)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault14">
                                                <label class="form-check-label" for="flexCheckDefault14">Juridique</label>
                                            </div>
                                            <span class="small">(65)</span>
                                        </div>
                                        <!-- Checkbox -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault15">
                                                <label class="form-check-label" for="flexCheckDefault15">Photography</label>
                                            </div>
                                            <span class="small">(99)</span>
                                        </div>

                                        <!-- Collapse body -->
                                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                                            <div class="card card-body p-0">
                                                <!-- Checkbox -->
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault16">
                                                        <label class="form-check-label"
                                                            for="flexCheckDefault16">Basic</label>
                                                    </div>
                                                    <span class="small">(178)</span>
                                                </div>
                                                <!-- Checkbox -->
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault18">
                                                        <label class="form-check-label"
                                                            for="flexCheckDefault18">Marketing</label>
                                                    </div>
                                                    <span class="small">(104)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Collapse button -->
                                        <a class=" p-0 mb-0 mt-2 btn-more d-flex align-items-center"
                                            data-bs-toggle="collapse" href="#multiCollapseExample1" role="button"
                                            aria-expanded="false" aria-controls="multiCollapseExample1">
                                            See <span class="see-more ms-1">more</span><span
                                                class="see-less ms-1">less</span><i class="fas fa-angle-down ms-2"></i>
                                        </a>
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
                            <form class="border rounded p-2">
                                <div class="input-group input-borderless">
                                    <input class="form-control me-1" type="search" placeholder="Tapez ici">
                                    <button type="button" class="btn btn-primary mb-0 rounded z-index-1">
                                        Rechercher</button>
                                </div>
                            </form>
                            <br>
                            <!-- Content -->
                            <div class="row mb-4 align-items-center">
                                <!-- Card item START -->
                                @foreach ($pieces as $piece)
                                    <div class="col-sm-6 col-xl-4">
                                        <div class="card shadow h-100">
                                            <!-- Image -->
                                            <img src={{ asset('storage/' . $piece->image_piece) }}
                                                class="card-img-top" alt="course image">
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
{{--                                                 <div class="d-flex justify-content-between">
                                                    <span class="h6 fw-light mb-0"><i
                                                            class="far fa-clock text-danger me-2"></i>3h 56m</span>
                                                    <span class="h6 fw-light mb-0"><i
                                                            class="fas fa-table text-orange me-2"></i>15 lectures</span>
                                                </div> --}}

                                                <div class="row" style="margin-top: 20px">

                                                    <!-- panel-footer -->
                                                    <div class="col-6 text-left">
                                                        <a class=""
                                                            href="{{ route('pieces_edite', ['id' => $piece->id]) }}">
                                                            <button type="submit" form="delete_form"
                                                                class="btn btn-primary " style="background-color: #0b5ed7"
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
