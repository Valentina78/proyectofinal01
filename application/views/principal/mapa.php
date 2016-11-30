<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mapa</title>
  </head>
  <body>
    <div id="map" style="width:100%;height:715px"></div>

    <script>
    function myMap() {
      var mapCanvas = document.getElementById("map");
      var mapOptions = {
        center: new google.maps.LatLng(18.486058, -69.931212),
        mapTypeId: 'satellite',
        scrollwheel: false,
        zoom: 15

      }

      var map = new google.maps.Map(mapCanvas, mapOptions);
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(18.486058, -69.931212),
          map: map,
          draggable:true,
          title:"Drag me!"
      });

      map.addListener('click', function(e) {
        placeMarker(e.latLng, map);
      });
      function placeMarker(latLng, map) {
      var marker = new google.maps.Marker({
        position: latLng,
        map: map
      });
    }
  }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1tGk92O2ExGvtxy6rIZkwC7xtuyzHymg&callback=myMap" type="text/javascript"></script>
  </body>
</html>
