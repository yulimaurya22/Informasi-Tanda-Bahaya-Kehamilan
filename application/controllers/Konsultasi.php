<?php
class Konsultasi extends CI_Controller
{
  function __construct()
  {
     parent::__construct();
     $this->load->model('tambahAkun_model');
     $this->load->model('konsultasi_model');        
   if(empty($this->session->userdata('username'))) {
     redirect('Login');
         
   }  
       
  } 
  function index()
   {
      $data['title'] = 'Chat Konsultasi';
      $data['tambahAkun'] = $this->tambahAkun_model->get_data('tbl_akun')->result();
      $data['konsultasi'] = $this->konsultasi_model->get_data('tbl_chat')->result();

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('konsultasi', $data);
    $this->load->view('template/footer');} 
  
   function tambahaksi()   {   
    $this->konsultasi_model->insert_data($this->input->post());
    redirect('Konsultasi');
    }

    

    public function store(){
      $data = array(
        'pesan'=> $this->input->post('pesan')
      );

      $this->db->insert('tbl_chat', $data);
    }
  }
  ?>