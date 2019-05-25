<?php
class Fatawa_category_model extends CI_Model
{

  function getAllCategory()
  {
    $result = $this->db->get('tbl_fatawa_categories');
    return $result->result();
  }

  function insertFatawaCategory($categoryName, $categoryNameArabic, $categoryNameFrench)
  {
    $this->db->set('category_name', $categoryName);
    $this->db->set('category_name_arabic', $categoryNameArabic);
    $this->db->set('category_name_french', $categoryNameFrench);
    $this->db->insert('tbl_fatawa_categories');
    return true;
  }
  function updateFatawaCategoryDetails($categoryId, $categoryName, $categoryNameArabic,  $categoryNameFrench, $status)
  {
    $data = array('last_updated' => date('Y-m-d H:i:s'));
    $this->db->set('category_name', $categoryName);
    $this->db->set('category_name_arabic', $categoryNameArabic);
    $this->db->set('category_name_french', $categoryNameFrench);
    $this->db->set('status', $status);
    $this->db->where('id', $categoryId);
    $this->db->update('tbl_fatawa_categories', $data);
    return true;
  }
}
