  <html>
<head>

 
  <meta charset="utf-8" />
  <title>Esri Leaflet Quickstart</title>
  <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />

  <!-- Load Leaflet from CDN -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
  crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
  integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
  crossorigin=""></script>


  <!-- Load Esri Leaflet from CDN -->
  <script src="https://unpkg.com/esri-leaflet@2.3.0/dist/esri-leaflet.js"
  integrity="sha512-1tScwpjXwwnm6tTva0l0/ZgM3rYNbdyMj5q6RSQMbNX6EUMhYDE3pMRGZaT41zHEvLoWEK7qFEJmZDOoDMU7/Q=="
  crossorigin=""></script>


  <style>
    body { margin:0; padding:0; }
    #map { position: absolute; top:0; bottom:0; right:0; left:0; }
  </style>
</head>


<div id="map"></div>

<script>
  var map = L.map('map').setView([37.75, -122.23], 10);

  L.esri.basemapLayer('Topographic').addTo(map);
</script>


   
   var layerGroup = L.geoJSON(data, {
  onEachFeature: function (feature, layer) {
    layer.bindPopup('<h1>'+feature.properties.f1+'</h1><p>name: '+feature.properties.f2+'</p>');
  }
}).addTo(map);
   
   </br>  </br>  </br>  </br>  </br>
 
    </style></body>
</html>

