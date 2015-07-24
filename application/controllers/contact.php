<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('contact');
		$this->load->view('template/footer');
	}


	public function checkpost()
	{
		if (!$this->input->post('email'))
		{
			$data['message'] = "please enter a valid email address so I can respond to your message!";
		} 
		else 
			{
				$data['message'] = "Thank you for contacting me!  I'll be sure to respond as soon as possible.";	
		}

		$this->load->view('template/header');
		$this->load->view('contact', $data);
		$this->load->view('template/footer');
	}
	

}
