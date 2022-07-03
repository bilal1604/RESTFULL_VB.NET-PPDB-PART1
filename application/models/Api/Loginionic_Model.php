<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loginionic_Model extends CI_Model{

  public function checkLogin($table, $field1, $field2){
		$this->db->select("*");
		$this->db->from($table);
		$this->db->where("username", $field1);
		$this->db->where("password", $field2);
		$query = $this->db->get();
		if ($query->num_rows() == 0) {
			return null;
		} else {
			return $query->result();
		}
	}

}