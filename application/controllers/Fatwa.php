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
    $data['rowsPerPage'] = '5';
    $data['muftinames'] = $this->mufti_model->getAllMufties(1);
    $data['categories'] = $this->fatawa_category_model->getAllCategory(1);
    $data['questions'] = $this->fatawa_question_model->getAllFatawaQuestion(2, 'last_updated', '0', '5'); // status, orderby & limit
    $data['toatlCount'] = $this->fatawa_question_model->getrecordCount(2, 'last_updated'); // status, orderby & limit
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
    $rowsPerPage  = $this->input->post('rowsPerPage', TRUE);
    $rowno  = $this->input->post('pageCount', TRUE);
    $third_option  = $this->input->post('third_option', TRUE);

    if ($rowno != 0) {
      $rowno = ($rowno - 1) * $rowsPerPage;
    }

    $records_shown_count = $rowno + 5;

    $data = $this->fatawa_question_model->getAllFatawaQuestion(2, 'last_updated', $rowno, $rowsPerPage, $shaikh_id, $fatwaCategoryId, $third_option); // status, orderby & limit
    $toatlCount = $this->fatawa_question_model->getrecordCount(2, 'last_updated', $shaikh_id, $fatwaCategoryId); // status, orderby & limit
    // echo $records_shown_count.'-'.$toatlCount; exit;
    $western_arabic = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    $eastern_arabic = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');

    foreach ($data as $key => $row) {
      echo '<div class="mishary-section "><div class="col-md-offset-1 col-md-10 shaikh-section margin-bottom-30"><div><p class="margin-0">' . str_replace($western_arabic, $eastern_arabic, $row->last_updated) . '</p><p class="shaikh-name">' . $row->question . '</p>
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
    if ($toatlCount > $records_shown_count) {
      echo '<div style="text-align:center;padding: 5px;"><button type="button" id="loadmore" class="btn btn-info">Load More</button></div>';
    }
    echo "<script>
    $('.complete_answer').on('click', function() {
      var question = $(this).parents('.shaikh-section').find('.shaikh-name').html();
      var answer = $(this).parents('.shaikh-section').find('.complete-answer').html();
      $('#exampleModalCenter #exampleModalLongTitle').html(question);
      $('#exampleModalCenter .modal-body').html('<p>' + answer + '</p>');
    });
    </script>";
  }
}
