<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class account extends CI_Controller {
	function __construct(){
    	parent::__construct();
    	$this->load->model('UserModel');
  	}

  	public function index()
  	{
    	if ($this->session->userdata('login')==1) {
      		redirect('account/index');
    	}
    	$this->load->view('login');
  	}
	
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

	public function dashboard()
	{
		$this->load->view('dashboard_admin');
	}

	public function logout()
  	{
    	$this->session->sess_destroy();
    	redirect('front/index');
  	}

	public function register2()
  	{
    	$this->load->model('UserModel');
    	$password = $this->input->post('password');
    	$email = $this->input->post('email');
    	$table = 'user';

    	$data_insert = array (
      	'password' => $password,
      	'email' => $email
    	);

    	$register2 = $this->UserModel->register_user2($table, $data_insert);

    	if ($register2) {
     		redirect('account/create3');
    	}
  	}

  	public function register3()
  	{
    	$this->load->model('UserModel');
    	$address = $this->input->post('address');
    	$phoneNo = $this->input->post('phoneNo');
    	$username = $this->input->post('username');
    	$name = $this->input->post('name');
    	$table = 'customer';

    	$data_insert = array (
      	'address' => $address,
      	'phoneNo' => $phoneNo,
      	'username' => $username,
      	'name' => $name
    	);

    	$register3 = $this->UserModel->register_user3($table, $data_insert);

    	if ($register3) {
     		redirect('account/sign_in');
    	}
  	}

	public function check_login(){
		$email = $this->input->post('email');
    	$password = $this->input->post('password');

    	$login_customer = $this->UserModel->login_customer($email, $password);
    	$login_admin = $this->UserModel->login_admin($email, $password);

    	if ($login_customer) {
      		$sess_data = array(
          	'logged_in' => 1,
          	'email' => $login->email
      		);
      		$this->session->set_userdata($sess_data);
      		redirect('front/homepage_user');
      	} else if ($login_admin) {
      		$sess_data = array(
          	'logged_in' => 1,
          	'email' => $login->email
      		);
      		$this->session->set_userdata($sess_data);
      		redirect('front/homepage_admin');
    	} else {
      		echo "<script>alert('Gagal login: Cek email, password!');</script>";
      		redirect('account/index');
    	}
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

}
?>
