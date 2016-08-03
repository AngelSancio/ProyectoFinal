<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class publicar_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function guardarPublicar($publicar){

    $id = $publicar['ID'];
    if($id+0 > 0){
      //Actualizar
      $this->db->where('ID=',$id);
      unset($publicar['ID']);
      $this->db->update('publicar',$publicar);
    }else{
      $this->db->insert('publicar',$publicar);
    }
  }

  function listarPublicaciones(){
    $query = $this->db->get('publicar');

    return $query->result();
  }

  function eliminarPublicar($id){

    $this->db->where('ID=',$id);
    $this->db->delete('publicar');
  }

  function cargarPublicar($id){
    $publicar = new stdClass();
    $publicar->ID = 0;
    $publicar->NombrePuesto = "";
    $publicar->Descripcion = "";
    $publicar->Requisitos = "";
    $publicar->NivelAcademico = "";
    $publicar->EdadMaxima = "";
    $publicar->Horario = "";
    $publicar->Salario = "";
    $publicar->Comentario = "";
    $publicar->Empresa = "";

    $query = $this->db->where('ID=',$id);
    $query = $this->db->get('publicar');

    $rs = $query->result();
    if(count($rs) > 0){
      $publicar = $rs[0];
    }
    return $publicar;
  }
}
