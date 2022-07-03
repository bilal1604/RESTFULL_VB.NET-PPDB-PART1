<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require './application/libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class status_verifikasi extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('status_verifikasi_model');
    }

    function index_get() //GET DATA ALL
    {
        $status_verifikasi = $this->get('status_verifikasi');
        $status_verifikasi = urldecode($this->uri->segment(3));
     
        if($status_verifikasi === null){
           $this->response($this->status_verifikasi_model->GET(),RestController::HTTP_OK);        
        }else{
           $this->response($this->status_verifikasi_model->GET($status_verifikasi),RestController::HTTP_OK);        
        }

    }



    function index_put() // UPDATE VERIFIKASI DATA
    {
        $nisn = $this->put('nisn');
        $nisn = urldecode($this->uri->segment(3));


        $data = [
            'nisn' => urldecode($this->uri->segment(3)),
            'status_verifikasi' => urldecode($this->uri->segment(4))
            
        ];
       
        if($this->status_verifikasi_model->PUT($nisn, $data) > 0)
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