<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meven.do</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <!--<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <!-- href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" -->
  </head>
  <body>
    <!-- Top Bar -->
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="menu">
          <h1><li class="menu-text">Meven.do</li></h1>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li><a href="<?php echo base_url('Mapa'); ?>">Mapa</a></li>
          <li><a href="<?php echo base_url('SubirProducto'); ?>">Publicar Inmueble</a></li>
          <li><a href="<?php echo base_url('/Seguridad/cerrar'); ?>">Cerrar sesion</a></li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li><input type="search" placeholder="Buscar"></li>
          <li><button type="button" class="button">Buscar</button></li>
        </ul>
      </div>
    </div>
    <!-- End Top Bar -->
    <br>

    <br /> <br />
    <div class="row column text-center">
      <h2>Artículos Recientes</h2>
      <hr>
    </div>

    <div class="row small-up-2 large-up-4">
      <?php
      $d = "RD$ ";
      foreach ($articulo as $art){
        $linkArt = base_url("/Principal/showArti/?id={$art->id}");
        echo "      <div class='column' >
                <img width='600px' height='400px' class='' src='http://placehold.it/600x400'>
                <h5>{$art->titulo}</h5>
                <p>$d{$art->precio}</p>
                <a href='{$linkArt}' class='button expanded botones-recientes'>Ver</a>
              </div>";
      } ?>

    </div>
    <hr>
    <div class="row column text-center">
      <h2>Más Artículos</h2>
      <hr>
    </div>

    <div class="row small-up-2 medium-up-3 large-up-6">
      <?php
      $d = "RD$ ";
      foreach ($articulos as $arti){
         $linkArt = base_url("/Principal/showArti/?id={$arti->id}");
        echo             "<div class='column'>
                <img class='thumbnail' src='http://placehold.it/500x400'>
                <h5>{$arti->titulo}</h5>
                <p>$d{$arti->precio}</p>
                <a href='{$linkArt}' class='button small expanded hollow'>Ver</a>
              </div>";
      } ?>

    </div>

    <hr>


    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
