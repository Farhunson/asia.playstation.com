<<?php 

class UserModel extends CI_Model
{
  public function login_user($user_id, $password){
    $this->db->where('user_id',$user_id);
    $this->db->where('password',$password);

    $result = $this->db->get('customer');
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

  public function register_user($customer,$data){
    $insert = $this->db->insert($customer, $data);
    if ($insert){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function update_nama($user_id,$data){
    $sql = "UPDATE customer
        SET name = '".$data['name']."'
        WHERE user_id='".$user_id."'";
    $this->db->query($sql);
    redirect ('/account/profile','refresh');
  }

  public function update_gender($user_id,$data){
    $sql = "UPDATE customer
        SET gender = '".$data['gender']."'
        WHERE user_id='".$user_id."'";
    $this->db->query($sql);
    redirect ('/account/profile','refresh');
  }

  public function update_address($user_id,$data){
    $sql = "UPDATE customer
        SET address = '".$data['address']."'
        WHERE user_id='".$user_id."'";
    $this->db->query($sql);
    redirect ('/account/profile','refresh');
  }

  public function update_user_id($user_id,$data){
    $sql = "UPDATE user
        SET user_id = '".$data['user_id']."'
        WHERE user_id='".$user_id."'";
    $this->db->query($sql);
    redirect ('/account/profile','refresh');
  }

  
  public function update_password($user_id,$data){
    $sql = "UPDATE user
        SET password = '".$data['password']."'
        WHERE user_id='".$user_id."'";
    $this->db->query($sql);
    redirect ('/account/profile','refresh');
  }

  public function update_phone($user_id,$data){
    $sql = "UPDATE customer
        SET phoneNo = '".$data['phoneNo']."'
        WHERE user_id='".$user_id."'";
    $this->db->query($sql);
    redirect ('/account/profile','refresh');
  }

  public function get_data($user_id){
    $sql = "SELECT * FROM customer JOIN user ON customer.user_id = user.user_id
            WHERE user.user_id='".$user_id."'";
    return $this->db->query($sql)->row_array();

    // $this->db->get('user');
    // $this->db->where('user_id',$user_id);
    // $hasil = $this->db->get();
  
  }
}




?>