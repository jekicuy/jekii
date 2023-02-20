<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Pekanbaru</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
      <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>
     <script>
  
   
   
      
    </script>
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js"
charset="utf-8"></script>
<style>
    html, body {
        height: 100%;
        margin: 0;
    }
    .leaflet-container {
        height: 1300px;
        width: 1600px;
        max-width: 100%;
        max-height: 100%;
    }
</style>
</head>
<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<body>

<div id="map"></div>
<script>
    
      var map = L.map('map', {
        center: [0.5048330589169082, 101.44732394765101],
        zoom: 16
                });
                var marker = L.marker([0.5048330589169082, 101.44732394765101]).addTo(map).bindPopup("<b>Smk hasanah cuy!</b><br>Ada PS.").openPopup();
                var marker = L.marker([0.43595554855648305, 101.47132317223502]).addTo(map).bindPopup("<b>Rumah Jeki!</b><br>Aseli").openPopup();
                //taruh didalamBody
L.Control.geocoder({
position: 'topleft'
}).addTo(map);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
L.control.locate().addTo(map);
</script>
</body>
</html>