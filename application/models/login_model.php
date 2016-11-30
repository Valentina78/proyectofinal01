<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function crearUsuario($usr){
    $this->db->insert('usuario', $usr);

  }

  function iniciarSesion($correo, $clave){
    $this->db->where('correo =' ,$correo);
    $this->db->where('clave =' ,md5($clave));
    $query = $this->db->get('usuario');
    $result = $query->result();

    $usuario = false;


    if(count($result) > 0){
      $usuario = $result[0];

      return $usuario->id;
    }else {
      return false;
    }
  }

}
