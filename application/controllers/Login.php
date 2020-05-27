<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

  public function __construct()
  {

    parent::__construct();
  }

  public function index()
  {
    $id_admin = $this->session->userdata('admin');
        if ($id_admin != null) {
			
            redirect('/home');
		}
    $this->load->view('login');
  }


  public function logar()
  {

    $this->form_validation->set_rules('email', 'E-mail', 'required');
    $this->form_validation->set_rules('password', 'password', 'required');

    if ($this->form_validation->run() == FALSE) {

      $this->session->set_flashdata('danger', validation_errors());
      redirect('login');
    } else {

      $dados = array(
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password')
      );
      $tabela = 'admin';
      $usuario = $this->model->logar($dados, $tabela);
      if ($usuario) {
        $this->session->set_userdata('admin', $usuario);
        redirect('home');
      } else {
        $this->session->set_flashdata('danger', 'Credencias erradas.');
        redirect('login');
      }
    }
  }

  public function deslogar()
  {
    $this->session->sess_destroy();
    redirect('/');
  }
}
