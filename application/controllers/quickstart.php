<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quickstart extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('quickstart');
		$this->load->view('template/footer');
	}
}

