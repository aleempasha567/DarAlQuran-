<?php
class Quranriways extends CI_Controller{
  function __construct(){
    parent::__construct();
    if(!is_logged_in())  // if you add in constructor no need write each function in above controller.
    {
      redirect('admin/login');
    }
    $this->load->model('admin/quran_riways_model');
  }

  function index(){
    $data['riways'] = $this->quran_riways_model->getAllQuranRiways();
    $this->load->view('admin/header');
    $this->load->view('admin/quran_riways_list', $data);
    $this->load->view('admin/footer');
  }

  function addRiwaya(){
    $riwayaName  = $this->input->post('riwayaName',TRUE);
    $result = $this->quran_riways_model->insertReciter($riwayaName);
    echo $result;
  }
  function updateRiwaya(){
    $riwayaId  = $this->input->post('riwayaId',TRUE);
    $riwayaName  = $this->input->post('riwayaName',TRUE);
    $status  = $this->input->post('status',TRUE);
    $result = $this->quran_riways_model->updateReciterDetails($riwayaId,$riwayaName,$status);
    echo $result;
  }
}
