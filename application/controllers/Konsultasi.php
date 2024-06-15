<?php
class Konsultasi extends CI_Controller
{
  function __construct()
  {
     parent::__construct();
        
   if(empty($this->session->userdata('username'))) {
     redirect('Login');
         
   }  
       
  }
  function index()
   {
      $data['title'] = 'Chat Konsultasi';
     

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('konsultasi', $data);
    $this->load->view('template/footer');} 
   }