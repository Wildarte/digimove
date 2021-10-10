<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A simple example</title>
    <link rel="stylesheet" href="./css/style.css"/>
    <script type="text/javascript" src="./js/panolens.min.js"></script>
    <style>
    #panorama {
        width: 600px;
        height: 400px;
    }
    </style>
</head>
<body>

<div id="panorama"></div>
<script>
pannellum.viewer('panorama', {
    "type": "equirectangular",
    "panorama": "https://pannellum.org/images/alma.jpg",
    "autoLoad": true
});
</script>

</body>