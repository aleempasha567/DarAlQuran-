<?php
class Fatwa extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $data['title'] = 'Fatwa';
    $this->load->view('header', $data);
    $this->load->view('sidenav');
    $this->load->view('fatwa');
    $this->load->view('footer');
  }
}
