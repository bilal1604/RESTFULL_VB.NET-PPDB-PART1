<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model{
  
  public function getUserId($nisn = ''){
    $get = 'SELECT * FROM siswa WHERE nisn="' . $nisn . '"';
    $res = $this->db->query($get)->row();
    return $res;
  }
  public function getKeywordSiswa($keyword){
    $this->db->select('*');
    $this->db->from('siswa');
    $this->db->like('nisn',$keyword);
    return $this->db->get()->result();
  }
  public function siswaList(){
    $query = $this->db->query("SELECT fullname, asal_sekolah, rata_rata , status_seleksi  FROM siswa ORDER BY rata_rata DESC LIMIT 4");
    return $query->result();
  }
  public function getPenutupan(){
    $get = 'SELECT * FROM jadwal';
    $res = $this->db->query($get)->row();
    return $res;
  }
  public function insertDataSiswa($fullname='', $asal_sekolah='', $tempat_lahir='',$tgl_lahir='', $alamat='', $gender='', $telepon='', $jurusan='', $nisn=''){
    $update = "UPDATE siswa SET fullname='$fullname',asal_sekolah='$asal_sekolah', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat',gender='$gender', telepon='$telepon',jurusan='$jurusan' WHERE nisn = '$nisn'";
    $result = $this->db->query($update);
    return $result;
  }
  
  public function insertDataParent($nama_ayah='', $nama_ibu='', $pdk_ayah='', $pdk_ibu='', $pkr_ayah='', $pkr_ibu='',$status_formulir='', $nisn=''){
    $updates = "UPDATE siswa SET nama_ayah='$nama_ayah',nama_ibu='$nama_ibu', pdk_ayah='$pdk_ayah',pdk_ibu='$pdk_ibu', pkr_ayah='$pkr_ayah',pkr_ibu='$pkr_ibu', status_formulir='$status_formulir' WHERE nisn = '$nisn'";
    $result = $this->db->query($updates);
    return $result;
  }
  public function insertDataNilai($nilai1='', $nilai2='', $nilai3='', $nilai4='', $nilai5='',$rata_rata='', $status_nilai='',$nisn=''){
    $updateNilai = "UPDATE siswa SET nilai1='$nilai1',nilai2='$nilai2', nilai3='$nilai3',nilai4='$nilai4', nilai5='$nilai5',rata_rata='$rata_rata',status_nilai='$status_nilai' WHERE nisn = '$nisn'";
    $result = $this->db->query($updateNilai);
    return $result;
  }

  public function insertFile($upload ,$pasfoto='',$nisn=''){
    $data = array(
      'pasfoto' => $upload['file']['file_name']
    );
    $this->db->set('pasfoto');
    $this->db->where('nisn', $nisn);
    $this->db->update('siswa',$data);
  }
  public function insertFileKK($upload ,$pasfoto='',$nisn=''){
    $data = array(
      'kakel' => $upload['file']['file_name']
    );
    $this->db->set('kakel');
    $this->db->where('nisn', $nisn);
    $this->db->update('siswa',$data);
  }
  public function insertFileAkte($upload ,$pasfoto='',$nisn=''){
    $data = array(
      'akte' => $upload['file']['file_name']
    );
    $this->db->set('akte');
    $this->db->where('nisn', $nisn);
    $this->db->update('siswa',$data);
  }

  public function savePasFoto($upload){
    $data = array(
      'pasfoto' => $upload['file']['file_name']
    );
    $res = $this->db->query("SELECT nisn FROM siswa")->row();
    if (!$res) {
      $this->db->insert('siswa', $data);
    } else {
      $this->db->where('nisn', $res->id);
      $this->db->update('siswa', $data);
    }
  }

  public function uploadPasFoto(){
    $config['upload_path']          = './assets/upload/';
    $config['allowed_types']        = 'jpeg|jpg';
    $config['max_size']             = 200;
    $this->upload->initialize($config);

      if ($this->upload->do_upload('pasfoto')) {
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
      } else {
          $return = array('result' => 'failed', 'file' => "", "error" => $this->upload->display_errors());
          return $return;
      }
  }
  public function uploadKK(){
    $config['upload_path']          = './assets/upload/';
    $config['allowed_types']        = 'pdf';
    $config['max_size']             = 200;
    $this->upload->initialize($config);

      if ($this->upload->do_upload('kakel') || $this->upload->do_upload('akte') ) {
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
      } else {
          $return = array('result' => 'failed', 'file' => "", "error" => $this->upload->display_errors());
          return $return;
      }
  }
}