<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('empresa_model');
    $this->load->model('candidato_model');
    $this->load->model('publicar_model');
  }

  function index()
  {

  }
  function curriculums()
  {
    $data = array();

    $id = 0;
    if(isset($_GET['ID'])){
      $id = $_GET['ID']+0;
    }

    $data['candidato'] = $this->candidato_model->cargarCandidato($id);

    $data['candidatos'] = $this->candidato_model->listarCandidatos();

    $this->load->view('Curriculums/principal', $data);
  }
  function empresa()
  {
    $data = array();

    $id = 0;
    if(isset($_GET['ID'])){
      $id = $_GET['ID']+0;
    }

    $data['empresa'] = $this->empresa_model->cargarEmpresa($id);

    $data['empresas'] = $this->empresa_model->listarEmpresas();

    $this->load->view('Registro/empresa', $data);
  }

  function guardarLogo(){
    $foto = 'Logo';
    $config['upload_path'] = 'logo/';
    //$config['file_name'] = 'archivo';
    $config['allowed_types'] = "jpg|png|jpeg";
    $config['max_size'] = "0";
    $config['max_width'] = "0";
    $config['max_height'] = "0";
    $config['maintain_ratio'] = true;

    $this->load->library('upload', $config);
    $this->upload->do_upload($foto);
    $data_upload_files = $this->upload->data();

    $image_path = $this->upload->data();
    $_POST['Logo'] = $image_path['file_name'];
             //$this->db->insert('candidato',$data);
  }

  function guardar(){

    if($_POST){

      $this->guardarLogo();

      $_POST['Clave'] = md5($_POST['Clave']);
      $email = $_POST['Email'];
      $this->empresa_model->guardarEmpresa($_POST);

      $mensajec = '<html>
								<head>
								<title>Confirmación de registro</title>
								</head>
								<body>
									<h1>Bienvenido a Empleate Ya</h1>
									<p>Esperamos que sea de su agrado la pagina y que puedas encontrar tu trabajo ideal.</p>
								</body>
							</html>';

				//cabecera
				$headers = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
				//dirección del remitente
				$headers .= "From: www.empleoya.260mb.net/Empleate Ya <20131717@itla.edu.do>\r\n";
				$headers .=  "Reply-To: 20131717@itla.edu.do \r\n";

				mail($email, 'Confirmación de registro', $mensajec, $headers);

    }
    $this->load->view('Empresa/mensaje');
  }
  function delete(){
    $id = (isset($_GET['ID']))?$_GET['ID']+0:0;
    $this->empresa_model->eliminarEmpresa($id);
    $this->load->view('Empresa/mensaje');
  }
  function publicar()
  {
    $data = array();

    $id = 0;
    if(isset($_GET['ID'])){
      $id = $_GET['ID']+0;
    }

    $data['publicar'] = $this->publicar_model->cargarPublicar($id);

    $data['publicaciones'] = $this->publicar_model->listarPublicaciones();

    $this->load->view('Publicar/principal', $data);
  }
  function guardarPublicar(){
    if($_POST){
      $this->publicar_model->guardarPublicar($_POST);
    }
    $this->load->view('Publicar/mensaje');
  }
  function deletePublicar(){
    $id = (isset($_GET['ID']))?$_GET['ID']+0:0;
    $this->publicar_model->eliminarPublicar($id);
    $this->load->view('Publicar/mensaje');
  }
}
