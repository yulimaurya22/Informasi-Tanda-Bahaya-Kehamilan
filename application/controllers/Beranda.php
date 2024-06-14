<?php
class Beranda extends CI_Controller
{
 
   function index() {
      $data['title'] = 'Home';
    
   
    $this->load->view('template/header',  $data);
    $this->load->view('template/sidebar',  $data);
    $this->load->view('template/topbar' );
    $this->load->view('beranda');
    $this->load->view('template/footer');} 

   
   }