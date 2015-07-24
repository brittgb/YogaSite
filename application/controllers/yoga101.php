<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Yoga101 extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('yoga101');
		$this->load->view('template/footer');
	}
}

