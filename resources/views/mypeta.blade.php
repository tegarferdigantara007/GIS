<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Dasar Leaflet Js</title>

    <style>
        #peta { height: 680px; }
    </style>

    <!-- css leaflfet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>

   <!-- leafletjs -->
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>

   <!-- leaflet search -->
   <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css"/>
<script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.umd.js"></script>


   
</head>
<body>
    <div id="peta"></div>

    <script>

    // you want to get it of the window global
    const providerOSM = new GeoSearch.OpenStreetMapProvider();

    //leaflet map
    var leafletMap = L.map('peta', {
    fullscreenControl: true,

    // OR
    fullscreenControl: {pseudoFullscreen: false // if true, fullscreen to page width and height
    },
    minZoom: 2
    }).setView([0,0], 2);

    L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a&gt; contributors' }).addTo(leafletMap);


const search = new GeoSearch.GeoSearchControl({
     provider: providerOSM,
     style: 'icon',
     searchLabel: 'Klik Pencarian Lokasi',
    });
    leafletMap.addControl(search);


    //     var map = L.map('peta').setView([-0.02715507088436879, 109.33669706860317], 13);
   
    //     var tiles = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
    //  maxZoom: 18,
    //  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a&gt; contributors, ' +
    //      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>&#39;,
    //  id: 'mapbox/streets-v11',
    //  tileSize: 512,
    //  zoomOffset: -1
    // }).addTo(map);

    </script>
</body>
</html>