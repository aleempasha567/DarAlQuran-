<?php
class Book_author_model extends CI_Model{

  function getAllBookAuthors(){
    $result = $this->db->get('tbl_book_authors');
    return $result->result();
  }

  function insertAuthor($authorName) {
    $this->db->set('author_name', $authorName);
    $this->db->insert('tbl_book_authors');
    return true;
  }
  function updateAuthorDetails($authorId,$authorName,$status) {
    $data=array('last_updated'=>date('Y-m-d H:i:s'));
    $this->db->set('author_name', $authorName);
    $this->db->set('status', $status);
    //$this->db->set('last_login','current_login',false);
    $this->db->where('id',$authorId);
    $this->db->update('tbl_book_authors',$data);
    return true;
  }
}
