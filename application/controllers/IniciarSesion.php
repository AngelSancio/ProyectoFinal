<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IniciarSesion extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('candidato_model');
    //$this->load->model('empresa_model');
  }

  function index()
  {

  }
 function entrar(){
   $this->load->view('IniciarS/Entrar');
 }

 /*Todavia no en uso
 function salir(){
   session_destroy();
   redirect('Inicio');
 }*/


  function loginCandidato(){

    $usuario = $_POST['Email'];
    $clave = $_POST['Clave'];
    $tmp = $this->candidato_model->iniciarSesion($usuario,$clave);

    if($tmp !== false){
      $_SESSION['candidato'] = $tmp;
      redirect('inicio');
    }else{
      $this->load->view('IniciarS/error');
      //$this->db->_error_message();
    }
   }

  function loginEmpresa(){

    $usuario = $_POST['Email'];
    $clave = $_POST['Clave'];
    $tmp = $this->candidato_model->iniciarSesion($usuario,$clave);

    if($tmp !== false){
      $_SESSION['empresa'] = $tmp;
      redirect('inicio');
    }else{
      $this->load->view('IniciarS/error');
      //$this->db->_error_message();
    }
   }
}
