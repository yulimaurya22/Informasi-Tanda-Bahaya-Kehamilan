<?php
class JadwalPeriksa extends CI_Controller
{
   function __construct()
   {
       parent::__construct();
      $this->load->model('jadwal_model');  
      $this->load->model('profil_model');  
      if(empty($this->session->userdata('username'))) {
         redirect('Login');
             
       }         
        
   }

   function index()
   {
      $data['title'] = 'Jadwal Periksa';
      $data['jadwalPeriksa'] = $this->jadwal_model->get_data('tbl_jadwal')->result();
      $data['profil'] = $this->profil_model->get_data('tbl_profil')->result();

     
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('jadwalPeriksa',$data);
    $this->load->view('template/footer');} 

    function editData()   {   
      $this->jadwal_model->edit_data($this->input->post());
      redirect('JadwalPeriksa');       
             }

  
   }