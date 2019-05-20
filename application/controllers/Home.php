<?php
class Home extends CI_Controller{
  function __construct(){
    parent::__construct();
    // $this->load->model('admin/login_model');
  }

  function index(){
    $data['title'] = 'Home';
    $this->load->view('header',$data);
    $this->load->view('home');
    $this->load->view('footer');
  }
}
