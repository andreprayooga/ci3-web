<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_user extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->model('Admin_model');
		$this->load->helper('form', 'text');
	}

	public function index(){
		$data['user'] = $this->Admin_model->getAll();
        $this->load->view('admin/admin',$data);
	}

	public function user(){
		$data['user'] = $this->Admin_model->getAll();
		$this->load->view('admin/user',$data);
	}
}
?>
