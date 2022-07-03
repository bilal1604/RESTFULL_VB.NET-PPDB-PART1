<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HasilSeleksi extends CI_Controller {
  public function __construct(){
		parent::__construct();
		$this->load->helper('date');
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('UserModel');
		$data['profile'] = $this->UserModel->getUserId($this->session->userdata['nisn']);
    $data['jadwal'] = $this->UserModel->getPenutupan();
    $this->load->vars($data);
	}
	public function index(){
    $data['title'] = "Hasil Seleksi | PPDB";
		$data['siswa'] = $this->UserModel->siswaList();
    $this->load->vars($data);
		
    $this->load->view('template/v_header');
		$this->load->view('informasi/v_hasilseleksi');
    $this->load->view('template/v_footer');
	}

	public function searchData(){
		$keyword = $this->input->post('keyword');
		$data['title'] = 'Hasil Seleksi | PPDB';
		$data['profile'] = $this->UserModel->getUserId($this->session->userdata['nisn']);
		$data['siswa']=$this->UserModel->getKeywordSiswa($keyword);
		$this->load->vars($data);

		$this->load->view('template/v_header',$data);
		$this->load->view('informasi/v_hasilseleksi',$data);
		$this->load->view('template/v_footer');
	}
}
