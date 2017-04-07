<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home_page');
	}

	public function hello()
	{
		$this->load->view('Hello');
	}
}
