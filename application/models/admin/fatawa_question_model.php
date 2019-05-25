<?php
class fatawa_question_model extends CI_Model
{

  function getAllFatawaQuestion()
  {
    $result = $this->db->get('tbl_fatwa_question');
    return $result->result();
  }

  function insertFatawaQuestion($question, $fatwaCategoryId, $answer, $questionerName, $questionerEmailid, $questionerContactno)
  {
    $this->db->set('question', $question);
    $this->db->set('fatwa_category_id', $fatwaCategoryId);
    $this->db->set('answer', $answer);
    $this->db->set('questioner_name', $questionerName);
    $this->db->set('questioner_emailid', $questionerEmailid);
    $this->db->set('questioner_contactno', $questionerContactno);
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
