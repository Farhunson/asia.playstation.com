<<?php 

class GamesModel extends CI_Model
{

  public function add_games($games,$data){
    $insert = $this->db->insert($games, $data);
    if ($insert){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function updategames($table, $data_update){
    $this->db->where('games_id', $data_update->games_id);
    $update = $this->db->update('games', $data_update);
    if ($update){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function get_data($games_id){
    $sql = "SELECT * FROM games
            WHERE games.games_id='".$games_id."'";
    return $this->db->query($sql)->row_array();
    // $this->db->get('user');
    // $this->db->where('user_id',$user_id);
    // $hasil = $this->db->get();
  }

  public function delete($games_id){
    $sql = "DELETE FROM games 
    WHERE games_id = '".$games_id."'";
    $this->db->query($sql);
    redirect ('/front/games_admin','refresh');
  }

  public function get_all_games(){
    return $this->db->select('*')
    ->from('games')
    ->get()->result();

    // $this->db->get('user');
    // $this->db->where('user_id',$user_id);
    // $hasil = $this->db->get();
  }
  
}

?>