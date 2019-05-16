<?php
class Quran_reciter_model extends CI_Model{

  function getAllQuranReciters(){
    $result = $this->db->get('tbl_quran_reciters');
    return $result->result();
  }

  function insertReciter($reciterName) {
    $this->db->set('reciter_name', $reciterName);
    $this->db->insert('tbl_quran_reciters');
    return true;
  }
  function updateReciterDetails($reciterId,$reciterName,$status) {
    $data=array('last_updated'=>date('Y-m-d H:i:s'));
    $this->db->set('reciter_name', $reciterName);
    $this->db->set('status', $status);
    $this->db->where('id',$reciterId);
    $this->db->update('tbl_quran_reciters',$data);
    return true;
  }
}
