<<?php 

class User extends CI_Model
{
  public function login_user($email, $password){
    $this->db->where('email',$email);
    $this->db->where('password',$password);

    $result = $this->db->get('user');
    if($result->num_rows()==1){
        return $result->row(0);
    }else{
        return false;
    }
  }

  public function role_user($user_id){
    $this->db->where('user_id',$user_id);

    $result = $this->db->get('admin');
    if($result->num_rows()==1){
        return $result->row(0);
    }else{
         $result = $this->db->get('customer');
         if($result->num_rows()==1){
            return $result->row(0);
          } else {
              return false;
          }
    }
  }

  public function register_user($user,$data){
    $insert = $this->db->insert($user, $data);
    if ($insert){
      return TRUE;
    }else{
      return FALSE;
    }
  }
} 

?>