<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Discipline extends CI_Controller
{

  public function __construct()
  {

    parent::__construct();
    $admin = $this->session->userdata('admin');
    $this->load->model('teacher_model', 'teacher');
    if (empty($admin)) {

      redirect('/');
    }
  }

  public function insert()
  {
    $dados['teachers'] = $this->teacher->get();
    $dados['grids'] = $this->model->get('grid');
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/Discipline/insertDiscipline', $dados);
  }

  public function save()
  {

    $this->form_validation->set_rules('name', 'materia', 'required|is_unique[discipline.name]');
    $this->form_validation->set_rules('teacher', 'escolha um professor', 'required');

    if ($this->form_validation->run() == FALSE) {

      $this->session->set_flashdata('danger', validation_errors());
      redirect('disciplina');
    } else {

      $dados = array(
        'name' => strip_tags($this->input->post('name')),
        'teacher_idteacher' => strip_tags($this->input->post('teacher')),
      );

      $tabela = 'discipline';
      $id_discipline = $this->model->inserir($dados, $tabela);
      if ($id_discipline) {
        $this->session->set_flashdata('success', "Inserido com sucesso.");
        redirect('home');
      }
    }
  }
}
