<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_psn extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function lalala()
	{
		$data['rebus']= 'mie';
		$this->load->view('psn', $data);
	}
}
