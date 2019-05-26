<?php
class fatawaquestion extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if (!is_logged_in())  // if you add in constructor no need write each function in above controller.
    {
      redirect('admin/login');
    }
    $this->load->model('admin/fatawa_question_model');
  }

  function index()
  {
    $data['questions'] = $this->fatawa_question_model->getAllFatawaQuestion();
    $this->load->view('admin/header');
    $this->load->view('admin/fatawa_question_list', $data);
    $this->load->view('admin/footer');
  }

  function addFatawaQuestion()
  {
    $question  = $this->input->post('question', TRUE);
    $fatwaCategoryId  = $this->input->post('fatwaCategoryId', TRUE);
    $answer  = $this->input->post('answer', TRUE);
    $status  = $this->input->post('status', TRUE);
    $name  = $this->input->post('name', TRUE);
    $email  = $this->input->post('email', TRUE);
    $mobile  = $this->input->post('mobile', TRUE);
    $result = $this->fatawa_question_model->insertFatawaQuestion($question, $fatwaCategoryId, $answer, $status, $name, $email, $mobile);
    echo $result;
  }

  function updateFatawaQuestion()
  {
    $questionId  = $this->input->post('questionId', TRUE);
    $question  = $this->input->post('question', TRUE);
    $fatwaCategoryId  = $this->input->post('fatwaCategoryId', TRUE);
    $answer  = $this->input->post('answer', TRUE);
    $questionerName  = $this->input->post('questionerName', TRUE);
    $questionerEmailid  = $this->input->post('questionerEmailid', TRUE);
    $questionerContactno  = $this->input->post('questionerContactno', TRUE);
    $status  = $this->input->post('status', TRUE);
    $result = $this->fatawa_question_model->updateFatawaQuestionDetails($questionId, $question, $fatwaCategoryId, $answer, $questionerName, $questionerEmailid, $questionerContactno, $status);
    echo $result;
  }
}
