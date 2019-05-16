<?php
class Quran_recitationtype_model extends CI_Model{

  function getAllQuranRecitationTypes(){
    $result = $this->db->get('tbl_quran_recitation_type');
    return $result->result();
  }

  function insertRecitationType($recitationTypeName) {
    $this->db->set('recitation_type_name', $recitationTypeName);
    $this->db->insert('tbl_quran_recitation_type');
    return true;
  }
  function updateRecitationTypeDetails($recitationTypeId,$recitationTypeName,$status) {
    $data=array('last_updated'=>date('Y-m-d H:i:s'));
    $this->db->set('recitation_type_name', $recitationTypeName);
    $this->db->set('status', $status);
    $this->db->where('id',$recitationTypeId);
    $this->db->update('tbl_quran_recitation_type',$data);
    return true;
  }
}
