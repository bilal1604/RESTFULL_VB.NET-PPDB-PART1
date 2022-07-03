<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order_by_rata_rata_model extends CI_Model
{
    public function GET()
    {
        $this->db->order_by('rata_rata','desc');

        return $this->db->get('siswa');

    } 

}

?>