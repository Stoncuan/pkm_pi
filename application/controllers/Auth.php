<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('Login_Model');
    }

    public function index()
    {
        $data['title'] = "Login Page";

        if ($this->session->userdata('username') && $this->session->userdata('role_id') == 1) {
            redirect('Super_Admin');
        }
        if ($this->session->userdata('username') && $this->session->userdata('role_id' == 2)) {
            redirect('Admin');
        }
        if ($this->session->userdata('username') && $this->session->userdata('role_id' == 3)) {
            redirect('Home');
        }

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login', $data);
        } else {
            $this->_login();
        }
    }

    public function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->Login_Model->getUsername($username);

        if ($user) {
            if ($password == $user['password']) {
                $data = [
                    'username'=> $user['username'],
                    'role_id'=> $user['role_id']
                ];
                $this->session->set_userdata($data);

                if($user['role_id'] == 1){
                    redirect('Super_Admin');
                }else if($user['role_id'] == 2){
                    redirect('Admin');
                }else {
                    redirect('User');
                }

            } else {
                $this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Password</strong> Anda Salah
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('flash', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Username</strong> Anda Belum Terdaftar, Silahkan Registrasi Terlebih Dahulu
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth');
        }
    }

    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Anda</strong> Sudah Logout
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth');
    }

    public function blocked(){
        $data['title'] = "Aksess Anda Di Tolak";
        
        $this->load->view('auth/blocked', $data);
    }

}