<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapa_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }
  function mostrar(){
    $query= $this->db->get('anuncio');

    return $query->result();
  }
}
