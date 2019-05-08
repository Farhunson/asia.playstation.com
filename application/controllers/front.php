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
		$this->load->model('GamesModel');
		$data['games']=$this->GamesModel->get_all_games();
		$this->load->view('games', $data);
	}

	public function psn()
	{
		$this->load->view('psn');
	}

	public function news(){
		$this->load->view('news');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function homepage_user()
	{
		$this->load->view('in_front_page');
	}

	public function product_user()
	{
		$this->load->view('in_product');
	}

	public function support_user()
	{
		$this->load->view('in_support');
	}

	public function games_user()
	{
		$this->load->view('in_games');
	}

	public function psn_user()
	{
		$this->load->view('in_psn');
	}

	public function product_admin()
	{
		$this->load->view('admin_product');
	}

	public function support_admin()
	{
		$this->load->view('admin_support');
	}

	public function games_admin()
	{
		$this->load->model('GamesModel');
		$data['games']=$this->GamesModel->get_all_games();
		$this->load->view('admin_games', $data);
	}

	public function psn_admin()
	{
		$this->load->view('admin_psn');
	}

	public function homepage_admin()
	{
		$this->load->view('admin_front_page');
	}

}


// href = <?php echo site_url('page_view/support'); //connecting page

//$data['rebus']= 'mie';
		//$this->load->view('front_page', $data);
		//passing data