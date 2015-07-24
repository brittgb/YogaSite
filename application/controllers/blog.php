<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function index()
	{
		$data ['title'] = "My Blog Title";
		$data ['heading'] = "My Blog Heading";

		$this->load->model('blog_model');
		$data ['entries'] = $this->blog_model->get_entries(10);

		$this->load->view('template/header');
		$this->load->view('blog_previews', $data);
		$this->load->view('template/footer');
	}

	public function view($id)
	{
		$data ['title'] = "My Blog Title";
		$data ['heading'] = "My Blog Heading";

		$this->load->model('blog_model');
		$data ['entry'] = $this->blog_model->get_entry($id);

		$this->load->view('template/header');
		$this->load->view('blog_single', $data);
		$this->load->view('template/footer');
	}
}