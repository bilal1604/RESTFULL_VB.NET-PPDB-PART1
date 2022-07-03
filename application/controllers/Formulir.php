<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulir extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('Upload');
		$this->load->model('UserModel');
		$data['profile'] = $this->UserModel->getUserId($this->session->userdata['nisn']);
    $this->load->vars($data);
	}
	public function index(){
    $data['title'] = "Formulir | PPDB";
    $this->load->vars($data);

		$this->load->view('template/v_header');
		$this->load->view('v_formulir');
		$this->load->view('template/v_footer');
	}
	
	public function insertFormulirSiswa(){
		$update = $this->UserModel->insertDataSiswa($this->input->post('fullname'), $this->input->post('asal_sekolah'), $this->input->post('tempat_lahir'), $this->input->post('tgl_lahir') ,$this->input->post('alamat'), $this->input->post('gender'), $this->input->post('telepon'), $this->input->post('jurusan'), $this->input->post('nisn'));
		if ($update == TRUE) {
			$this->session->userdata['fullName'] = $this->input->post('fullname');
			redirect(site_url() . 'formulir');
		}
	}
	public function insertFormulirParent(){
		$update = $this->UserModel->insertDataParent($this->input->post('nama_ayah'), $this->input->post('nama_ibu'), $this->input->post('pdk_ayah'), $this->input->post('pdk_ibu'), $this->input->post('pkr_ayah'), $this->input->post('pkr_ibu'),$this->input->post('status_formulir'), $this->input->post('nisn'));
		if ($update == TRUE) {
			$this->session->userdata['nama_ayah'] = $this->input->post('nama_ayah');
			redirect(site_url() . 'formulir');
		}
	}

	public function savePasFoto(){
		$upload = $this->UserModel->uploadPasFoto();
		
		$update = $this->UserModel->insertFile($upload,$this->input->post('pasfoto'),$this->input->post('nisn'));
		redirect(site_url() . 'formulir');
		if ($update == TRUE) {
			$this->session->userdata['pasfoto'] = $this->input->post('pasfoto');
			redirect(site_url() . 'formulir');
		}
	}
	public function saveKartuKeluarga(){
		$upload = $this->UserModel->uploadKK();
		
		$update = $this->UserModel->insertFileKK($upload,$this->input->post('kakel'),$this->input->post('nisn'));
		redirect(site_url() . 'formulir');
		if ($update == TRUE) {
			$this->session->userdata['kakel'] = $this->input->post('kakel');
			redirect(site_url() . 'formulir');
		}
	}
	public function saveAkte(){
		$upload = $this->UserModel->uploadKK();
		
		$update = $this->UserModel->insertFileAkte($upload,$this->input->post('akte'),$this->input->post('nisn'));
		redirect(site_url() . 'formulir');
		if ($update == TRUE) {
			$this->session->userdata['akte'] = $this->input->post('akte');
			redirect(site_url() . 'formulir');
		}
	}
}
