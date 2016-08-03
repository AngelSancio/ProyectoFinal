<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidato extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('candidato_model');
    $this->load->model('empresa_model');
    $this->load->model('publicar_model');
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


  function guardarImagen(){
    $foto = 'Foto';
    $config['upload_path'] = 'subido/';
    //$config['file_name'] = 'archivo';
    $config['allowed_types'] = "jpg|png|jpeg|pdf";
    $config['max_size'] = "0";
    $config['max_width'] = "0";
    $config['max_height'] = "0";
    $config['maintain_ratio'] = true;

    $this->load->library('upload', $config);
    $this->upload->do_upload($foto);
    $data_upload_files = $this->upload->data();

    $image_path = $this->upload->data();
    $_POST['Foto'] = $image_path['file_name'];
             //$this->db->insert('candidato',$data);
  }
  function guardarPDF(){
    $archivo = 'Curriculum';
    $config['upload_path'] = 'subido/';
    //$config['file_name'] = 'archivo';
    $config['allowed_types'] = "jpg|png|jpeg|pdf";
    $config['max_size'] = "0";
    $config['max_width'] = "0";
    $config['max_height'] = "0";
    $config['maintain_ratio'] = true;

    $this->load->library('upload', $config);
    $this->upload->do_upload($archivo);
    $data_upload_files = $this->upload->data();

    $archivo_path = $this->upload->data();

    $_POST['Curriculum'] =$archivo_path['file_name'];
  }
  function guardar(){

      if($_POST){

      $this->guardarImagen();
      $this->guardarPDF();

      $_POST['Clave'] = md5($_POST['Clave']);
      $email = $_POST['Email'];
      $this->candidato_model->guardarCandidato($_POST);

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
    $this->load->view('Candidato/mensaje');
  }
  function delete(){
    $id = (isset($_GET['ID']))?$_GET['ID']+0:0;
    $this->candidato_model->eliminarCandidato($id);
    $this->load->view('Candidato/mensaje');
  }
  function empleos()
  {
    $data = array();

    $id = 0;
    if(isset($_GET['ID'])){
      $id = $_GET['ID']+0;
    }

    $data['publicar'] = $this->publicar_model->cargarPublicar($id);

    $data['publicaciones'] = $this->publicar_model->listarPublicaciones();

    $this->load->view('Empleos/principal', $data);
  }

}
