<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Mario Map</title>

  <style>

    body {
        margin: 0;
    }

    #map-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
    }

    #map {
      height: 400px;
      width: 400px;
    }
  </style>

    <!-- Include the Google Maps API with your API key -->
    <script src="https://maps.googleapis.com/maps/api/js?key=yourapikey&callback=initMap" 
  async defer></script>

</head>

<body>

  <!-- Map container -->
  <div id="map-container">
    <h1>Mario Map</h1>

    <div id="map"></div>
  </div>

  <script>
    function initMap() {
      const center = { lat: 25.2048, lng: 55.2708 };

      const map = new google.maps.Map(document.getElementById('map'), {
        center: center,
        zoom: 12,
        mapId: 'your mapid'
      });

      const marker = new google.maps.Marker({
        position: center,
        map: map,
      });
    }
  </script>
</body>
</html>
