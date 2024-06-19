<?php
class RiwayatPeriksa extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
    $this->load->model('riwayat_model');         
    if(empty($this->session->userdata('username'))) {
      redirect('Login');
          
    }  
        
   }

   function index()
   {
      $data['title'] = 'Riwayat Periksa';
      $data['rperiksa'] = $this->riwayat_model->get_data('tbl_riwayat')->result();
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('riwayatPeriksa');
    $this->load->view('template/footer');} 

    function tambah()
    {
     $data['title'] = 'Riwayat Periksa';
    
     $this->load->view('template/header',  $data);
     $this->load->view('template/sidebar',  $data);
     $this->load->view('template/topbar' );
     $this->load->view('inputRiwayat');
     $this->load->view('template/footer');
    } 

    function tambahaksi()   {   
      $this->riwayat_model->insert_data($this->input->post());
      redirect('TambahAkun/detail');
      }

   function editData()   {   
      $this->riwayat_model->edit_data($this->input->post());
      redirect('RiwayatPeriksa');       
             }

   public function deleteData()   {   
      $this->riwayat_model->del_data();
      redirect('RiwayatPeriksa');       
               }
   }