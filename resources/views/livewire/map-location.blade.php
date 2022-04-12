<div>
    <h1>Ini Map Area Universitas Tanjungpura</h1>
    <div id="map"></div>
    
</div>

@push('scripts')
    <style>
        #map {width: 400px; height: 400px;}
    </style>
    </head>
    <body>
    <div id="map"></div>
    <script>
        var map = new mapboxgl.Map({
        container: 'map',
        style: 'https://api.maptiler.com/maps/streets/style.json?key=2TLfadj0UbEZhhLwOHHj',
        center: [109.34657, -0.05807],
        zoom: 14.48
        });

        map.on('load', function() {
        map.addSource('geojson-overlay', {
            'type': 'geojson',
            'data': 'https://api.maptiler.com/data/65da89c1-79ad-4298-94b6-1a886a4c53aa/features.json?key=2TLfadj0UbEZhhLwOHHj'
        });
        map.addLayer({
            'id': 'geojson-overlay-fill',
            'type': 'fill',
            'source': 'geojson-overlay',
            'filter': ['==', '$type', 'Polygon'],
            'layout': {},
            'paint': {
            'fill-color': '#fff',
            'fill-opacity': 0.4
            }
        });
        map.addLayer({
            'id': 'geojson-overlay-line',
            'type': 'line',
            'source': 'geojson-overlay',
            'layout': {},
            'paint': {
            'line-color': 'rgb(68, 138, 255)',
            'line-width': 3
            }
        });
        map.addLayer({
            'id': 'geojson-overlay-point',
            'type': 'circle',
            'source': 'geojson-overlay',
            'filter': ['==', '$type', 'Point'],
            'layout': {},
            'paint': {
            'circle-color': 'rgb(68, 138, 255)',
            'circle-stroke-color': '#fff',
            'circle-stroke-width': 6,
            'circle-radius': 7
            }
        });
        });
    </script>
    </body>
    </html>

@endpush