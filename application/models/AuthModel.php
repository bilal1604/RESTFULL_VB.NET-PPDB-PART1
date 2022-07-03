<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model{

  public function registrasiSiswa($tabel, $data=[]){
    $this->db->insert($tabel,$data);
    return $this->db->affected_rows();
  }
  public function login($nisn = '', $password = ''){
    $data = 'SELECT * FROM siswa WHERE nisn="' . $nisn . '" AND password="' . $password . '"';
    $result = $this->db->query($data)->row();
    return $result;
  }
  public function isNotLogin(){
    return $this->session->userdata('nisn' && 'password') === null;
  }
  public function cekAuth(){
    $session = $this->session->userdata('nisn');
    if ($session == NULL) {
      redirect(site_url('login'));
    } else{
    }
  }
  public function logout(){
    $CI = &get_instance();
    $CI->load->library('session');
    $CI->session->sess_destroy();
  }
}