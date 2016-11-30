<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapa extends CI_Controller {

  public function __construct()
{
  parent::__construct();
  //Codeigniter : Write Less Do More
  $this->load->helper('url');
  $this->load->library('googlemaps');
  $this->load->model('mapa_model');

}

	public function index()
	{
    $config['center'] = "18.486058, -69.931212";
    $config['map_height'] = "500px";
    $config['map_type'] = "SATELLITE";
    $config['zoom'] = 'auto';
    $this->googlemaps->initialize($config);
    $data= array();
    $tmp= $this->mapa_model->mostrar();
    foreach ($tmp as $t) {
      $linkArt = base_url("/Principal/showArti/?id={$t->id}");
      $titulo = $t->titulo;
      $marker = array();
      $ventana = "<h5>{$titulo}</h5><h6>{$t->precio}</h6><a href='{$linkArt}' class='button expanded'>Ver</a>";
      $marker['position'] = $t->latlng;
      $marker['infowindow_content'] = "{$ventana}";
      $this->googlemaps->add_marker($marker);
    }
    $data['map'] = $this->googlemaps->create_map();
		$this->load->view('principal/mapa',$data);
	}
}
