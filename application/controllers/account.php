<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class account extends CI_Controller {
	function __construct(){
    	parent::__construct();
    	$this->load->model('UserModel');
  	}

  	public function index()
  	{
    	if ($this->session->userdata('logged_in')==1) {
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
	{	$this->load->model('GamesModel');
		$data['games']=$this->GamesModel->get_all_games();
		$data['agame']=null;
		$this->load->view('dashboard_admin', $data);
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

    	$login_user = $this->UserModel->login_user($email, $password);

    	if (session_status() == PHP_SESSION_NONE) {
    		session_start();
		}

    	if ($login_user){
    	$sess_data = array(
          	'logged_in' => 1,
          	'email' => $login_user->email,
          	'user_id' => $login_user->user_id
      	);
      		$this->session->set_userdata($sess_data);
      	}

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
      	'name' => $name,
      	'user_id' => $this->session->userdata('user_id')
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
    	$login_user = $this->UserModel->login_user($email, $password);

    	if (session_status() == PHP_SESSION_NONE) {
    		session_start();
		}

    	if ($login_customer) {
      		$sess_data = array(
          	'logged_in' => 1,
          	'email' => $login_customer->email,
          	'user_id' => $login_customer->user_id
      		);
      		$this->session->set_userdata($sess_data);
      		redirect('front/homepage_user');
      	} else if ($login_admin) {
      		$sess_data = array(
          	'logged_in' => 1,
          	'email' => $login_admin->email,
          	'user_id' => $login_admin->user_id
      		);
      		$this->session->set_userdata($sess_data);
      		redirect('front/homepage_admin');
      	} else if ($login_user) {
      		$sess_data = array(
          	'logged_in' => 1,
          	'email' => $login_user->email,
          	'user_id' => $login_user->user_id
      		);
      		$this->session->set_userdata($sess_data);
      		redirect('front/homepage_user');
    	} else {
      		echo "<script>alert('Gagal login: Cek email, password!');</script>";
      		redirect('account/index');
    	}
	}

	public function profile()
	{
		$this->load->model('UserModel');
		$data=$this->UserModel->get_data($this->session->userdata('user_id')) ;
		$this->load->view('user_profile', $data);
	}

	public function edit_nama(){
		$this->load->model('UserModel');
		$nama = $this->input->post('name');
	
		$data_update = array (
		  'name' => $nama,
		);
		$update = $this->UserModel->update_nama($this->session->userdata('user_id'),$data_update);

	
	}
	public function edit_gender(){
		$this->load->model('UserModel');
		$gender = $this->input->post('gender');
	
		$data_update = array (
		  'gender' => $gender,
		);
		$update = $this->UserModel->update_gender($this->session->userdata('user_id'),$data_update);

	
	}

	public function edit_address(){
		$this->load->model('UserModel');
		$address = $this->input->post('address');
	
		$data_update = array (
		  'address' => $address,
		);
		$update = $this->UserModel->update_address($this->session->userdata('user_id'),$data_update);

	
	}

	public function edit_email(){
		$this->load->model('UserModel');
		$email = $this->input->post('email');
	
		$data_update = array (
		  'email' => $email,
		);
		$update = $this->UserModel->update_email($this->session->userdata('user_id'),$data_update);

	
	}

	public function edit_password(){
		$this->load->model('UserModel');
		$password = $this->input->post('password');
	
		$data_update = array (
		  'password' => $password,
		);
		$update = $this->UserModel->update_password($this->session->userdata('user_id'),$data_update);

	
	}

	public function edit_phone(){
		$this->load->model('UserModel');
		$phoneNo = $this->input->post('phoneNo');
	
		$data_update = array (
		  'phoneNo' => $phoneNo,
		);
		$update = $this->UserModel->update_phone($this->session->userdata('user_id'),$data_update);

	
	}

	public function delete_user(){
		$this->load->model('UserModel');

		$delete = $this->UserModel->delete($this->session->userdata('user_id'));
	
	}

}
?>
