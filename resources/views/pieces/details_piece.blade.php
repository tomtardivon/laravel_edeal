@extends('apprenant.headerapprenant')
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
                                <!-- Category START -->
                                <div class="card card-body shadow p-4 mb-4">
                                    <img src="../../images/navire.png"  class="d-inline-block align-center" alt="">
                                </div>
                                <!-- Category END -->

                                <!-- Price START -->

                                <!-- Price END -->

                                <!-- Language END -->
                            </form><!-- Form End -->
                        </div>


                        <!-- Search option END -->

                        <!-- Course Grid START -->

                        <!-- Search option START -->

                        <!-- Search bar -->
                        <div class="col-md-9">
                            <h2>{{ $details_piece->nom_piece }}</h2>
                            </br>
                            <img style="height: 60px;width:60px;margin-bottom:20px; margin-right:20px;"
                                src="..\images\Plan-2D.png" class="card-img-top" alt="course image">
                                <a href="{{ route('pieces_details_3d', ['id' => $details_piece->id]) }}">
                            <img style="height: 60px;width:60px;margin-bottom:20px;" src="..\images\Plan-3d.png"
                                class="card-img-top" alt="course image"></a>
                            <!-- Content -->
                            <div class="row mb-4 align-items-center">
                                <!-- Card item START -->
                                <div class="col-sm-6 col-xl-12">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src={{ asset('storage/' . $details_piece->image_piece) }}>
                                        <!-- Card body -->
                                        <!-- Card footer -->
     {{--                                    <script src="https://threejs.org/build/three.min.js"></script>
                                        <script src="https://unpkg.com/three@0.126.1/examples/jsm/controls/OrbitControls.js"></script>
                                        <!-- GLTFLoader.js source -->
                                        <script src="https://cdn.rawgit.com/mrdoob/three.js/master/examples/js/loaders/GLTFLoader.js"></script>
                                        <div style="width: 300px;  height: 600px;">
                                            <script type="module" src="../js/main.js"></script>
                                        </div> --}}

                                    </div>
                                </div>
                                <!-- Card item END -->
  
                            </div>

                            <!-- Responsive offcanvas body END -->
                            <h3>Ressources complémentaires</h3>
                            <img src="../../images/ressources.PNG"  class="d-inline-block align-center" alt="">
                        </div>
                        

                        <!-- Right sidebar END -->
                    </div><!-- Row END -->
                </div>
    </section>

@endsection
