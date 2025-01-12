<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('data_model');
        $this->load->library('form_validation');

       is_logged_in(); 
    }

    public function index(){
        $data['title'] = "Home";
       
       

        $this->load->view('templates/header_user');
        $this->load->view('user/home', $data);
        $this->load->view('templates/footer_user');
    }

    // public function createData(){
    //     $data['title'] = "Tambah Mahasiswa";

    //     $this->form_validation->set_rules('name', 'Nama', 'required');

    //    if($this->form_validation->run() == FALSE){
    //         $this->load->view('tambah', $data);
    //    }else {
    //         $this->data_model->dataCreate();
    //         $this->session->set_flashdata('tambah','Data Berhasil Ditambahkan');
    //         redirect('home');
    //    }
    // }

    // public function viewDataById($id){
    //     $data['mahasiswa'] = $this->data_model->getDataById($id);
    //     $data['title'] = "Lihat Data";

    //     $this->load->view('dataMahasiswa', $data);
    // }

    // public function edit($id){
    //     $data['mahasiswa'] = $this->data_model->getDataById($id);
    //     $data['title'] = "Edit Mahasiswa";

    //     $this->form_validation->set_rules('name', 'Nama', 'required');

    //     if($this->form_validation->run() == FALSE){
    //         $this->load->view('edit', $data);
    //     }else {
    //         $this->data_model->dataEdit();
    //         $this->session->set_flashdata('edit','Data Berhasil Di Edit');
    //         redirect('home');
    //     }
    // }

    // public function delete($id){
    //     $this->data_model->dataDelete($id);

    //     $this->session->set_flashdata('hapus','Data Berhasil Dihapus');
    //     redirect('home');
    // }
}