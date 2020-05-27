<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grid extends CI_Controller
{

  public function __construct()
  {

    parent::__construct();
    $admin = $this->session->userdata('admin');
    $this->load->model('week_model', 'week');
    if (empty($admin)) {

      redirect('/');
    }
  }

  public function index()
  {
    $this->load->helper('data_br_helper.php');
    $dados['sabados'] =  $this->week->getAllSabado();
    $dados['sextas'] =  $this->week->getAllSexta();
    $dados['quintas'] =  $this->week->getAllQuinta();
    $dados['quartas'] =  $this->week->getAllQuarta();
    $dados['tercas'] =  $this->week->getAllTerca();
    $dados['segundas'] =  $this->week->getAllSegunda();
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/grid/listGrid', $dados);
  }

  public function insert()
  {

    $dados['disciplines'] = $this->model->get('discipline');
    $dados['grids'] = $this->week->get('grid');
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/grid/insertGrid', $dados);
  }

  public function save()
  {

    $this->form_validation->set_rules('discipline', 'discipline', 'required');
    $this->form_validation->set_rules('grid', 'Escolha uma semana', 'required');

    if ($this->form_validation->run() == FALSE) {

      $this->session->set_flashdata('danger', validation_errors());
      redirect('novo-grade');
    } else {
      $tabela = 'grid_has_discipline';
      $discipline = strip_tags($this->input->post('discipline'));
      $grid = strip_tags($this->input->post('grid'));
      $period = strip_tags($this->input->post('period'));
      $week =  $this->model->GetId('grid', 'idgrid', $grid);

      //verifica se ja não existe esta disciplina e esta grade
      $grid_discipline = $this->model->GetTwoId($tabela, 'discipline_iddiscipline', 'grid_idgrid', $discipline, $grid);

      if ($grid_discipline) {
        $this->session->set_flashdata('danger', 'Desculpa, mas esta materia ja vai ser dada neste dia da semana.');
        redirect('novo-grade');
      }

      //verifica se o periodo escolhido já não foi preenchido
      $grid_has_disciplines =  $this->model->GetIdAll('grid_has_discipline', 'grid_idgrid', $grid);
      foreach ($grid_has_disciplines as $grid_has_discipline) {
        if ($grid_has_discipline->classes == $period) {
          $this->session->set_flashdata('danger', 'Este periodo já esta ocupada.');
          redirect('novo-grade');
        }
      }

      //verifica quantas vezes esta disciplina já vai estar na semana, obs tirando os sabados fora
      if ($week->week !== "sabado") {
        $disciplineResult =  $this->model->GetId('discipline', 'iddiscipline', $discipline);
        if ($disciplineResult->classesWeek >= 4) {
          $this->session->set_flashdata('danger', 'Desculpa, mas esta disciplina, já vai ser dada mais de três vezes na semana');
          redirect('novo-grade');
        }
        $disciplineResult->classesWeek = strval($disciplineResult->classesWeek + 1);
        $this->model->updateForID('discipline', 'iddiscipline', $discipline, $disciplineResult);
      }


      //verifica se tem o 4 periodos disponiveis
      if ($week->period >= 4) {
        $this->session->set_flashdata('danger', 'este dia da semana já esta cheio');
        redirect('novo-grade');
      }
      $week->period = strval($week->period + 1);
      $this->model->updateForID('grid', 'idgrid', $grid, $week);

      //insere na tabela
      $dados = array(
        'discipline_iddiscipline' => $discipline,
        'grid_idgrid' => $grid,
        'classes' => $period
      );
      $this->model->inserir($dados, $tabela);
      $this->session->set_flashdata('success', "Inserido com sucesso.");
      redirect('home');
    }
  }
}
