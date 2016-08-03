<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller{

  public function __construct()
  {
    define('NOLOGIN',true);
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('Portal/principal');
  }
  function contacto()
  {
    $this->load->view('Portal/contacto');
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
