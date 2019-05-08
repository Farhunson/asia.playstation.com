<?php 

class NewsModel extends CI_Model
{

  public function add_news($news,$data){
    $insert = $this->db->insert($news, $data);
    if ($insert){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function updategames($table, $data_update, $id){
    $this->db->where('news_id', $id);
    $update = $this->db->update('news', $data_update);
    if ($update){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function get_data($news_id){
    $sql = "SELECT * FROM news
            WHERE news.news_id='".$news_id."'";
    return $this->db->query($sql)->row_array();
    // $this->db->get('user');
    // $this->db->where('user_id',$user_id);
    // $hasil = $this->db->get();
  }

  public function delete($news_id){
    $sql = "DELETE FROM news 
    WHERE news_id = '".$news_id."'";
    $this->db->query($sql);
  }

  public function get_all_news(){
    return $this->db->select('*')
    ->from('games')
    ->get()->result();

    // $this->db->get('user');
    // $this->db->where('user_id',$user_id);
    // $hasil = $this->db->get();
  }
  
}

?>