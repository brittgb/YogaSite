<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{

		$this->load->view('template/header');
		$this->load->view('admin');
		$this->load->view('template/footer');
	}

	function insert_entry()
	{
		if ($this->input->post('password') != 'testpass')
		{
			$data['message'] = "Your password is incorrect! Please try again.";
		} 
		else {
 			$this->load->model('blog_model');
			$id = $this->blog_model->insert_entry();
			redirect("blog/view/$id");
		}

		$this->load->view('template/header');
		$this->load->view('admin', $data);
		$this->load->view('template/footer');

	}
}

