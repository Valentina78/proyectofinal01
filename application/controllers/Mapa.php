<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapa extends CI_Controller {

  public function __construct()
{
  parent::__construct();
  //Codeigniter : Write Less Do More
  $this->load->helper('url');
}

	public function index()
	{
		$this->load->view('principal/mapa');
	}
}
