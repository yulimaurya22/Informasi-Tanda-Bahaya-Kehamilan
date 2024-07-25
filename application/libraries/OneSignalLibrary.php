<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OneSignalLibrary {
    
     private $app_id;
    private $api_key;

    public function __construct() {
        
        $this->app_id = 'b90bc49d-b8db-49ef-a2e6-642265ad4b19';
        $this->api_key = 'OGM0MTBmNTAtN2NkNy00ZjIwLTk0ZDMtZTk2ZWM5N2Q0YmQ2';
    }

   
    public function sendNotification($title, $message) 
    {  
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

       
    }
}
?>