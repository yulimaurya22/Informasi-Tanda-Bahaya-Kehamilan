<?php
class JadwalPeriksa extends CI_Controller
{
   function __construct()
   {
       parent::__construct();
      $this->load->model('Jadwal_model');  
      $this->load->model('Profil_model');  
      $this->load->library('OneSignalLibrary');
      if(empty($this->session->userdata('username'))) {
         redirect('Login');
             
       }         
        
   }

   function index()
   {
      $data['title'] = 'Jadwal Periksa';
      $data['jadwalPeriksa'] = $this->Jadwal_model->get_data('tbl_jadwal')->result();
      $data['profil'] = $this->Profil_model->get_data('tbl_profil')->result();

     
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('jadwalPeriksa',$data);
    $this->load->view('template/footer');} 

    function editData()   {   
      $this->Jadwal_model->edit_data($this->input->post());
       $this->Jadwal_model->edit_data_notif($this->input->post());
        $title = "Welcome Baby";
        $message = "Update Jam Buka Bidan";
     $this->onesignallibrary->sendNotification($title, $message);
      redirect('JadwalPeriksa');       
             }

  
   }