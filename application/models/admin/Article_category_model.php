<?php
class Article_category_model extends CI_Model
{

  function getAllArticleCategory()
  {
    $result = $this->db->get('tbl_article_categories');
    return $result->result();
  }

  function insertArticleCategory($articleCategoryName, $articleCategoryNameArabic, $articleCategoryNameFrench)
  {
    $this->db->set('article_category_name', $articleCategoryName);
    $this->db->set('article_category_name_arabic', $articleCategoryNameArabic);
    $this->db->set('article_category_name_french', $articleCategoryNameFrench);
    $this->db->insert('tbl_article_categories');
    return true;
  }
  function updateArticleCategoryDetails($articleId, $articleCategoryName, $articleCategoryNameArabic,  $articleCategoryNameFrench, $status)
  {
    $data = array('last_updated' => date('Y-m-d H:i:s'));
    $this->db->set('article_category_name', $articleCategoryName);
    $this->db->set('article_category_name_arabic', $articleCategoryNameArabic);
    $this->db->set('article_category_name_french', $articleCategoryNameFrench);
    $this->db->set('status', $status);
    $this->db->where('id', $articleId);
    $this->db->update('tbl_article_categories', $data);
    return true;
  }
}
