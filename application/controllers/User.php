<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
                
        $this->load->library('form_validation', 'session');
        $this->load->model('User_model');
    }

	public function index()
	{
		$this->load->view('user/login');
	}

	// Register user
    public function register()
 	{
 		$this->load->library('form_validation');
 		$this->form_validation->set_rules('nama','Nama','trim|required');
 		$this->form_validation->set_rules('kodepos','KodePos','trim|required');
 		$this->form_validation->set_rules('email','email','trim|required');
 		$this->form_validation->set_rules('username','Username','trim|required');
 		$this->form_validation->set_rules('password','Password','trim|required');
 		if ($this->form_validation->run() == FALSE) {
 			$this->load->view('user/register');
 		} else {
 			$this->load->model('User_model');
 			$this->User_model->insert();
 			redirect('User','refresh');
 		}
 	}
    public function login()
 	{
 		$this->load->library('form_validation');
 		$this->form_validation->set_rules('username','Username','trim|required');
 		$this->form_validation->set_rules('password','Password','trim|required|callback_cekDb');
 		if ($this->form_validation->run() == FALSE) {
 			$this->load->view('user/login');
 		} else {
 			redirect('Blog','refresh');
 		}
 		
 	}

 	public function cekDb($password)
 	{
 		$this->load->model('User_model');
 		$username = $this->input->post('username');
 		$result = $this->User_model->login($username,$password);
 		if($result){
 			$sess_array = array();
 			if (is_array($result) || is_object($result)){
 			foreach ($result as $row) {
 				$sess_array = array(
 					'user_id'=>$row->user_id,
 					'username'=> $row->username
 				);
 				$this->session->set_userdata('logged_in',$sess_array);
 			}
 		}
 			return true;
 		}else{
 			$this->form_validation->set_message('cekDb',"Login Gagal");
 			return false;
 		}
 	}

         public function logout()
 	{
 		$this->session->unset_userdata('logged_in');
 		$this->session->sess_destroy();
 		redirect('Biodata','refresh');
 	}



}