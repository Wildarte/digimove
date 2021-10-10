<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a-scene>
        <a-sky src="./pan.jpeg" rotation="0 -130 0"></a-sky>
    </a-scene>

    <script>
        // Create the scene
        var scene = document.createElement('a-scene');

        // Create the sky
        var sky = document.createElement('a-sky');
        sky.src = './pan.jpeg';
        sky.setAttribute('rotation', { x: 0, y: -130, y: 0 });

        // Inject into page
        scene.appendChild(sky);
        document.body.appendChild(scene);
    </script>

</body>
</html>