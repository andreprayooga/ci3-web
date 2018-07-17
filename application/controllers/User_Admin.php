<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->helper('form','text');
		//Do your magic here
	}

	public function index(){
		$data['records'] = $this->Admin_model->getAll();
		$this->load->view('admin/user');
	}

	public function byId($id){
    $data['records'] = $this->Admin_model->getOne($id);
    $this->load->view('admin/user',$data);
  }

  public function insert(){
  	$data['records'] = $this->Admin_model->getAll(); 
  }
  }
?>