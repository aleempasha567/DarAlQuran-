<?php
class Articlelist extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if (!is_logged_in())  // if you add in constructor no need write each function in above controller.
    {
      redirect('admin/login');
    }
    $this->load->model('admin/article_list_model');
  }

  function index()
  {
    $data['articleList'] = $this->article_list_model->getAllArticlelist();
    $this->load->view('admin/header');
    $this->load->view('admin/article_list', $data);
    $this->load->view('admin/footer');
  }

  function getArticleScholars()
  {
    $data = $this->article_list_model->getArticleScholars();
    echo '<option value="">Select</option>';
    foreach ($data as $key => $value) {
      echo '<option value="' . $value->id . '">' . $value->scholar_name . '</option>';
    }
  }
  function getArticleCategory()
  {
    $data = $this->article_list_model->getArticleCategory();
    echo '<option value="">Select</option>';
    foreach ($data as $key => $value) {
      echo '<option value="' . $value->id . '">' . $value->article_category_name . '</option>';
    }
  }


  function addArticleList()
  {
    $articleScholarId  = $this->input->post('articleScholarId', TRUE);
    $articleCategoryId  = $this->input->post('articleCategoryId', TRUE);
    $articleTitleArabic  = $this->input->post('articleTitleArabic', TRUE);
    $articleTitle  = $this->input->post('articleTitle', TRUE);
    $articleTitleFrench  = $this->input->post('articleTitleFrench', TRUE);

    $articleDescriptionArabic  = $this->input->post('articleDescriptionArabic', TRUE);

    $articleDescription  = $this->input->post('articleDescription', TRUE);

    $articleDescriptionFrench  = $this->input->post('articleDescriptionFrench', TRUE);


    $result = $this->article_list_model->insertArticle($articleScholarId, $articleCategoryId, $articleTitle, $articleTitleArabic, $articleTitleFrench, $articleDescriptionArabic, $articleDescription, $articleDescriptionFrench);
    echo $result;
  }
  function updateQuranList()
  {
    $quranTypeId  = $this->input->post('quranTypeId', TRUE);
    $reciterId  = $this->input->post('reciterId', TRUE);
    $recitationTypeId  = $this->input->post('recitationTypeId', TRUE);
    $riwayasId  = $this->input->post('riwayasId', TRUE);
    $surahName  = $this->input->post('surahName', TRUE);
    $surahNameArabic  = $this->input->post('surahNameArabic', TRUE);
    $surahNameFrench  = $this->input->post('surahNameFrench', TRUE);
    $description  = $this->input->post('description', TRUE);
    $aduioUrl  = $this->input->post('aduioUrl', TRUE);
    $status  = $this->input->post('status', TRUE);
    $result = $this->article_list_model->updateQuranListDetails($quranTypeId, $reciterId, $recitationTypeId, $riwayasId, $surahName, $surahNameArabic, $surahNameFrench, $description, $aduioUrl, $status);
    echo $result;
  }
}
