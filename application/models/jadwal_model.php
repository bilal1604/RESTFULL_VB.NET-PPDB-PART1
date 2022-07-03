<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jadwal_model extends CI_Model
{
    public function GET($jadwal)
    {
        $this->db->from($jadwal);
        $query = $this->db->get();
        return $query;

    } 

    
    public function PUT($id, $data)
    {
        $this->db->where('id',$id);
        $this->db->update('jadwal', $data);
        return $this->db->affected_rows();
    }
}

?>