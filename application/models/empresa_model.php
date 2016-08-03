<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class empresa_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function guardarEmpresa($empresa){

    $id = $empresa['ID'];
    if($id+0 > 0){
      //Actualizar
      $this->db->where('ID=',$id);
      unset($empresa['ID']);
      $this->db->update('empresa',$empresa);
    }else{
      $this->db->insert('empresa',$empresa);
    }
  }

  function iniciarSesion($usr, $clv){

    $this->db->where('Email=',$usr);
    $this->db->where('Clave=',md5($clv));
    $query = $this->db->get('empresa');

    $rs = $query->result();
    if(count($rs) > 0){
      $empresa = $rs[0];
      return $empresa->ID;
  }

  $todos = $this->db->query("select count(*) as nr from empresa");
  $nn = $todos->result();
  //var_dump($usr,$clv,$rs);
  //var_dump($empresa);
  if($nn[0]->nr < 1 && $usr == 'admin' && $clv == 'tareafacil'){
    return 0;
  }
/*  if($usr == 'admin' && $clv == 'tareafacil'){
    return 0;
  }*/
  return false;
  }

  function listarEmpresas(){
    $query = $this->db->get('empresa');

    return $query->result();
  }

  function eliminarEmpresa($id){

    $this->db->where('ID=',$id);
    $this->db->delete('empresa');
  }

  function cargarEmpresa($id){
    $empresa = new stdClass();
    $empresa->ID = 0;
    $empresa->Nombre = "";
    $empresa->Email = "";
    $empresa->Clave = "";
    $empresa->Rnc = "";
    $empresa->Dedicarse = "";
    $empresa->Logo = "";
    $empresa->Direccion = "";
    $empresa->PaginaWeb = "";
    $empresa->Ciudad = "";
    $empresa->Pais = "";
    $empresa->PersonaContacto = "";
    $empresa->DepartamentoContacto = "";
    $empresa->TelefonoContacto = "";
    $empresa->EmailContacto = "";

    $query = $this->db->where('ID=',$id);
    $query = $this->db->get('empresa');

    $rs = $query->result();
    if(count($rs) > 0){
      $empresa = $rs[0];
    }
    return $empresa;
  }
}
