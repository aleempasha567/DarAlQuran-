<?php
class Quran_riways_model extends CI_Model{

  function getAllQuranRiways(){
    $result = $this->db->get('tbl_quran_riways');
    return $result->result();
  }

  function insertReciter($riwayaName) {
    $this->db->set('riwaya_name', $riwayaName);
    $this->db->insert('tbl_quran_riways');
    return true;
  }
  function updateReciterDetails($riwayaId,$riwayaName,$status) {
    $data=array('last_updated'=>date('Y-m-d H:i:s'));
    $this->db->set('riwaya_name', $riwayaName);
    $this->db->set('status', $status);
    $this->db->where('id',$riwayaId);
    $this->db->update('tbl_quran_riways',$data);
    return true;
  }
}
