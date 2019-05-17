<?php
class Quranlist extends CI_Controller{
  function __construct(){
    parent::__construct();
    if(!is_logged_in())  // if you add in constructor no need write each function in above controller.
    {
      redirect('admin/login');
    }
    $this->load->model('admin/quran_list_model');
  }

  function index(){
    $data['quranList'] = $this->quran_list_model->getAllQuranlist();
    $this->load->view('admin/header');
    $this->load->view('admin/quran_list', $data);
    $this->load->view('admin/footer');
  }

  function getReciters() {
    $data = $this->quran_list_model->getReciters();
    echo '<option value="">Select</option>';
    foreach ($data as $key => $value) {
      echo '<option value="'.$value->id.'">'.$value->reciter_name.'</option>';
    }
  }
  function getRecitationTypes() {
    $data = $this->quran_list_model->getRecitationTypes();
    echo '<option value="">Select</option>';
    foreach ($data as $key => $value) {
      echo '<option value="'.$value->id.'">'.$value->recitation_type_name.'</option>';
    }
  }
  function getRiwayas() {
    $data = $this->quran_list_model->getRiwayas();
    echo '<option value="">Select</option>';
    foreach ($data as $key => $value) {
      echo '<option value="'.$value->id.'">'.$value->riwaya_name.'</option>';
    }
  }

  function addQuranListType(){
    $reciterId  = $this->input->post('reciterId',TRUE);
    $recitationTypeId  = $this->input->post('recitationTypeId',TRUE);
    $riwayasId  = $this->input->post('riwayasId',TRUE);
    $description  = $this->input->post('description',TRUE);
    $aduioUrl  = $this->input->post('aduioUrl',TRUE);
    $result = $this->quran_list_model->insertQuranListType($reciterId,$recitationTypeId,$riwayasId,$description,$aduioUrl);
    echo $result;
  }
  function updateQuranList(){
    $quranTypeId  = $this->input->post('quranTypeId',TRUE);
    $reciterId  = $this->input->post('reciterId',TRUE);
    $recitationTypeId  = $this->input->post('recitationTypeId',TRUE);
    $riwayasId  = $this->input->post('riwayasId',TRUE);
    $description  = $this->input->post('description',TRUE);
    $aduioUrl  = $this->input->post('aduioUrl',TRUE);
    $status  = $this->input->post('status',TRUE);
    $result = $this->quran_list_model->updateQuranListDetails($quranTypeId,$reciterId,$recitationTypeId,$riwayasId,$description,$aduioUrl,$status);
    echo $result;
  }
}
