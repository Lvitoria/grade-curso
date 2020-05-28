<?php

defined('BASEPATH') or exit('No direct script access allowed');

class teacher_model extends CI_Model
{

  //listar todos os professores titulares
  public function get()
  {
    $this->db->where("status", "titular");
    $usuario = $this->db->get('teacher')->result();
    return $usuario;
  }
}
