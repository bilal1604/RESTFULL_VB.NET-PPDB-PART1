<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
  public function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
		$data['profile'] = $this->UserModel->getUserId($this->session->userdata['nisn']);
    $this->load->vars($data);
	}
	public function index(){
    $data['title']="Form Nilai | PPDB ";
    $this->load->vars($data);

    $this->load->view('template/v_header');
		$this->load->view('v_nilai');
    $this->load->view('template/v_footer');
	}
	public function insertNilai(){
		$update = $this->UserModel->insertDataNilai($this->input->post('nilai1'), $this->input->post('nilai2'), $this->input->post('nilai3'), $this->input->post('nilai4'), $this->input->post('nilai5'),$this->input->post('rata_rata'),$this->input->post('status_nilai'),$this->input->post('nisn'));
		if ($update == TRUE) {
			redirect(site_url() . 'nilai');
		}
	}
}
