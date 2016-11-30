<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

  public function __construct()
{
  parent::__construct();
  //Codeigniter : Write Less Do More
  $this->load->helper('url');
  $this->load->model('principal_model');
}
 
	public function index()
	{
    $datos = array();
    $datos['articulo'] = $this->principal_model->listar();
    $datos['articulos'] = $this->principal_model->lista();
		$this->load->view('principal/principal', $datos);
	}
  function showArti(){
    $id = (isset($_GET['id']))?$_GET['id']+0:0;
    $valor = array();

    $valor['articulo'] = $this->principal_model->sacarDatos($id);

    $tmp = $this->principal_model->sacarDatos($id);
    $usuario =  $tmp[0]->usuario;
    $valor['vendedor'] = $this->principal_model->sacarVendedor($usuario);

    $this->load->view('principal/product_page',$valor);
  }

}
