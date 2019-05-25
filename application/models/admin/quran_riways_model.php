<?php
class Quran_riways_model extends CI_Model
{

  function getAllQuranRiways($status = "")
  {
    if ($status != '') {
      $this->db->where('status', $status);
    }
    $result = $this->db->get('tbl_quran_riways');
    return $result->result();
  }

  function insertReciter($riwayaName, $riwayaNameArabic, $riwayaNameFrench)
  {
    $this->db->set('riwaya_name', $riwayaName);
    $this->db->set('riwaya_name_arabic', $riwayaNameArabic);
    $this->db->set('riwaya_name_french', $riwayaNameFrench);
    $this->db->insert('tbl_quran_riways');
    return true;
  }
  function updateReciterDetails($riwayaId, $riwayaName, $riwayaNameArabic, $riwayaNameFrench, $status)
  {
    $data = array('last_updated' => date('Y-m-d H:i:s'));
    $this->db->set('riwaya_name', $riwayaName);
    $this->db->set('riwaya_name_arabic', $riwayaNameArabic);
    $this->db->set('riwaya_name_french', $riwayaNameFrench);
    $this->db->set('status', $status);
    $this->db->where('id', $riwayaId);
    $this->db->update('tbl_quran_riways', $data);
    return true;
  }
}
