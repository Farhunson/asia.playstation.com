<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class account extends CI_Controller {

	
	public function create()
	{
		$this->load->view('create_account');
	}

	public function create2()
	{
		$this->load->view('create_account2');
	}

	public function create3()
	{
		$this->load->view('create_account3');
	}

	public function create4()
	{
		$this->load->view('create_account4');
	}

	public function sign_in()
	{
		$this->load->view('login');
	}

	public function profile()
	{
		$this->load->model('UserModel');
		
		$data=$this->UserModel->get_data('1301174515') ;
		$this->load->view('user_profile', $data);
	}

	public function edit_nama($user_id){
		$this->load->model('UserModel');
		$nama = $this->input->post('name');
	
		$data_update = array (
		  'name' => $nama,
		);
		$update = $this->UserModel->update_nama($user_id,$data_update);

	
	}
	public function edit_gender($user_id){
		$this->load->model('UserModel');
		$gender = $this->input->post('gender');
	
		$data_update = array (
		  'gender' => $gender,
		);
		$update = $this->UserModel->update_gender($user_id,$data_update);

	
	}

	public function edit_address($user_id){
		$this->load->model('UserModel');
		$address = $this->input->post('address');
	
		$data_update = array (
		  'address' => $address,
		);
		$update = $this->UserModel->update_address($user_id,$data_update);

	
	}

	public function edit_user_id($user_id){
		$this->load->model('UserModel');
		$address = $this->input->post('user_id');
	
		$data_update = array (
		  'user_id' => $user_id,
		);
		$update = $this->UserModel->update_user_id($user_id,$data_update);

	
	}

	public function edit_password($user_id){
		$this->load->model('UserModel');
		$address = $this->input->post('password');
	
		$data_update = array (
		  'password' => $password,
		);
		$update = $this->UserModel->update_user_id($user_id,$data_update);

	
	}

	public function edit_phone($user_id){
		$this->load->model('UserModel');
		$address = $this->input->post('phoneNo');
	
		$data_update = array (
		  'phoneNo' => $phoneNo,
		);
		$update = $this->UserModel->update_phone($user_id,$data_update);

	
	}
	
	public function dashboard()
	{
		$this->load->view('dashboard_admin');
	}

}
?>
