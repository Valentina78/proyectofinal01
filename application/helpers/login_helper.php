<?php

  session_start();

  if (!isset($_SESSION['usuario']) && !defined('NOLOGING')) {
    redirect('seguridad');
  }
