<?php
class Articlescholar extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if (!is_logged_in())  // if you add in constructor no need write each function in above controller.
    {
      redirect('admin/login');
    }
    $this->load->model('admin/article_scholar_model');
  }

  function index()
  {
    $data['reciters'] = $this->article_scholar_model->getAllArticleScholar();
    $this->load->view('admin/header');
    $this->load->view('admin/scholar_author_list', $data);
    $this->load->view('admin/footer');
  }

  function addArticleScholar()
  {
    $scholarName  = $this->input->post('scholarName', TRUE);
    $scholarNameArabic  = $this->input->post('scholarNameArabic', TRUE);
    $scholarNameFrench  = $this->input->post('scholarNameFrench', TRUE);
    $result = $this->article_scholar_model->insertScholar($scholarName, $scholarNameArabic, $scholarNameFrench);
    echo $result;
  }
  function updateScholar()
  {
    $scholarId  = $this->input->post(scholarId);
    $scholarName  = $this->input->post('scholarName', TRUE);
    $scholarNameArabic  = $this->input->post('scholarNameArabic', TRUE);
    $scholarNameFrench  = $this->input->post('scholarNameFrench', TRUE);
    $status  = $this->input->post('status', TRUE);
    $result = $this->article_scholar_model->updateScholarDetails($scholarId, $scholarName, $scholarNameArabic, $scholarNameFrench, $status);
    echo $result;
  }
}
