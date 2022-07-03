<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

class Loginionic extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('Api/Loginionic_Model');
  }
  public function index(){
    $status = "test";
    echo $status;
  }
  public function postLogin(){
    $username = urldecode($this->uri->segment(4));
    $password =urldecode($this->uri->segment(5));

    $query = $this->Loginionic_Model->checkLogin('user', $username, $password);
    if ($query && $username = 'kepsek'){
      $status = [
        'status' => "Berhasil Login"
      ];
      echo json_encode($status);
    }else{
        $status = [
            'status' => "Username dan password tidak tersedia !"
        ];
        echo json_encode($status);
    }
  }
}