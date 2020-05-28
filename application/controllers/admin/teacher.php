<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Teacher extends CI_Controller
{

  public function __construct()
  {

    parent::__construct();
    $admin = $this->session->userdata('admin');
    if (empty($admin)) {

      redirect('/');
    }
  }

  public function index()
  {
    $this->load->helper('data_br_helper.php');
    $dados['teachers'] = $this->model->get('teacher');
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/teacher/listTeacher', $dados);
  }

  public function insert()
  {
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/teacher/insertTeacher');
  }

  public function save()
  {
    date_default_timezone_set('America/Sao_Paulo');
    
    $starDate = strip_tags($this->input->post('startDate'));
    $endDate = strip_tags($this->input->post('endDate'));
    $nameSubstitute = strip_tags($this->input->post('nameSubstitute'));

    if (!empty($starDate) || !empty($endDate)) {
      if ($starDate <  date("yy-m-d")) {
        $this->session->set_flashdata('danger', 'Data de inicio das férias não pode ser menor que a data atual.');
        redirect('novo-professor');
      }

      if ($starDate >= $endDate) {
        $this->session->set_flashdata('danger', 'Data de inicio das férias não pode ser menor ou igual da data de final das férias.');
        redirect('novo-professor');
      }
      $this->form_validation->set_rules('nameSubstitute', 'Professor(a) substituto', 'required');
    }

    $this->form_validation->set_rules('name', 'nome', 'required');
    if ($this->form_validation->run() == FALSE) {

      $this->session->set_flashdata('danger', validation_errors());
      redirect('novo-professor');
    } else {

      

      

      $dados = array(
        'name' => strip_tags($this->input->post('name')),
        'status' => 'titular',
        'holidayStart' => $starDate,
        'holidayEnd' =>  $endDate
      );

      $tabela = 'teacher';
      $id = $this->model->inserir($dados, $tabela);
      if ($id) {
        if (!empty($nameSubstitute)) {
          $dados = array(
            'name' => $nameSubstitute,
            'status' => 'substituto',
            'teacher_idteacher' => $id
          );

          $tabela = 'teacher';
          $id = $this->model->inserir($dados, $tabela);
        }
        $this->session->set_flashdata('success', "Inserido com sucesso.");
        redirect('professores');
      }
    }
  }
}
