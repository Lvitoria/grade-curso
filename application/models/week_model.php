<?php

defined('BASEPATH') or exit('No direct script access allowed');

class week_model extends CI_Model
{

  public function getAllSegunda()
  {
    $this->db->select('grid.*,teacher.*,discipline.name as discipline, grid_has_discipline.classes');
    $this->db->from('teacher');
    $this->db->join('discipline', 'teacher.idteacher = discipline.teacher_idteacher');
    $this->db->join('grid_has_discipline', 'discipline.iddiscipline = grid_has_discipline.discipline_iddiscipline');
    $this->db->join('grid', 'grid_has_discipline.grid_idgrid = grid.idgrid');
    $this->db->where('grid.week', 'segunda');
    $this->db->order_by('grid_has_discipline.classes', 'asc');
    $query = $this->db->get();
    return $query->result();
  }

  public function getAllTerca()
  {
    $this->db->select('grid.*,teacher.*,discipline.name as discipline, grid_has_discipline.classes');
    $this->db->from('teacher');
    $this->db->join('discipline', 'teacher.idteacher = discipline.teacher_idteacher');
    $this->db->join('grid_has_discipline', 'discipline.iddiscipline = grid_has_discipline.discipline_iddiscipline');
    $this->db->join('grid', 'grid_has_discipline.grid_idgrid = grid.idgrid');
    $this->db->where('grid.week', 'terca');
    $this->db->order_by('grid_has_discipline.classes', 'asc');
    $query = $this->db->get();
    return $query->result();
  }

  public function getAllQuarta()
  {
    $this->db->select('grid.*,teacher.*,discipline.name as discipline, grid_has_discipline.classes');
    $this->db->from('teacher');
    $this->db->join('discipline', 'teacher.idteacher = discipline.teacher_idteacher');
    $this->db->join('grid_has_discipline', 'discipline.iddiscipline = grid_has_discipline.discipline_iddiscipline');
    $this->db->join('grid', 'grid_has_discipline.grid_idgrid = grid.idgrid');
    $this->db->where('grid.week', 'quarta');
    $this->db->order_by('grid_has_discipline.classes', 'asc');
    $query = $this->db->get();
    return $query->result();
  }
  public function getAllQuinta()
  {
    $this->db->select('grid.*,teacher.*,discipline.name as discipline, grid_has_discipline.classes');
    $this->db->from('teacher');
    $this->db->join('discipline', 'teacher.idteacher = discipline.teacher_idteacher');
    $this->db->join('grid_has_discipline', 'discipline.iddiscipline = grid_has_discipline.discipline_iddiscipline');
    $this->db->join('grid', 'grid_has_discipline.grid_idgrid = grid.idgrid');
    $this->db->where('grid.week', 'quinta');
    $this->db->order_by('grid_has_discipline.classes', 'asc');
    $query = $this->db->get();
    return $query->result();
  }
  public function getAllSexta()
  {
    $this->db->select('grid.*,teacher.*,discipline.name as discipline, grid_has_discipline.classes');
    $this->db->from('teacher');
    $this->db->join('discipline', 'teacher.idteacher = discipline.teacher_idteacher');
    $this->db->join('grid_has_discipline', 'discipline.iddiscipline = grid_has_discipline.discipline_iddiscipline');
    $this->db->join('grid', 'grid_has_discipline.grid_idgrid = grid.idgrid');
    $this->db->where('grid.week', 'sexta');
    $this->db->order_by('grid_has_discipline.classes', 'asc');
    $query = $this->db->get();
    return $query->result();
  }
  public function getAllSabado()
  {
    $this->db->select('grid.*,teacher.*,discipline.name as discipline, grid_has_discipline.classes');
    $this->db->from('teacher');
    $this->db->join('discipline', 'teacher.idteacher = discipline.teacher_idteacher');
    $this->db->join('grid_has_discipline', 'discipline.iddiscipline = grid_has_discipline.discipline_iddiscipline');
    $this->db->join('grid', 'grid_has_discipline.grid_idgrid = grid.idgrid');
    $this->db->where('grid.week', 'sabado');
    $this->db->order_by('grid_has_discipline.classes', 'asc');
    $query = $this->db->get();
    return $query->result();
  }


  public function get($tabela)
  {
    $this->db->where_not_in('period', '4');
    $usuario = $this->db->get($tabela)->result();
    return $usuario;
  }
}
