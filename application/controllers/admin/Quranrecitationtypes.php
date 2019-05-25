<?php
class Quranrecitationtypes extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if (!is_logged_in())  // if you add in constructor no need write each function in above controller.
    {
      redirect('admin/login');
    }
    $this->load->model('admin/quran_recitationtype_model');
  }

  function index()
  {
    $data['recitationTypes'] = $this->quran_recitationtype_model->getAllQuranRecitationTypes();
    $this->load->view('admin/header');
    $this->load->view('admin/quran_recitation_type_list', $data);
    $this->load->view('admin/footer');
  }

  function addRecitationType()
  {
    $recitationTypeName  = $this->input->post('recitationTypeName', TRUE);
    $recitationTypeNameArabic  = $this->input->post('recitationTypeNameArabic', TRUE);
    $recitationTypeNameFrench  = $this->input->post('recitationTypeNameFrench', TRUE);
    $result = $this->quran_recitationtype_model->insertRecitationType($recitationTypeName, $recitationTypeNameArabic, $recitationTypeNameFrench);
    echo $result;
  }
  function updateRecitationType()
  {
    $recitationTypeId  = $this->input->post('recitationTypeId', TRUE);
    $recitationTypeName  = $this->input->post('recitationTypeName', TRUE);
    $recitationTypeNameArabic  = $this->input->post('recitationTypeNameArabic', TRUE);
    $recitationTypeNameFrench  = $this->input->post('recitationTypeNameFrench', TRUE);
    $status  = $this->input->post('status', TRUE);
    $result = $this->quran_recitationtype_model->updateRecitationTypeDetails($recitationTypeId, $recitationTypeName, $recitationTypeNameArabic, $recitationTypeNameFrench, $status);
    echo $result;
  }
}
