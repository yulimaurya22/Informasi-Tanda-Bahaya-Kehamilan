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

    public function lainnya_get(){
        $getData = $this->api->tampil_lainnya();
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

    public function chat_get(){
        $getData = $this->api->tampil_chat();
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

    public function riwayat_get(){
        $getData = $this->api->tampil_riwayat();
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

    public function jadwal_get(){
        $getData = $this->api->tampil_jadwal();
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
    
      public function profil_get(){
        $getData = $this->api->tampil_profil();
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

    public function akun_get(){
        $getData = $this->api->tampil_akun();
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
    
     public function akun_put($id){
      $data = array(
          'username' => $this->put('username'),
          'password' => $this->put('password'),
          'namabunda' => $this->put('namabunda')
          );
          
         $this->db->where('id', $id);
        $update = $this->db->update('tbl_akun', $data);

        if ($update) {
            $this->response(array('status' => 'success'), 200);
        } else {
            $this->response(array('status' => 'fail'), 400);
        }
    }
    
     public function notif_delete($id){
         $this->db->where('id', $id);
        $delete = $this->db->delete('tbl_notif');

        if ($delete) {
            $this->response(array('status' => 'success'), 200);
        } else {
            $this->response(array('status' => 'fail'), 400);
        }
    }
     
    
    
    public function notif_get(){
         $getData = $this->api->tampil_notif();
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
    
    function sendNotification() {
       
         $title = "Judul Notifikasi";
        $message = "Pesan Notifikasi";
        $app_id = "b90bc49d-b8db-49ef-a2e6-642265ad4b19"; // Ganti dengan App ID OneSignal
        $api_key = "OGM0MTBmNTAtN2NkNy00ZjIwLTk0ZDMtZTk2ZWM5N2Q0YmQ2"; // Ganti dengan API Key OneSignal

        // Header untuk API request
        $headers = array(
            'Content-Type: application/json; charset=utf-8',
            'Authorization: Basic ' . $api_key
        );

        // Payload notifikasi
        $payload = array(
            'app_id' => $app_id,
            'included_segments' => array('All'), // Bisa diubah ke segment tertentu
            'headings' => array("en" => $title),
            'contents' => array("en" => $message)
        );

        // Konfigurasi cURL
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://onesignal.com/api/v1/notifications",
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($payload)
        ));

        // Eksekusi cURL dan tangkap responnya
        $response = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        // Menampilkan respon
        if ($httpcode == 200) {
            echo "Notifikasi berhasil dikirim: " . $response;
        } else {
            echo "Gagal mengirim notifikasi: " . $response;
        }
    }
        
} 