<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'libraries/REST_Controller.php');
require(APPPATH . 'libraries/Format.php');
use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/quran_list_model');
    }
    public function quranReciters_get()
    {
        $r = $this->quran_list_model->getReciters();
        $this->response($r, 200);
    }
    public function quranRecitationTypes_get()
    {
        $r = $this->quran_list_model->getRecitationTypes();
        $this->response($r, 200);
    }
    public function quranRiwayas_get()
    {
        $r = $this->quran_list_model->getRiwayas();
        $this->response($r, 200);
    }

    public function user_put()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'name' => $this->input->get('name'),
            'pass' => $this->input->get('pass'),
            'type' => $this->input->get('type')
        );
        $r = $this->user_model->update($id, $data);
        $this->response($r);
    }
    public function user_post()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'pass' => $this->input->post('pass'),
            'type' => $this->input->post('type')
        );
        $r = $this->user_model->insert($data);
        $this->response($r);
    }
    public function user_delete()
    {
        $id = $this->uri->segment(3);
        $r = $this->user_model->delete($id);
        $this->response($r);
    }
}
