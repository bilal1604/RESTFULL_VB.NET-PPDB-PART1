<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akses_model extends CI_Model
{
    public function GET($user)
    {
        $this->db->select("user.username, user.password, user.status, user_group.nama  AS role");
        $this->db->from($user);
        $this->db->join("user_group","user_group.id_group = user.id_group");

        $query = $this->db->get();
        return $query;

    } 

    public function POST($data)
    {
        $this->db->insert('user',$data);
        return $this->db->affected_rows();
    } 

    public function DELETE($username)
    {
        $this->db->delete('user',['username'=>$username]);
        return $this->db->affected_rows();
    }
    
    public function PUT($username, $data)
    {
        $this->db->where('username',$username);
        $this->db->update('user', $data);
        return $this->db->affected_rows();
    }
}

?>