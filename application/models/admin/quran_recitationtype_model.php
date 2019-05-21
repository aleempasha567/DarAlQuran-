<?php
class Quran_recitationtype_model extends CI_Model{

  function getAllQuranRecitationTypes($status = ""){
    if($status!= ''){
      $this->db->where('status', $status);
    }
    $result = $this->db->get('tbl_quran_recitation_type');
    return $result->result();
  }

  function insertRecitationType($recitationTypeName, $recitationTypeNameArabic, $recitationTypeNameFrench) {
    $this->db->set('recitation_type_name', $recitationTypeName);
    $this->db->set('recitation_type_name_arabic', $recitationTypeNameArabic);
    $this->db->set('recitation_type_name_french', $recitationTypeNameFrench);
    $this->db->insert('tbl_quran_recitation_type');
    return true;
  }
  function updateRecitationTypeDetails($recitationTypeId,$recitationTypeName,$recitationTypeNameArabic,$recitationTypeNameFrench,$status) {
    $data=array('last_updated'=>date('Y-m-d H:i:s'));
    $this->db->set('recitation_type_name', $recitationTypeName);
    $this->db->set('recitation_type_name_arabic', $recitationTypeNameArabic);
    $this->db->set('recitation_type_name_french', $recitationTypeNameFrench);
    $this->db->set('status', $status);
    $this->db->where('id',$recitationTypeId);
    $this->db->update('tbl_quran_recitation_type',$data);
    return true;
  }
}
