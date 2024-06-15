<?php
class Profil extends CI_Controller
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
    $data['title'] = 'Profil Admin';
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('Profil', $data);
    $this->load->view('template/footer');} 
   }