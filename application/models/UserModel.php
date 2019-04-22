<<?php 

class UserModel extends CI_Model
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

  public function update_nama($username,$data){
    $sql = "UPDATE user
        SET name = '".$data['name']."'
        WHERE username='".$username."'";
    $this->db->query($sql);
    redirect ('/crud/profile','refresh');
  }

  public function update_gender($username,$data){
    $sql = "UPDATE user
        SET gender = '".$data['gender']."'
        WHERE username='".$username."'";
    $this->db->query($sql);
    redirect ('/crud/profile','refresh');
  }

  public function update_address($username,$data){
    $sql = "UPDATE user
        SET address = '".$data['address']."'
        WHERE username='".$username."'";
    $this->db->query($sql);
    redirect ('/crud/profile','refresh');
  }

  public function update_email($username,$data){
    $sql = "UPDATE user
        SET email = '".$data['email']."'
        WHERE username='".$username."'";
    $this->db->query($sql);
    redirect ('/crud/profile','refresh');
  }

  
  public function update_password($username,$data){
    $sql = "UPDATE user
        SET password = '".$data['password']."'
        WHERE username='".$username."'";
    $this->db->query($sql);
    redirect ('/crud/profile','refresh');
  }

  public function update_phone($username,$data){
    $sql = "UPDATE user
        SET phoneNo = '".$data['phoneNo']."'
        WHERE username='".$username."'";
    $this->db->query($sql);
    redirect ('/crud/profile','refresh');
  }

  public function get_data($username){
    $sql = "SELECT * FROM user
            WHERE username='".$username."'";
    return $this->db->query($sql)->row_array();

    // $this->db->get('user');
    // $this->db->where('username',$username);
    // $hasil = $this->db->get();
  
  }
}




?>