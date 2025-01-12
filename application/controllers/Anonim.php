<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Anonim extends CI_Controller {
    public function __construct(){
        parent::__construct();

        
    }

    public function index(){

        $this->load->view('templates/header_anonim');
        $this->load->view('index');
        $this->load->view('templates/footer_anonim');
    }
}