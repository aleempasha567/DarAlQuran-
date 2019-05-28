<?php
class Articlecategories extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if (!is_logged_in())  // if you add in constructor no need write each function in above controller.
    {
      redirect('admin/login');
    }
    $this->load->model('admin/article_category_model');
  }

  function index()
  {
    $data['categoryNames'] = $this->article_category_model->getAllArticleCategory();
    $this->load->view('admin/header');
    $this->load->view('admin/article_category_list', $data);
    $this->load->view('admin/footer');
  }

  function getCategories()
  {
    $data = $this->article_category_model->getAllCategory();
    echo '<option value="">Select</option>';
    foreach ($data as $key => $value) {
      echo '<option value="' . $value->id . '">' . $value->category_name . '</option>';
    }
  }

  function addArticleCategoryName()
  {
    $articleCategoryName  = $this->input->post('articleCategoryName', TRUE);
    $articleCategoryNameArabic  = $this->input->post('articleCategoryNameArabic', TRUE);
    $articleCategoryNameFrench  = $this->input->post('articleCategoryNameFrench', TRUE);
    $result = $this->article_category_model->insertArticleCategory($articleCategoryName, $articleCategoryNameArabic, $articleCategoryNameFrench);
    echo $result;
  }
  function updateArticleCategoryName()
  {
    $categoryId  = $this->input->post('categoryId', TRUE);
    $categoryName  = $this->input->post('articleCategoryName', TRUE);
    $categoryNameArabic  = $this->input->post('articleCategoryNameArabic', TRUE);
    $categoryNameFrench  = $this->input->post('articleCategoryNameFrench', TRUE);
    $status  = $this->input->post('status', TRUE);
    $result = $this->article_category_model->updateArticleCategoryDetails($categoryId, $articleCategoryName, $articleCategoryNameArabic, $articleCategoryNameFrench, $status);
    echo $result;
  }
}
