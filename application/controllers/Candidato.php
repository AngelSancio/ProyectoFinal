<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidato extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('candidato_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }
  function candidato()
  {
    $data = array();

    $id = 0;
    if(isset($_GET['ID'])){
      $id = $_GET['ID']+0;
    }

    $data['candidato'] = $this->candidato_model->cargarCandidato($id);

    $data['candidatos'] = $this->candidato_model->listarCandidatos();

    $this->load->view('Registro/candidato', $data);
  }
  function guardar(){
    /*if(isset($_POST)){
      $archivo = $_FILES['Foto']['tmp_name'];
      $destino = "subido/". $_FILES['Foto']['name'];
      move_uploaded_file($archivo,$destino);
    }*/
    if($_POST){

      $_POST['Clave'] = md5($_POST['Clave']);
      $this->candidato_model->guardarCandidato($_POST);
    }
    $this->load->view('Candidato/mensaje');
  }
  function delete(){
    $id = (isset($_GET['ID']))?$_GET['ID']+0:0;
    $this->candidato_model->eliminarCandidato($id);
    $this->load->view('Candidato/mensaje');
  }
  function empleos()
  {
    $this->load->view('Empleos/principal');
  }

}
