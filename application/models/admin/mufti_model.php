<?php
class Mufti_model extends CI_Model
{

  function getAllMufties($status = "")
  {
    if ($status != '') {
      $this->db->where('status', $status);
    }
    $result = $this->db->get('tbl_mufti_names');
    return $result->result();
  }

  function insertMufti($muftiName, $muftiNameArabic, $muftiNameFrench)
  {
    $this->db->set('mufti_name', $muftiName);
    $this->db->set('mufti_name_arabic', $muftiNameArabic);
    $this->db->set('mufti_name_french', $muftiNameFrench);
    $this->db->insert('tbl_mufti_names');
    return true;
  }
  function updateMuftiDetails($muftiId, $muftiName, $muftiNameArabic,  $muftiNameFrench, $status)
  {
    $data = array('last_updated' => date('Y-m-d H:i:s'));
    $this->db->set('mufti_name', $muftiName);
    $this->db->set('mufti_name_arabic', $muftiNameArabic);
    $this->db->set('mufti_name_french', $muftiNameFrench);
    $this->db->set('status', $status);
    $this->db->where('id', $muftiId);
    $this->db->update('tbl_mufti_names', $data);
    return true;
  }
}
