<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Step extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Step1');
	}

	public function hello()
	{
		$this->load->view('Hello');
	}
}
