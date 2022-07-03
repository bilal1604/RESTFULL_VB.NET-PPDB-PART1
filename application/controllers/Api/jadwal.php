<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require './application/libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class jadwal extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('jadwal_model');
    }

    function index_get() //GET DATA ALL
    {
        
        $query = $this->jadwal_model->GET("jadwal")->result();
        echo json_encode($query);
    
    }

    function index_put() // UPDATE
    {
        $id = $this->put('id');
        $id = urldecode($this->uri->segment(3));


        $data = [
            'id' => urldecode($this->uri->segment(3)),
            'mulai_pendaftaran' => urldecode($this->uri->segment(4)),
            'akhir_pendaftaran' => urldecode($this->uri->segment(5)),
            'mulai_verifikasi' => urldecode($this->uri->segment(6)),
            'pengumuman_hasil_seleksi' => urldecode($this->uri->segment(7))
       
        ];
       
        if($this->jadwal_model->PUT($id, $data) > 0)
        {
            $this->response([

                'Success Update' => 200,

            ],RestController::HTTP_OK);
        }else{
            $this->response([

                'Failed' => 404,

            ],RestController::HTTP_BAD_REQUEST);
        }
       
    }





   
}

?>