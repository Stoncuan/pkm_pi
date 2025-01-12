<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login_Model extends CI_Model {

    public function getUsername($username){
        return $this->db->get_where('users', ['username' => $username])->row_array();
    }
}