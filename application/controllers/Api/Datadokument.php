<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require './application/libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Datadokument extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Datadokument_model');
    }

    function index_get() //GET DATA ALL
    {
        $nisn = $this->get('nisn');
        $nisn = urldecode($this->uri->segment(3));
     
        if($nisn === null){
           $this->response($this->Datadokument_model->GET(),RestController::HTTP_OK);        
        }else{
           $this->response($this->Datadokument_model->GET($nisn),RestController::HTTP_OK);        
        }

    }

}

?>