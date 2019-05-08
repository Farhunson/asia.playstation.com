<?php 

class UserModel extends CI_Model
{
  public function login_customer($email, $password){
    $this->db->select('*');
    $this->db->from('customer');
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $this->db->join('user', 'user.user_id = customer.user_id');
    $result = $this->db->get();
    if($result->num_rows()==1){
        return $result->row(0);
    }else{
        return false;
    }
  }

  public function login_admin($email, $password){
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $this->db->join('user', 'admin.user_id = user.user_id');
    $result = $this->db->get();
    if($result->num_rows()==1){
        return $result->row(0);
    }else{
        return false;
    }
  }

   public function login_user($email, $password){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $result = $this->db->get();
    if($result->num_rows()==1){
        return $result->row();
    }else{
        return false;
    }
  }

  public function register_user2($user, $data, $email){
    $sql = $this->UserModel->get_same($email);
    if($sql == FALSE){
        return false;
    }else{
        $insert = $this->db->insert($user, $data);
        if ($insert){
          return TRUE;
        }else{
          return FALSE;
        }
    }
  }

  public function get_same($email){
    $this->db->from('user');
    $this->db->where('email',$email);

    $query = $this->db->get();

    if($query->num_rows()==1)
    {
      return false;
    } else {
      return true;
    }
  }

  public function register_user3($customer,$data){
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

  public function update_email($user_id,$data){
    $sql = "UPDATE user
        SET email = '".$data['email']."'
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

  public function delete($user_id){
    $sql = "DELETE FROM user 
    WHERE user_id = '".$user_id."'";
    $this->db->query($sql);
    redirect ('/front/index','refresh');
  }
}




?>