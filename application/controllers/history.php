<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class History extends CI_Controller {

	public function index()
	{

		$this->load->model('blog_model');
		$data ['entries'] = $this->blog_model->get_entry_list();

		$this->load->view('template/header');
		$this->load->view('history', $data);
		$this->load->view('template/footer');
	}
}

