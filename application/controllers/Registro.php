<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }
  function principal()
  {
    $this->load->view('Registro/principal');
  }
  function candidato()
  {
    $this->load->view('Registro/candidato');
  }
  function empresa()
  {
    $this->load->view('Registro/empresa');
  }

}
