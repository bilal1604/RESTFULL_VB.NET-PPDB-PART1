<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PpdbPage extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('date');
		$this->load->model('UserModel');
    $data['jadwal'] = $this->UserModel->getPenutupan();
    $this->load->vars($data);
	}
	public function index(){
		$this->load->view('v_landingppdb');
	}
}