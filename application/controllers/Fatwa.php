<?php
class Fatwa extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('admin/mufti_model');
    $this->load->model('admin/fatawa_category_model');
    $this->load->model('admin/fatawa_question_model');
  }

  function index()
  {
    $data['title'] = 'Fatwa';
    $data['muftinames'] = $this->mufti_model->getAllMufties(1);
    $data['categories'] = $this->fatawa_category_model->getAllCategory(1);
    $data['questions'] = $this->fatawa_question_model->getAllFatawaQuestion(2, 'last_updated', '10'); // status, orderby & limit
    // print_r($data['questions']); exit;
    $this->load->view('header', $data);
    $this->load->view('sidenav');
    $this->load->view('fatwa', $data);
    $this->load->view('footer');
  }

  function getAllFatawaQuestions()
  {
    $shaikh_id  = $this->input->post('shaikh_id', TRUE);
    $fatwaCategoryId  = $this->input->post('category_id', TRUE);
    $data = $this->fatawa_question_model->getAllFatawaQuestion(2, 'last_updated', '10', $shaikh_id, $fatwaCategoryId); // status, orderby & limit

    $western_arabic = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    $eastern_arabic = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');

    foreach ($data as $key => $row) {
      echo '<div class="mishary-section "><div class="col-md-offset-1 col-md-10 shaikh-section margin-bottom-30"><div><p class="margin-0">' .str_replace($western_arabic, $eastern_arabic, $row->last_updated). '</p><p class="shaikh-name">' . $row->question . '</p>
        </div>
        <p class="complete-answer hide">' . $row->answer . '</p>
        <div class="middle-cotent">
          <p>';
          if (strlen($row->answer) <= 200) {
            echo $row->answer;
          } else {
            echo substr($row->answer, 0, 200) . '...';
          }
      echo '</p><a data-toggle="modal" data-target="#exampleModalCenter" class="complete_answer ';
      if (strlen($row->answer) < 200) {
        echo 'hide';
      }
      echo '">قراءة المزيد</a></div><div class="shaikh-icon"><div class="image-section"><img src="' . base_url('assets/images/mishary-rashed.png') . '" class="img-responsive" /></div></div><div class="views">شوهد 99 <i class="fa fa-eye"></i></div></div></div>';
    }
  }
}
