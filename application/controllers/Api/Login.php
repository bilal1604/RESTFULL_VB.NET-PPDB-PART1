<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");


class Login extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('Api/LoginModel');
  }
  public function index(){
    $status = "test";
    echo $status;
  }
  public function postLogin(){
    $username = urldecode($this->uri->segment(4));
    $password =urldecode($this->uri->segment(5));

    $query = $this->LoginModel->checkLogin('user', $username, $password);
    if ($query && $username = 'kepsek'){
      echo "BERHASIL LOGIN";
    }else{
       echo "USERNAME ATAU PASSWORD ANDA SALAH !";
    }
  }
}