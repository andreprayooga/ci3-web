<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	 public function get_all_users($limit = FALSE, $offset = FALSE)
    {
        if($limit){
            $this->db->limit($limit,$offset);
        }
        $this->db->order_by('register_date','desc');
        $query = $this->db->get('users');
        return $query->result_array();
    }

	public function getOne($user_id)
  {
    $query = $this->db->query("select * from users where user_id='$id'");
    return $query->result_array();
  }

  public function getAll()
  {
  	$records = array();
    $query = $this->db->get("users");
    return $query->result_array();
  }

  public function insert($data) {
    if ($this->db->insert("users", $data)) {
      return true;
    }
  }

  public function delete($id) {
    if ($this->db->delete("users", "user_id = ".$id)) {
      return true;
    }
  }

  public function update($data,$old_id) {
    $this->db->set($data);
    $this->db->where("user_id", $old_id);
    $this->db->update("users", $data);
  }

  public function get_total()
    {
        return $this->db->count_all('user');
    }
}?>