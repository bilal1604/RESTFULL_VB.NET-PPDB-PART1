<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
defined('BASEPATH') OR exit('No direct script access allowed');

require './application/libraries/RestController.php';

use chriskacerguis\RestServer\RestController;
use LDAP\Result;

class order_by_rata_rata extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('order_by_rata_rata_model');
    }

    function index_get() //GET DATA ALL
    {
       $query = $this->order_by_rata_rata_model->GET();
       
        foreach ($query->result() as $row)
        {
            $data=array( $row->nilai5,$row->rata_rata);
            //  $row->nisn;
            //  $row->fullname;
            //  $row->nilai1;
            //  $row->nilai2;
            //  $row->nilai3;
            //  $row->nilai4;
           
        } return json_encode($data);
        
        
    }
}


?>