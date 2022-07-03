<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require './application/libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Datapendaftaran extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Datapendaftaran_model');
    }

    function index_get() //GET DATA ALL
    {
        $this->response($this->Datapendaftaran_model->GET(),RestController::HTTP_OK);        
        
    }

}

?>