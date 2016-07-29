<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Legal extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }
  function Aviso()
  {
    $this->load->view('Legal/aviso');
  }
  function Politica()
  {
    $this->load->view('Legal/politica');
  }
  function Servicios()
  {
    $this->load->view('Legal/servicios');
  }


}
