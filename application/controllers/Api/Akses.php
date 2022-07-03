<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require './application/libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Akses extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Akses_model');
    }

    function index_get() //GET DATA ALL
    {
        
        $query = $this->Akses_model->GET("user")->result();
        echo json_encode($query);
    
    }

    function index_post()  //CREATE DATA
    {
        $data = [ 
            'username' => urldecode($this->uri->segment(3)),
            'password' => urldecode($this->uri->segment(4)),
            'status' => urldecode($this->uri->segment(5)),
            'id_group' => urldecode($this->uri->segment(6))
        ];
        if($this->Akses_model->POST($data) > 0)
        {
            $this->response([

                'Success Create' => 200,

            ],RestController::HTTP_OK);
        }else{
            $this->response([

                'Failed' => 404,

            ],RestController::HTTP_BAD_REQUEST);
        }
        

    }


    function index_put() // UPDATE
    {
        $username = $this->put('username');
        $username = urldecode($this->uri->segment(3));


        $data = [
            'username' => urldecode($this->uri->segment(3)),
            'password' => urldecode($this->uri->segment(4)),
            'status' => urldecode($this->uri->segment(5)),
            'id_group' => urldecode($this->uri->segment(6))

        ];
       
        if($this->Akses_model->PUT($username, $data) > 0)
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





    function index_delete()
    {
        $username = $this->delete('username');
        $username = urldecode($this->uri->segment(3));

        if($this->Akses_model->DELETE($username) > 0)
        {
            $this->response([

                'Success Delete' => 200,

            ],RestController::HTTP_OK);
        }else{
            $this->response([

                'NOT FOUND' => 404,

            ],RestController::HTTP_BAD_REQUEST);
        }
        
    }





}

?>