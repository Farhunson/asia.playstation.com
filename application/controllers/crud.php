<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Controller {

	

	public function create()
	{
		$data['rebus']= 'mie';
		$this->load->view('games', $data);
	}
	public function sign_in()
	{
		$data['rebus']= 'mie';
		$this->load->view('games', $data);
	}
	public function profile()
	{
		$data['rebus']= 'mie';
		$this->load->view('user_profile', $data);
	}
}
?>
