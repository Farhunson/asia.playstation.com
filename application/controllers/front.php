<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class front extends CI_Controller {

	public function index()
	{
		$this->load->view('front_page');
	}

	public function lalala()
	{
		$data['rebus']= 'mie';
		$this->load->view('front_page', $data);
	}

	public function product() 
	{
		$this->load->view('product');
	}
	public function support()
	{
		$this->load->view('support');
	}
}
