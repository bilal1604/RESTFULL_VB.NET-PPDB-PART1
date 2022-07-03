<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usergrup_model extends CI_Model
{
    public function GET($user_group)
    {
        $this->db->from($user_group);
        $query = $this->db->get();
        return $query;

    } 

    public function POST($data)
    {
        $this->db->insert('user_group',$data);
        return $this->db->affected_rows();
    } 

    public function DELETE($id_group)
    {
        $this->db->delete('user_group',['id_group'=>$id_group]);
        return $this->db->affected_rows();
    }
    
    public function PUT($id_grup, $data)
    {
        $this->db->where('id_group',$id_grup);
        $this->db->update('user_group', $data);
        return $this->db->affected_rows();
    }
}

?>