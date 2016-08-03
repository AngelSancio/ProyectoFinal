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

  /*function guardarImagen(){
    $foto = 'Foto';
    $archivo = 'Curriculum';
    $config['upload_path'] = 'subido/';
    //$config['file_name'] = 'archivo';
    $config['allowed_types'] = "jpg|png|jpeg|pdf";
    $config['max_size'] = "0";
    $config['max_width'] = "0";
    $config['max_height'] = "0";
    $config['maintain_ratio'] = true;

    $this->load->library('upload', $config);
    $this->upload->do_upload($foto);
    $this->upload->do_upload($archivo);
    $data_upload_files = $this->upload->data();

    $image_path = $this->upload->data();
    $archivo_path = $this->upload->data();
     $data = array(
         'Foto'=>$image_path['full_path'],
         'Curriculum'=>$archivo_path['full_path'],
           );
             $this->db->insert('candidato',$data);

    /*if (!$this->upload->do_upload($foto)){
      //Error
      $data['uploadError'] = $this->upload->display_errors();
      echo $this->upload->display_errors();
      return;
    }
    $data['uploadSuccess'] = $this->upload->data();
  }
  function guardarPDF(){
    $archivo = 'Curriculum';
    $config['upload_path'] = 'archivo/';
    $config['file_name'] = 'archivo';
    $config['allowed_types'] = "pdf";
    $config['max_size'] = "0";
    $config['max_width'] = "0";
    $config['max_height'] = "0";
    $config['maintain_ratio'] = true;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload($archivo)){
      //Error
      $data['uploadError'] = $this->upload->display_errors();
      echo $this->upload->display_errors();
      return;
    }
    $data['uploadSuccess'] = $this->upload->data();
  }

  //$image = $data_upload_files['full_path'];
  /*  $image_path = $this->upload->data();
 $data = array(
   'id'=>$this->input->post('id'),
   'nombre'=>$this->input->post('nombre'),

   'precio'=>$this->input->post('precio'),
     'imagen'=>$image_path['full_path'],
     'categoria_id'=>$this->input->post('categoria_id')
       );
         $this->db->insert(TABLE_PRODUCTO,$data);*/

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
