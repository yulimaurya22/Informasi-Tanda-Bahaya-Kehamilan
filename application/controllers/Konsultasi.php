<?php
class Konsultasi extends CI_Controller
{

   function index()
   {
   
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/topbar');
    $this->load->view('konsultasi');
    $this->load->view('template/footer');} 
   }