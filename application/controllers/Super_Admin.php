<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Super_Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();

       // $this->load->model('Super_Admin_Model');
       is_logged_in();
    }

    public function index(){
        $data['title'] = "Dashboar Admin";

        $this->load->view('super_admin/home', $data);
    }
}