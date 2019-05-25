<?php
class BookAuthor extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if (!is_logged_in())  // if you add in constructor no need write each function in above controller.
    {
      redirect('admin/login');
    }
    $this->load->model('admin/book_author_model');
  }

  function index()
  {
    $data['authors'] = $this->book_author_model->getAllBookAuthors();
    $this->load->view('admin/header');
    $this->load->view('admin/book_author_list', $data);
    $this->load->view('admin/footer');
  }

  function addAuthor()
  {
    $authorName  = $this->input->post('aurthorName', TRUE);
    $result = $this->book_author_model->insertAuthor($authorName);
    echo $result;
  }
  function updateAuthor()
  {
    $authorId  = $this->input->post('authorId', TRUE);
    $authorName  = $this->input->post('authorName', TRUE);
    $status  = $this->input->post('status', TRUE);
    $result = $this->book_author_model->updateAuthorDetails($authorId, $authorName, $status);
    echo $result;
  }
}
