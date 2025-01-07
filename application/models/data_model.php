<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Data_model extends CI_Model {

    public function getDataSession(){
        return $this->db->get_where('mahasiswa', ['id' => $this->session->userdata('id')])->row_array();
    }

    public function getAllData(){
        return $this->db->get('mahasiswa')->result_array();
    }

    public function getDataById($id){
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    public function dataCreate(){
        $data = [
            "name" => $this->input->post('name', true)
        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function dataEdit(){
        $id = $this->input->post('id', true);
        $data = [
            "name" => $this->input->post('name', true)
        ];

        $this->db->where('id', $id);
        $this->db->update('mahasiswa', $data);

    }

    public function dataDelete($id){
        $this->db->delete('mahasiswa', ['id' => $id]);
    }

    public function countAllData(){
        return $this->db->get('mahasiswa')->num_rows();
    }
}