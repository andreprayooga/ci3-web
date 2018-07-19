<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	} 

	public function getAll($id=null)
    {
        if($id != null)
            $this->db->where('user_id', $id);
            $query = $this->db->get('users');
            return $query->result_array();  
    }

    public function getAll_user()
    {
        // Urutkan berdasar abjad
        $this->db->order_by('username');

        $query = $this->db->get('users');
        return $query->result();
    }
}
?>