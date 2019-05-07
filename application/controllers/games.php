<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class games extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function addgames()
  	{
    	$this->load->model('GamesModel');
    	$name = $this->input->post('name');
    	$genre = $this->input->post('genre');
    	$release_date = $this->input->post('release_date');
    	$provider = $this->input->post('provider');
    	$platform = $this->input->post('platform');
    	$price = $this->input->post('price');
    	$picture ="img/games/";
    	$picture .= $this->input->post('picture');
    	$description = $this->input->post('description');
    	$table = 'games';

    	$data_insert = array (
      	'name' => $name,
      	'genre' => $genre,
      	'release_date' => $release_date,
      	'provider' => $provider,
      	'platform' => $platform,
      	'price' => $price,
      	'picture' => $picture,
      	'description' => $description
    	);

    	$addgames = $this->GamesModel->add_games($table, $data_insert);

    	if ($addgames) {
     		redirect('account/dashboard');
    	}
  	}

	public function delete_game($games_id){
		$this->load->model('GamesModel');
		$delete = $this->GamesModel->delete($games_id);
	
	}

	public function show_game()
	{
		$this->load->model('GamesModel');
		$data = $this->GamesModel->get_all_games();
		$this->load->view('games', $data);
	}

	public function view($games_id)
	{
		$this->load->model('GamesModel');
		$data=$this->GamesModel->get_data($games_id) ;
		$this->load->view('view_games', $data);
	}

	public function view_admin($games_id)
	{
		$this->load->model('GamesModel');
		$data=$this->GamesModel->get_data($games_id) ;
		$this->load->view('admin_view_games', $data);
	}

	public function edit_game($games_id)
	{
		$this->load->model('GamesModel');
		$data=$this->GamesModel->get_data($games_id) ;
		$this->load->view('edit_games', $data);
	}

	public function update_games($games_id){
		$this->load->model('GamesModel');
    	$name = $this->input->post('name');
    	$genre = $this->input->post('genre');
    	$release_date = $this->input->post('release_date');
    	$provider = $this->input->post('provider');
    	$platform = $this->input->post('platform');
    	$price = $this->input->post('price');
    	$picture ="img/games/";
    	$picture .= $this->input->post('picture');
    	$description = $this->input->post('description');
    	$table = 'games';
    	$id = $games_id;

    	$data_update = array (
      	'name' => $name,
      	'genre' => $genre,
      	'release_date' => $release_date,
      	'provider' => $provider,
      	'platform' => $platform,
      	'price' => $price,
      	'picture' => $picture,
      	'description' => $description
    	);

    	$updategames = $this->GamesModel->updategames($table, $data_update, $id);

    	if ($updategames) {
     		redirect('account/dashboard');
    	}
	}

	
}
