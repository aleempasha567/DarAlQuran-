<?php
class Article_list_model extends CI_Model
{

  function getAllArticlelist($status = "")
  {
    $t1 = 'tbl_article';
    $t2 = 'tbl_article_scholar';
    $t3 = 'tbl_article_categories';

    $get = [
      $t1 . '.*',
      $t2 . '.scholar_name',
      $t2 . '.scholar_name_arabic',
      $t2 . '.scholar_name_french',
      $t3 . '.article_category_name',
      $t3 . '.article_category_name_arabic',
      $t3 . '.article_category_name_french',

    ];
    $this->db->select($get);
    $this->db->from($t1);
    $this->db->join($t2, $t1 . '.article_scholar_id = ' . $t2 . '.id', 'left');
    $this->db->join($t3, $t1 . '.article_category_id = ' . $t3 . '.id', 'left');
    if ($status != '') {
      $this->db->where($t1 . '.status', $status);
    }
    return $this->db->get()->result();
  }

  function getArticleScholars()
  {
    $this->db->where('status', 1);
    $result = $this->db->get('tbl_article_scholar');
    return $result->result();
  }
  function getArticleCategory()
  {
    $this->db->where('status', 1);
    $result = $this->db->get('tbl_article_categories');
    return $result->result();
  }

  function insertArticle($articleScholarId, $articleCategoryId, $articleTitle, $articleTitleArabic, $articleTitleFrench, $articleDescriptionArabic, $articleDescription, $articleDescriptionFrench)
  {
    $this->db->set('article_scholar_id', $articleScholarId);
    $this->db->set('article_category_id', $articleCategoryId);

    $this->db->set('article_title_name', $articleTitle);
    $this->db->set('article_title_name_arabic', $articleTitleArabic);
    $this->db->set('article_title_name_french', $articleTitleFrench);

    $this->db->set('article_description_name', $articleDescription);
    $this->db->set('article_description_name_arabic', $articleDescriptionArabic);
    $this->db->set('article_description_name_french', $articleDescriptionFrench);

    $this->db->insert('tbl_article');
    return true;
  }
}
