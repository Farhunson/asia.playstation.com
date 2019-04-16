<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page_view extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function homepage()
	{
		$data['rebus']= 'mie';
		$this->load->view('front_page', $data);
	}

	public function product()
	{
		$data['rebus']= 'mie';
		$this->load->view('front_page', $data);
	}

	public function games()
	{
		$data['rebus']= 'mie';
		$this->load->view('front_page', $data);
	}

	public function psn()
	{
		$data['rebus']= 'mie';
		$this->load->view('front_page', $data);
	}

	public function news()
	{
		$data['rebus']= 'mie';
		$this->load->view('front_page', $data);
	}

	public function support()
	{
		$data['rebus']= 'mie';
		$this->load->view('front_page', $data);
	}


}

// href = <?php echo site_url('page_view/support'); //connecting page