<?php
class fatawa_question_model extends CI_Model
{

  function getAllFatawaQuestion($status = "")
  {
    $t1 = 'tbl_fatwa_question';
    $t2 = 'tbl_fatawa_categories';
    $get = [
      $t1 . '.*',
      $t2 . '.category_name',
      $t2 . '.category_name_arabic',
      $t2 . '.category_name_french'
    ];
    $this->db->select($get);
    $this->db->from($t1);
    $this->db->join($t2, $t1 . '.fatwa_category_id = ' . $t2 . '.id', 'left');
    if ($status != '') {
      $this->db->where($t1 . '.status', $status);
    }
    return $this->db->get()->result();
  }

  function insertFatawaQuestion($question, $fatwaCategoryId, $answer="", $status, $questionerName="", $questionerEmailid="", $questionerContactno="")
  {
    $this->db->set('question', $question);
    $this->db->set('fatwa_category_id', $fatwaCategoryId);
    if ($answer != '') {
      $this->db->set('answer', $answer);
    }
    if ($status != '') {
      $this->db->set('status', $status);
    }
    if ($questionerName != '') {
      $this->db->set('questioner_name', $questionerName);
    }
    if ($questionerEmailid != '') {
      $this->db->set('questioner_emailid', $questionerEmailid);
    }
    if ($questionerContactno != '') {
      $this->db->set('questioner_contactno', $questionerContactno);
    }
    $this->db->insert('tbl_fatwa_question');
    return true;
  }
  function updateFatawaQuestionDetails($questionId, $question, $fatwaCategoryId, $answer,  $questionerName, $questionerEmailid, $questionerContactno, $status)
  {
    $data = array('last_updated' => date('Y-m-d H:i:s'));
    $this->db->set('question', $question);
    $this->db->set('fatwa_category_id', $fatwaCategoryId);
    $this->db->set('answer', $answer);
    $this->db->set('questioner_name', $questionerName);
    $this->db->set('questioner_emailid', $questionerEmailid);
    $this->db->set('questioner_contactno', $questionerContactno);
    $this->db->set('status', $status);
    $this->db->where('id', $questionId);
    $this->db->update('tbl_fatwa_question', $data);
    return true;
  }
}
