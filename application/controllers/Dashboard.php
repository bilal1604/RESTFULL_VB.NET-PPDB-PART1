<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  public function __construct(){
		parent::__construct();
		$this->load->model('AuthModel');
		$this->load->model('UserModel');
		$this->AuthModel->cekAuth();
		$data['profile'] = $this->UserModel->getUserId($this->session->userdata['nisn']);
    $data['jadwal'] = $this->UserModel->getPenutupan();
    $this->load->vars($data);
	}
	public function index(){
    $data['title'] = "Dashboard | PPDB";
    $this->load->vars($data);
		
    $this->load->view('template/v_header');
		$this->load->view('v_dashboard');
    $this->load->view('template/v_footer');
	}
}
