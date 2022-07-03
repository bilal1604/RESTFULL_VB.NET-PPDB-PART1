<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HakAksesModel extends CI_Model{

  public function getData($user){
    $this->db->select("user.username, user.password, user.status, user_group.nama  AS role");
    $this->db->from($user);
    $this->db->join("user_group","user_group.id_group = user.id_group");

    $query = $this->db->get();
    return $query;
  }
  public function insertData($tabel, $data=array()){
    $this->db->insert($tabel,$data);
    return $this->db->affected_rows();
  }
  function UpdateData($tabel, $where, $where_value, $data=array())
  {
      $this->db->update($tabel, $data, [$where => $where_value]);
      return $this->db->affected_rows();
  }
  function DeleteData($tabel, $where, $where_value)
  {
        $this->db->where($where, $where_value)->delete($tabel);
        return $this->db->affected_rows();
  }
}