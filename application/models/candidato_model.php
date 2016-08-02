<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class candidato_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function guardarCandidato($candidato){

    $id = $candidato['ID'];
    if($id+0 > 0){
      //Actualizar
      $this->db->where('ID=',$id);
      unset($candidato['ID']);
      $this->db->update('candidato',$candidato);
    }else{
      $this->db->insert('candidato',$candidato);
    }
  }

  function listarCandidatos(){
    $query = $this->db->get('candidato');

    return $query->result();
  }

  function eliminarCandidato($id){

    $this->db->where('ID=',$id);
    $this->db->delete('candidato');
  }

  function cargarCandidato($id){
    $candidato = new stdClass();
    $candidato->ID = 0;
    $candidato->Nombre = "";
    $candidato->Apellido = "";
    $candidato->Cedula = "";
    $candidato->Sexo = "";
    $candidato->Direccion = "";
    $candidato->Ciudad = "";
    $candidato->FechaNacimiento = "";
    $candidato->Nacionalidad = "";
    $candidato->Foto = "";
    $candidato->EstadoCivil = "";
    $candidato->NivelAcademico = "";
    $candidato->Laborando = "";
    $candidato->Email = "";
    $candidato->Curriculum = "";
    $candidato->Clave = "";

    $query = $this->db->where('ID=',$id);
    $query = $this->db->get('candidato');

    $rs = $query->result();
    if(count($rs) > 0){
      $candidato = $rs[0];
    }
    return $candidato;
  }
}
