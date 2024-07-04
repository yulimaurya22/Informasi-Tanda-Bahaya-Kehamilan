<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController {

    public $api;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_api', 'api');
    }

    public function ringan_get(){
        $getData = $this->api->tampil_ringan();
        if($getData->num_rows() != 0) {
            $data = [
                'status' => 'berhasil',
                'result' => $getData->result_array(),
                'message' => 'data berhasil didapatkan'
            ];
            $this->response($data, 200);
        } else {
            $this->response([
                'status' => 'Failed',
                'result' => [],
                'message' => 'gagal memperoleh data'
            ], 404);
        }
    }

    public function berat_get(){
        $getData = $this->api->tampil_berat();
        if($getData->num_rows() != 0) {
            $data = [
                'status' => 'berhasil',
                'result' => $getData->result_array(),
                'message' => 'data berhasil didapatkan'
            ];
            $this->response($data, 200);
        } else {
            $this->response([
                'status' => 'Failed',
                'result' => [],
                'message' => 'gagal memperoleh data'
            ], 404);
        }
    }
  
} 