function createSphereAnimation() {
    // Set up the scene
    var scene = new THREE.Scene();

    // Set up the camera
    var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 5;

    // Set up the renderer
    var renderer = new THREE.WebGLRenderer({ antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.getElementById("home").appendChild(renderer.domElement);

    // Create a sphere geometry
    var geometry = new THREE.SphereGeometry(1, 32, 32);

    // Create a material
    var material = new THREE.MeshBasicMaterial({ color: 0x00ff00 });

    // Create a mesh using the geometry and material
    var sphere = new THREE.Mesh(geometry, material);

    // Add the sphere to the scene
    scene.add(sphere);

    // Animation loop
    function animate() {
      requestAnimationFrame(animate);

      // Rotate the sphere
      sphere.rotation.x += 0.01;
      sphere.rotation.y += 0.01;

      // Render the scene with the camera
      renderer.render(scene, camera);
    }

    // Start the animation loop
    animate();
  }

  // Call the function to create the sphere animation
  createSphereAnimation();