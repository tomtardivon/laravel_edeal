const renderer = new THREE.WebGLRenderer({
    antialias: true,
});
const camera = new THREE.PerspectiveCamera(23, window.innerWidth / window.innerHeight, 1, 1000);
const scene = new THREE.Scene();
let Mesh;
let light;

function init() {

    camera.position.set(0.09, 10.2, 20);
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.body.appendChild(renderer.domElement);
    renderer.shadowMapEnabled = true;

    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    document.body.appendChild(renderer.domElement);

}
function setLight() {
    light = new THREE.AmbientLight(0xffffff); // soft white light
    scene.add(light);
}


function loadGLTF() {
    let balloonLoader = new THREE.GLTFLoader();

    balloonLoader.load('../storage/images/piéces/modele3D/Electropompe.gltf', (gltf) => {
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