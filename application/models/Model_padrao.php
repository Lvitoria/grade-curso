<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_padrao extends CI_Model
{


  //função de inserir um novo usuario
  public function inserir($dados_usuario, $tabela)
  {

    $this->db->insert($tabela, $dados_usuario);
    return $this->db->insert_id();
  }

  //para logar 
  public function logar($dados, $tabela)
  {

    $this->db->where("email", $dados["email"]);
    $this->db->where("password", $dados["password"]);
    $usuario = $this->db->get($tabela)->result();
    return $usuario[0];
  }

  //listar todos
  public function get($tabela)
  {

    $usuario = $this->db->get($tabela)->result();
    return $usuario;
  }

  //listar uma info por id
  public function GetId($tabela, $coluna, $id)
  {

    $this->db->where($coluna, $id);
    $usuario = $this->db->get($tabela)->result();
    return $usuario[0];
  }

  //listar tudo que tem naquele id
  public function GetIdAll($tabela, $coluna, $id)
  {

    $this->db->where($coluna, $id);
    $usuario = $this->db->get($tabela)->result();
    return $usuario;
  }

  //busca por dois indentificadores
  public function GetTwoId($tabela, $discipline,$grid, $discipline_iddiscipline, $grid_idgrid)
  {

    $this->db->where($discipline, $discipline_iddiscipline);
    $this->db->where($grid, $grid_idgrid);
    $usuario = $this->db->get($tabela)->result();
    return $usuario[0];
  }

  //salvar por id
  public function updateForID($tabela, $coluna, $id, $dados)
  {

    $this->db->where($coluna, $id);
    $this->db->set($dados);
    return $this->db->update($tabela, $dados);
  }
}
