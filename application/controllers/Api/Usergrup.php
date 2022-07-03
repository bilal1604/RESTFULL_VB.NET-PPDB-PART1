<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require './application/libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Usergrup extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Usergrup_model');
    }

    function index_get() //GET DATA ALL
    {
        
        $query = $this->Usergrup_model->GET("user_group")->result();
        echo json_encode($query);
    
    }

    function index_post()  //CREATE DATA
    {
        $data = [ 
            'id_group' => urldecode($this->uri->segment(3)),
            'nama' => urldecode($this->uri->segment(4))
        
        ];
        if($this->Usergrup_model->POST($data) > 0)
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
        $id_grup = $this->put('id_group');
        $id_grup = urldecode($this->uri->segment(3));


        $data = [
            'id_group' => urldecode($this->uri->segment(3)),
            'nama' => urldecode($this->uri->segment(4))
        ];
       
        if($this->Usergrup_model->PUT($id_grup, $data) > 0)
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
        $id_group = $this->delete('id_group');
        $id_group = urldecode($this->uri->segment(3));

        if($this->Usergrup_model->DELETE($id_group) > 0)
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