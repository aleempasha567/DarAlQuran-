<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if ($this->session->userdata('logged_in') == FALSE) {
			redirect('admin/login'); // the user is not logged in, redirect them!
		} else {
			$level = $this->session->userdata('level');
			// access login for admin
			if ($level === '1') {
				redirect('admin/page');

				// access login for staff
			} elseif ($level === '2') {
				redirect('admin/page/staff');

				// access login for author
			} else {
				redirect('admin/page/author');
			}
		}
	}
}
