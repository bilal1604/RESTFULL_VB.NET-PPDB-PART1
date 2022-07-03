<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require './application/libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Verifikasi extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('verifikasi_model');
    }

    function index_get() //GET DATA ALL
    {
        $status_seleksi = $this->get('status_seleksi');
        $status_seleksi = urldecode($this->uri->segment(3));
     
        if($status_seleksi === null){
           $this->response($this->verifikasi_model->GET(),RestController::HTTP_OK);        
        }else{
           $this->response($this->verifikasi_model->GET($status_seleksi),RestController::HTTP_OK);        
        }

    }



    function index_put() // UPDATE VERIFIKASI DATA
    {
        $nisn = $this->put('nisn');
        $nisn = urldecode($this->uri->segment(3));


        $data = [
            'nisn' => urldecode($this->uri->segment(3)),
            'status_seleksi' => urldecode($this->uri->segment(4))
            
        ];
       
        if($this->verifikasi_model->PUT($nisn, $data) > 0)
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