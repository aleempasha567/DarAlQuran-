<?php
class Quranrecitationtypes extends CI_Controller{
  function __construct(){
    parent::__construct();
    if(!is_logged_in())  // if you add in constructor no need write each function in above controller.
    {
      redirect('admin/login');
    }
    $this->load->model('admin/quran_recitationtype_model');
  }

  function index(){
    $data['recitationTypes'] = $this->quran_recitationtype_model->getAllQuranRecitationTypes();
    $this->load->view('admin/header');
    $this->load->view('admin/quran_recitation_type_list', $data);
    $this->load->view('admin/footer');
  }

  function addRecitationType(){
    $recitationTypeName  = $this->input->post('recitationTypeName',TRUE);
    $result = $this->quran_recitationtype_model->insertRecitationType($recitationTypeName);
    echo $result;
  }
  function updateRecitationType(){
    $recitationTypeId  = $this->input->post('recitationTypeId',TRUE);
    $recitationTypeName  = $this->input->post('recitationTypeName',TRUE);
    $status  = $this->input->post('status',TRUE);
    $result = $this->quran_recitationtype_model->updateRecitationTypeDetails($recitationTypeId,$recitationTypeName,$status);
    echo $result;
  }
}
