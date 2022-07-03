<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapendaftaran_model extends CI_Model
{
    public function GET()
    {
        return $this->db->get('siswa')->result(); // GET ALL
        
    }

}

?>