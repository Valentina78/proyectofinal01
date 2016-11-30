<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

  public function __construct()
  {
    define('NOLOGING', true);
    parent::__construct();
    $this->load->model('Login_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('principal/login');
  }

  function guardarUsr(){
    if(isset($_POST)){
      $_POST['clave']=md5($_POST['clave']);
      $this->Login_model->crearUsuario($_POST);
    }
    redirect('seguridad');
  }

}
