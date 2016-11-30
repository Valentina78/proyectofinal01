<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meven.do</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  </head>
  <body>
    <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text">Meven.do</li>
            <li class="has-submenu">
              <a href="#">One</a>
              <ul class="submenu menu vertical" data-submenu>
                <li><a href="#">One</a></li>
                <li><a href="#">Two</a></li>
                <li><a href="#">Three</a></li>
              </ul>
            </li>
            <li><a href="#">Two</a></li>
            <li><a href="#">Three</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->
    <br>
    <!-- You can now combine a row and column if you just need a 12 column row -->
    <div class="row columns">
      <nav aria-label="You are here:" role="navigation">
        <ul class="breadcrumbs">
          <li><a href="<?php echo base_url('Principal'); ?>">Inicio</a></li>
          <li>
            <span class="show-for-sr">Current: </span> Articulo
          </li>
        </ul>
      </nav>
    </div>

    <div class="row">
      <div class="medium-6 columns">
        <img class="thumbnail" src="http://placehold.it/650x350">
        <div class="row small-up-4">
          <div class="column">
            <img class="thumbnail" src="http://placehold.it/250x200">
          </div>
          <div class="column">
            <img class="thumbnail" src="http://placehold.it/250x200">
          </div>
          <div class="column">
            <img class="thumbnail" src="http://placehold.it/250x200">
          </div>
          <div class="column">
            <img class="thumbnail" src="http://placehold.it/250x200">
          </div>
        </div>
      </div>
      <div class="medium-6 large-5 columns">

        <h3><?php echo $articulo[0]->titulo;?></h3>
        <p><?php echo $articulo[0]->descripcion;?></p>

        <div class="row">
          <div class="small-3 columns">
            <label for="middle-label" class="middle">Precio</label>
          </div>
          <div class="small-9 columns">
            <input readonly type="text" id="middle-label" value="<?php echo $articulo[0]->precio;?>">
          </div>
        </div>

        <a href="#" class="button large expanded">Contactar</a>

        <div class="small secondary expanded button-group">
            <a class="button">Facebook</a>
            <a class="button">Twitter</a>
            <a class="button">Yo</a>
          </div>
        </div>
    </div>
<br>
    <div class="column row">
      <ul class="tabs" data-tabs id="example-tabs">
        <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Información</a></li>
      </ul>
      <div class="tabs-content" data-tabs-content="example-tabs">
        <div class="tabs-panel is-active" id="panel1">
          <h4>Vendedor</h4>
          <hr />
          <div class="media-object stack-for-small">
            <!-- <div class="media-object-section">
              <img class="thumbnail" src="http://placehold.it/100x100">
            </div> -->
            <div class="media-object-section">
              <h5><?php echo $vendedor[0]->nombre." ".$vendedor[0]->apellido;?></h5>
              <p>Formas de contacto</p>
              <p>Celular: <?php echo $vendedor[0]->celular;?></p>
              <p>Fax: <?php echo $vendedor[0]->fax;?></p>
              <p>Telefono: <?php echo $vendedor[0]->telefono;?></p>
            </div>
          </div>
          </div>
        </div>
        <div class="tabs-panel" id="panel2">
          <div class="row medium-up-3 large-up-5">
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/350x200">
              <h5>Other Product <small>$22</small></h5>
              <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
              <a href="#" class="button hollow tiny expanded">Buy Now</a>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/350x200">
              <h5>Other Product <small>$22</small></h5>
              <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
              <a href="#" class="button hollow tiny expanded">Buy Now</a>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/350x200">
              <h5>Other Product <small>$22</small></h5>
              <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
              <a href="#" class="button hollow tiny expanded">Buy Now</a>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/350x200">
              <h5>Other Product <small>$22</small></h5>
              <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
              <a href="#" class="button hollow tiny expanded">Buy Now</a>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/350x200">
              <h5>Other Product <small>$22</small></h5>
              <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
              <a href="#" class="button hollow tiny expanded">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row column">
      <ul class="menu">
        <li>Yeti Store</li>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li class="float-right">Copyright 2016</li>
      </ul>
    </div>



    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
