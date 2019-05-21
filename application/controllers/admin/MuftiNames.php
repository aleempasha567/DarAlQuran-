<?php
class muftinames extends CI_Controller{
  function __construct(){
    parent::__construct();
    if(!is_logged_in())  // if you add in constructor no need write each function in above controller.
    {
      redirect('admin/login');
    }
    $this->load->model('admin/mufti_model');
  }

  function index(){
    $data['muftiNames'] = $this->mufti_model->getAllMufties();
    $this->load->view('admin/header');
    $this->load->view('admin/mufti_list', $data);
    $this->load->view('admin/footer');
  }

  function addMuftiName(){
    $muftiName  = $this->input->post('muftiName',TRUE);
    $muftiNameArabic  = $this->input->post('muftiNameArabic',TRUE);
    $muftiNameFrench  = $this->input->post('muftiNameFrench',TRUE);
    $result = $this->mufti_model->insertMufti($muftiName, $muftiNameArabic, $muftiNameFrench);
    echo $result;
  }
  function updateMuftiName(){
    $muftiId  = $this->input->post('muftiId',TRUE);
    $muftiName  = $this->input->post('muftiName',TRUE);
    $muftiNameArabic  = $this->input->post('muftiNameArabic',TRUE);
    $muftiNameFrench  = $this->input->post('muftiNameFrench',TRUE);
    $status  = $this->input->post('status',TRUE);
    $result = $this->mufti_model->updateMuftiDetails($muftiId,$muftiName,$muftiNameArabic,$muftiNameFrench,$status);
    echo $result;
  }
}
