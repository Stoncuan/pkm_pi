<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin extends CI_Controller{
    public function __construct(){
        parent::__construct();

        //$this->load->model('Admin_Model');
        is_logged_in();
    }

    public function index(){
        $data['title'] = "Dashboar User Admin";

        $this->load->view("admin/home",$data);
    }
}