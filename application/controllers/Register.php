<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('AuthModel');
	}
	
	public function index(){
		$this->load->view('v_register');
	}

	public function daftarSiswa(){
		$nisn = $this->input->post('nisn');
		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = [
				'nisn' => $nisn,
				'fullname' => $fullname,
				'username' => $username,
				'password' => $password
		];
		$input = $this->AuthModel->registrasiSiswa('siswa', $data);

		if($input){
			$this->session->set_flashdata(
			'success', '   
			<div class="alert alert-success" role="alert">
			<h4 class="alert-heading">Sukses</h4>
			<div class="alert-body">Selamat! Akun berhasil dibuat. Silahkan Login</div>
			</div>');
			redirect(base_url() . 'login');
		} 
	}
}
