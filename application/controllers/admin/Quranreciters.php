<?php
class Quranreciters extends CI_Controller{
  function __construct(){
    parent::__construct();
    if(!is_logged_in())  // if you add in constructor no need write each function in above controller.
    {
      redirect('admin/login');
    }
    $this->load->model('admin/quran_reciter_model');
  }

  function index(){
    $data['reciters'] = $this->quran_reciter_model->getAllQuranReciters();
    $this->load->view('admin/header');
    $this->load->view('admin/quran_reciter_list', $data);
    $this->load->view('admin/footer');
  }

  function addReciter(){
    $reciterName  = $this->input->post('reciterName',TRUE);
    $reciterNameArabic  = $this->input->post('reciterNameArabic',TRUE);
    $reciterNameFrench  = $this->input->post('reciterNameFrench',TRUE);
    $result = $this->quran_reciter_model->insertReciter($reciterName, $reciterNameArabic, $reciterNameFrench);
    echo $result;
  }
  function updateReciter(){
    $reciterId  = $this->input->post('reciterId',TRUE);
    $reciterName  = $this->input->post('reciterName',TRUE);
    $reciterNameArabic  = $this->input->post('reciterNameArabic',TRUE);
    $reciterNameFrench  = $this->input->post('reciterNameFrench',TRUE);
    $status  = $this->input->post('status',TRUE);
    $result = $this->quran_reciter_model->updateReciterDetails($reciterId,$reciterName, $reciterNameArabic, $reciterNameFrench, $status);
    echo $result;
  }
}
