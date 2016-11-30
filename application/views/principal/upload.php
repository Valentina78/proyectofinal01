<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Publicar</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">
  </head>
  <body>
    <!-- Top Bar -->
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="menu">
          <li class="menu-text">Meven.do</li>
          <li><a href="<?php echo base_url('Principal'); ?>">Inicio</a></li>
        </ul>
      </div>
    </div>

    <div class="row">
        <!-- Shows -->
        <div class="large-6 small-12 columns">
          <div class="row">
              <div class="large-12 column">
                 <form method="post" action="<?php echo base_url('SubirProducto/guardar'); ?>">
                  <label>Título </label>
                    <input autofocus="true" type="text" name="titulo"/>
                  <label>Dirección</label>
                    <input type="text" name="direccion"/>
                  <label>Tipo</label>
                    <select name="tipo" required="true">
                      <?php
                          if(isset($tipo)){
                            if(count($tipo) > 0){
                              foreach ($tipo as $t) {
                                echo "<option value = '{$t->nombre}'>{$t->nombre}</option>";
                              }
                            }
                          }
                          else{
                            echo "<option value='0'>-----Admin no ha puesto nada-----</option>";
                          }
                       ?>
                    </select>
                    <label>Latitud y Longitud</label>
                      <input readonly type="text" id="latlng" name="latlng"/>
            </div>
           </div>
          </div>
          <div class="large-6 small-12 columns">
          <div class="row">
            <div class="large-12 column">

                  <div class="row">
                    <div class="large-12 columns">
                      <label>Precio</label>
                      <input type="number" name="precio" value=""/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="large-12 columns">
                      <label>Acción</label>
                        <select class="" name="accion" required="true">
                            <?php
                              if(isset($accion)){
                                if(count($accion)>0){
                                  foreach ($accion as $a) {
                                    echo "<option value = '{$a->accion}'>{$a->accion}</option>";
                                  }
                                }
                              }
                              else{
                                echo "<option value='0'>-----Admin no ha puesto nada-----</option>";
                              }

                            ?>
                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="large-12 columns">
                      <label>Descripción</label>
                      <input type="text" name="descripcion" value=""/>
                    </div>
                    <div class="large-12 columns">
                      <input type="hidden" name="usuario" readonly="true" value="<?php echo $_SESSION['usuario'];?>" />
                    </div>
                  </div>

                  <!--<div class="row">
                    <div class="large-12 columns">
                      <label>Imágenes</label>
                      <input type="file" multiple="true" accept=".png,.jpeg" value=""/>
                    </div>
                  </div>-->
            </div>
           </div>
            </div>
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyD1tGk92O2ExGvtxy6rIZkwC7xtuyzHymg&sensor=false"></script>
            <script type="text/javascript">

            function latlon(valor){
              if(valor == 1){
              var lat = document.getElementById('info').innerHTML
              document.latlng.value = lat
            }
            }

            var geocoder = new google.maps.Geocoder();

            function geocodePosition(pos) {
              geocoder.geocode({
                latLng: pos
              }, function(responses) {
                if (responses && responses.length > 0) {
                  updateMarkerAddress(responses[0].formatted_address);
                } else {
                  updateMarkerAddress('Cannot determine address at this location.');
                }
              });
            }

            function updateMarkerStatus(str) {
              document.getElementById('markerStatus').innerHTML = str;
            }

            function updateMarkerPosition(latLng) {
              document.getElementById('latlng').value = [
                latLng.lat(),
                latLng.lng()
              ].join(', ');
            }

            function updateMarkerAddress(str) {
              document.getElementById('address').innerHTML = str;
            }

            function initialize() {
              var latLng = new google.maps.LatLng(18.4860575, -69.9312117);
              var map = new google.maps.Map(document.getElementById('mapCanvas'), {
                zoom: 13,
                center: latLng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
              });
              var marker = new google.maps.Marker({
                position: latLng,
                title: 'Point A',
                map: map,
                draggable: true,

              });

              // Update current position info.
              updateMarkerPosition(latLng);
              geocodePosition(latLng);

              // Add dragging event listeners.
              google.maps.event.addListener(marker, 'dragstart', function() {
                updateMarkerAddress('Arrastrando...');
              });

              google.maps.event.addListener(marker, 'drag', function() {
                updateMarkerStatus('Arrastrando...');
                updateMarkerPosition(marker.getPosition());
              });

              google.maps.event.addListener(marker, 'dragend', function() {
                updateMarkerStatus('Arrastrado');
                geocodePosition(marker.getPosition());
                latlon(1);
              });
            }

            // Onload handler to fire off the app.
            google.maps.event.addDomListener(window, 'load', initialize);
            </script>
              <style>
              #mapCanvas {
                width: 1200px;
                height: 400px;
              }
              #infoPanel {
                float: left;
                margin-left: 10px;
              }
              #infoPanel div {
                margin-bottom: 5px;
              }
              </style>

              <div id="mapCanvas"></div>
              <div id="infoPanel">
                <b hidden="true">Estatus del marcador:</b>
                <div hidden="true" id="markerStatus"><i>Arrastre el marcador a la ubicacion deseada.</i></div>
                <b hidden="true">Direccion:</b>
                <div hidden="true" id="address"></div>
              </div>
              <br><br>
              <button type="submit" id="btn" class="button">Publicar</button>
            </form>
            <style media="screen">
              #btn{
                margin-left: 550px;
              }
            </style>
    </div>

 </body>
</html>
