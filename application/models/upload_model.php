<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function subirDatos($datos){
    $this->db->insert('anuncio',$datos);
  }

  function cargarTipo(){
    $query = $this->db->get('tipo');

    return $query->result();
  }

  function cargarAccion(){
    $query = $this->db->get('accion');

    return $query->result();
  }

}
