<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class verifikasi_model extends CI_Model
{
    public function GET($status_seleksi = null)
    {
        
        if ($status_seleksi === null){
        
            return $this->db->get('siswa')->result(); // GET ALL

        }else{
            return $this->db->get_where('siswa',['status_seleksi' => $status_seleksi])->result(); // GET BY ID
        }
    }

    public function POST($data)
    {
        $this->db->insert('siswa',$data);
        return $this->db->affected_rows();
    } 

    public function DELETE($nisn)
    {
        $this->db->delete('siswa',['nisn'=>$nisn]);
        return $this->db->affected_rows();
    }
    
    public function PUT($nisn, $data)
    {
        $this->db->where('nisn',$nisn);
        $this->db->update('siswa', $data);
        return $this->db->affected_rows();
    }
}

?>