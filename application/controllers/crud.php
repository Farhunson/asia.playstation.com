<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Controller {

	

	public function create()
	{
		$this->load->view('create_account');
	}
	public function create2()
	{
		$this->load->view('create_account2');
	}
	public function sign_in()
	{
		$this->load->view('login');
	}
	public function profile()
	{
		$data['rebus']= 'mie';
		$this->load->view('user_profile', $data);
	}
}
?>
