<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

public function create() 
    {
        // Judul Halaman
        $data['page_title'] = 'Buat Kategori Baru';

        // Kita butuh helper dan library berikut
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules(
            'cat_name',
            'Nama Kategori',
            'required|is_unique[categories.cat_name]',
            array(
                'required' => 'Isi %s donk, males amat.',
                'is_unique' => 'Judul <strong>' . $this->input->post('cat_name') . '</strong> sudah ada bosque.'
            )
        );

        if($this->form_validation->run() === FALSE){
            $this->load->view('category/cat_create', $data);
        } else {
            $this->Category_model->create_category();
            redirect('category');
        }
    }

    public function index()
    {
        $data['cat_read'] = $this->Category_model->read_category();
        $this->load->view('category/cat_read',$data);
    }
    public function update($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules(
            'cat_name',
            'Nama Kategori',
            'required|is_unique[categories.cat_name]',
            array(
                'required' => 'Isi %s donk, males amat.',
                'is_unique' => 'Judul <strong>' . $this->input->post('cat_name') . '</strong> sudah ada bosque.'
            )
        );
        $data['cat_update'] = $this->Category_model->read_category($id)[0];
        if($this->form_validation->run() === FALSE){
    
            $this->load->view('category/cat_update', $data);
        
        } 
        else {
            $this->Category_model->update_category($id);
            redirect('category');
        }
    }
    public function delete($id)
    {
        $this->Category_model->delete_category($id);
        redirect('category');
    }
}
?>
