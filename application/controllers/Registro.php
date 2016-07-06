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
    $this->load->view('registro/principal');
  }
  function candidato(){
    $this->load->view('registro/candidato');
  }
  function empresa(){
    $this->load->view('registro/empresa');
  }

}
