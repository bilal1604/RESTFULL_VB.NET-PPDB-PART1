<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataHasilSeleksi_model extends CI_Model
{
    public function GET($siswa)
    {
        $this->db->select("siswa.nisn,siswa.fullname,siswa.asal_sekolah,siswa.jurusan,siswa.rata_rata,status.status_hasil  AS role");
        $this->db->from($siswa);
        $this->db->join("status","status.status_seleksi = siswa.status_seleksi");

        $query = $this->db->get();
        return $query;

    } 

}

?>