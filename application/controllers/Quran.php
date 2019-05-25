<?php
class Quran extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('admin/quran_reciter_model');
    $this->load->model('admin/quran_recitationtype_model');
    $this->load->model('admin/quran_riways_model');
    $this->load->model('admin/quran_list_model');
  }

  function index()
  {
    $data['title'] = 'Quran';
    $data['reciters'] = $this->quran_reciter_model->getAllQuranReciters(1);
    $data['recitationTypes'] = $this->quran_recitationtype_model->getAllQuranRecitationTypes(1);
    $data['riways'] = $this->quran_riways_model->getAllQuranRiways(1);
    $data['quranList'] = $this->quran_list_model->getAllQuranlist(1);
    $this->load->view('header', $data);
    $this->load->view('sidenav');
    $this->load->view('quran', $data);
    $this->load->view('footer');
  }
}
