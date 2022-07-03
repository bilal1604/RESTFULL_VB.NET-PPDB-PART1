<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HakAkses extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('Api/HakAksesModel');
  }
  public function index(){
    $status = "test";
    echo $status;
  }
  
  public function getAllData(){
    $query = $this->HakAksesModel->getData("user")->result();
    echo json_encode($query);
  }
  public function postData(){
    $data = [
            'username' => urldecode($this->uri->segment(4)),
            'password' => urldecode($this->uri->segment(5)),
            'status' => urldecode($this->uri->segment(6)),
            'id_group' => urldecode($this->uri->segment(7)),
        ];
        if( $data['username'] == '' || $data['password'] == '' || $data['status'] == '' || $data['id_group']==''){
          echo "Gagal input, ada data yang kosong";
          return false;
        }else{
          $this->HakAksesModel->insertData('user', $data);
          echo "Behasil input";
        }
  }
  public function deleteData()
  {
      $uniq=urldecode($this->uri->segment(3));
      $delete=$this->HakAksesModel->DeleteData('user','id',$uniq);
      if($delete){
        echo "Berhasil Dihapus";
      }else{
        echo "Gagal !";
      }
  }
  
}