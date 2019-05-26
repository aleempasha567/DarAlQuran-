<?php
class Fatwa extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('admin/mufti_model');
    $this->load->model('admin/fatawa_category_model');
    $this->load->model('admin/fatawa_question_model');
  }

  function index()
  {
    $data['title'] = 'Fatwa';
    $data['muftinames'] = $this->mufti_model->getAllMufties(1);
    $data['categories'] = $this->fatawa_category_model->getAllCategory(1);
    $data['questions'] = $this->fatawa_question_model->getAllFatawaQuestion(2, 'last_updated', '10'); // status, orderby & limit
    // print_r($data['questions']); exit;
    $this->load->view('header', $data);
    $this->load->view('sidenav');
    $this->load->view('fatwa', $data);
    $this->load->view('footer');
  }
}
