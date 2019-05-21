<?php
class fatawacategories extends CI_Controller{
  function __construct(){
    parent::__construct();
    if(!is_logged_in())  // if you add in constructor no need write each function in above controller.
    {
      redirect('admin/login');
    }
    $this->load->model('admin/fatawa_category_model');
  }

  function index(){
    $data['categoryNames'] = $this->fatawa_category_model->getAllCategory();
    $this->load->view('admin/header');
    $this->load->view('admin/fatawa_category_list', $data);
    $this->load->view('admin/footer');
  }

  function addFatawaCategoryName(){
    $categoryName  = $this->input->post('categoryName',TRUE);
    $categoryNameArabic  = $this->input->post('categoryNameArabic',TRUE);
    $categoryNameFrench  = $this->input->post('categoryNameFrench',TRUE);
    $result = $this->fatawa_category_model->insertFatawaCategory($categoryName, $categoryNameArabic, $categoryNameFrench);
    echo $result;
  }
  function updateFatawaCategoryName(){
    $categoryId  = $this->input->post('categoryId',TRUE);
    $categoryName  = $this->input->post('categoryName',TRUE);
    $categoryNameArabic  = $this->input->post('categoryNameArabic',TRUE);
    $categoryNameFrench  = $this->input->post('categoryNameFrench',TRUE);
    $status  = $this->input->post('status',TRUE);
    $result = $this->fatawa_category_model->updateFatawaCategoryDetails($categoryId,$categoryName,$categoryNameArabic,$categoryNameFrench,$status);
    echo $result;
  }
}
