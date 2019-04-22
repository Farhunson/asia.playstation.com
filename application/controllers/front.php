<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class front extends CI_Controller {

	public function index()
	{
		$this->load->view('front_page');
	}

	public function homepage()
	{
		$this->load->view('front_page');
	}

	public function product() 
	{
		$this->load->view('product');
	}

	public function support()
	{
		$this->load->view('support');
	}

	public function games()
	{
		$this->load->view('games');
	}

	public function psn()
	{
		$this->load->view('psn');
	}

	public function news()
	{
		$this->load->view('news');
	}

	public function homepage_user()
	{
		$this->load->view('in_front_page');
	}

}


// href = <?php echo site_url('page_view/support'); //connecting page

//$data['rebus']= 'mie';
		//$this->load->view('front_page', $data);
		//passing data