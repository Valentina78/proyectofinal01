<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }
  function listar(){
    $query = $this->db->query('select * from anuncio order by id desc limit 4');

    return $query->result();
  }
  function lista(){
    $query = $this->db->query('select * from anuncio limit 12');

    return $query->result();
  }

  function sacarDatos($id){
    $this->db->where('id=', $id);
    $datos = $this->db->get('anuncio');
 
    return $datos->result();
  }
  function sacarVendedor($id){
    $this->db->where('id =', $id);
    $datos= $this->db->get('usuario');

    return $datos->result();
  }
}
