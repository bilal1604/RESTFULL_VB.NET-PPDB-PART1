<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
defined('BASEPATH') OR exit('No direct script access allowed');

require './application/libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class DataHasilSeleksi extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('DataHasilSeleksi_model');
    }

    function index_get() //GET DATA ALL
    {
        $query = $this->DataHasilSeleksi_model->GET("siswa")->result();
        echo json_encode($query);
    }

}

?>