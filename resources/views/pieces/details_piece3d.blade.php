@extends('apprenant.headerapprenant2')
@section('content')
{{-- <h1>{{ $details_piece3d->modele3D }}</h1>
<h2>{{ $details_piece3d->nom_piece }}</h2> --}}
<section> 
   
    <script src="https://threejs.org/build/three.min.js"></script>
    <script src="https://unpkg.com/three@0.126.1/examples/jsm/controls/OrbitControls.js"></script>
    <!-- GLTFLoader.js source -->
    <script src="https://cdn.rawgit.com/mrdoob/three.js/master/examples/js/loaders/GLTFLoader.js"></script>

    <script type="module" >

      
        const renderer = new THREE.WebGLRenderer({
          antialias: true,
        });
        const camera = new THREE.PerspectiveCamera(23, window.innerWidth / window.innerHeight, 1, 1000);
        const scene = new THREE.Scene();
        let Mesh;
        let light;
    
        function init() {
    
          camera.position.set(0.09, 10.2, 20);
          document.body.appendChild(renderer.domElement);
          renderer.shadowMapEnabled = true;
    
          renderer.setSize(1900, window.innerHeight);
          renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
          document.body.appendChild(renderer.domElement);
    
        }
        function setLight() {
          light = new THREE.AmbientLight(0xffffff); // soft white light
          scene.add(light);
        }
        
    
        function loadGLTF() {
          let balloonLoader = new THREE.GLTFLoader();
          /* balloonLoader.load('../storage/images/piéces/modele3D/Electropompe.gltf', (gltf) => {  */
          balloonLoader.load('../storage/{{ $details_piece3d->modele3D }}', (gltf) => {
            
            Mesh = gltf.scene;
            Mesh.scale.set(0.2, 0.2, 0.2);
            scene.add(Mesh);
            Mesh.position.x = 0;
            Mesh.position.y = 10;
            Mesh.position.z = 15;
          });
        }
    
        function animate() {
          requestAnimationFrame(animate);
          if (Mesh && Mesh.rotation) {
            Mesh.rotation.y -= 0.005;
          }
          renderer.render(scene, camera);
        }
    
        init();
        setLight();
        loadGLTF();
        animate();
        </script>

</section>
@endsection
