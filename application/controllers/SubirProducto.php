<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubirProducto extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('upload_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array();
    $data['tipo']= $this->upload_model->cargarTipo();
    $data['accion']= $this->upload_model->cargarAccion();
    $this->load->view('principal/upload',$data);
  }

  function guardar(){
    if(isset($_POST)){
      $this->upload_model->subirDatos($_POST);
    }
    redirect('principal');
  }

}
