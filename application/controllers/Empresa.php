<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }
  function curriculums()
  {
    $this->load->view('Curriculums/principal');
  }
  function publicar()
  {
    $this->load->view('Publicar/principal');
  }

}
