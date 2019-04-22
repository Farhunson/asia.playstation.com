<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class games extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function view_game()
	{
		$this->load->view('view_games');
	}
}
