<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('data_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['title'] = "Home";
        $data['mahasiswa'] = $this->data_model->getAllData();


        $this->load->view('home', $data);
    }

    public function createData(){
        $data['title'] = "Tambah Mahasiswa";

        $this->form_validation->set_rules('name', 'Nama', 'required');

       if($this->form_validation->run() == FALSE){
            $this->load->view('tambah', $data);
       }else {
            $this->data_model->dataCreate();
            redirect('home');
       }
    }

    public function viewDataById($id){
        $data['mahasiswa'] = $this->data_model->getDataById($id);
        $data['title'] = "Lihat Data";

        $this->load->view('dataMahasiswa', $data);
    }

    public function edit($id){
        $data['mahasiswa'] = $this->data_model->getDataById($id);
        $data['title'] = "Edit Mahasiswa";

        $this->form_validation->set_rules('name', 'Nama', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('edit', $data);
        }else {
            $this->data_model->dataEdit();
            redirect('home');
        }
    }

    public function delete($id){
        $this->data_model->dataDelete($id);

        redirect('home');
    }
}