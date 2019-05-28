<?php
class Article_scholar_model extends CI_Model
{

  function getAllArticleScholar($status = "")
  {
    if ($status != '') {
      $this->db->where('status', $status);
    }
    $result = $this->db->get('tbl_article_scholar');
    return $result->result();
  }

  function insertScholar($scholarName, $scholarNameArabic, $scholarNameFrench)
  {
    $this->db->set('scholar_name', $scholarName);
    $this->db->set('scholar_name_arabic', $scholarNameArabic);
    $this->db->set('scholar_name_french', $scholarNameFrench);
    $this->db->insert('tbl_article_scholar');
    return true;
  }
  function updateScholarDetails($reciterId, $scholarName, $scholarNameArabic,  $scholarNameFrench, $status)
  {
    $data = array('last_updated' => date('Y-m-d H:i:s'));
    $this->db->set('scholar_name', $scholarName);
    $this->db->set('scholar_name_arabic', $scholarNameArabic);
    $this->db->set('scholar_name_french', $scholarNameFrench);
    $this->db->set('status', $status);
    $this->db->where('id', $scholarId);
    $this->db->update('tbl_article_scholar', $data);
    return true;
  }
}
