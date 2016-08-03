<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class administrador_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }

  function iniciarSesion($usr, $clv){

  if($usr == 'Angel' && $clv == 'angel' || $usr == 'Diana' && $clv == 'diana' || $usr == 'Casandra' && $clv == 'casandra'){
    return 0;
  }
  return false;
  }

}
