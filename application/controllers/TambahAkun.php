<?php
class TambahAkun extends CI_Controller
{
   function __construct()
   {
       parent::__construct();
     
       $this->load->model('tambahAkun_model');    
       if(empty($this->session->userdata('username'))) {
         redirect('Login');
             
       }       
        
   }

   function index() {
      $data['title'] = 'Tambah Akun';
      $data['tambahAkun'] = $this->tambahAkun_model->get_data('tbl_akun')->result();

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('tambahAkun', $data);
    $this->load->view('template/footer');} 

    function tambah()
    {
     $data['title'] = 'Tambah Akun';
    
     $this->load->view('template/header',  $data);
     $this->load->view('template/sidebar',  $data);
     $this->load->view('template/topbar' );
     $this->load->view('inputAkun');
     $this->load->view('template/footer');
    } 
    function tambahaksi()   {   
      $this->tambahAkun_model->insert_data($this->input->post());
      redirect('TambahAkun');
      }

   function editData()   {   
      $this->tambahAkun_model->edit_data($this->input->post());
      redirect('TambahAkun');       
             }

   public function deleteData()   {   
      $this->tambahAkun_model->del_data();
      redirect('TambahAkun');       
               }
     
  
   }