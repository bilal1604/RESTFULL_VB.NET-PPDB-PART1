<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('AuthModel');
	}

	public function index(){
		$this->load->view('v_login');
	}

	public function masuk(){
    	$data = $this->AuthModel->login($this->input->post('nisn'), $this->input->post('password'));
        if ($data->nisn != '') {
            $this->session->userdata['nisn'] = $data->nisn;
            $this->session->userdata['fullName'] = $data->nama;
            $this->session->userdata['username'] = $data->username;
            $this->session->userdata['password'] = $data->password;
            redirect(base_url() . 'dashboard');
        } else {
            $this->AuthModel->isNotLogin();
            $this->session->set_flashdata('error', '<div class="alert border-0 bg-danger" role="alert"">
            <h4 class="alert-heading">Gagal</h4>
            <div class="alert-body">Username dan Password tidak tersedia!</div>
        </div>');
            redirect(site_url('/login'));
        }
	}

	public function keluar()
	{
			$this->AuthModel->logout();
			redirect(site_url() . 'login');
	}
}
