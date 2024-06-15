<?php
class BahayaBerat extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('bahayaBerat_model'); 
        if(empty($this->session->userdata('username'))) {
          redirect('Login');
              
        }
       
          }
   function index()
   {
    $data['title'] = 'Bahaya Berat';
      $data['bahayaBerat'] = $this->bahayaBerat_model->get_data('tbl_berat')->result();

    
   
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('bahayaBerat', $data);
    $this->load->view('template/footer');} 

    function tambah()
    {
     $data['title'] = 'Bahaya Berat';
    
     $this->load->view('template/header',  $data);
     $this->load->view('template/sidebar',  $data);
     $this->load->view('template/topbar' , $data);
     $this->load->view('inputBerat', $data);
     $this->load->view('template/footer');
    } 

    function tambahaksi()   {   
      $this->bahayaBerat_model->insert_data($this->input->post());
      redirect('BahayaBerat');
      }

    function editData()   {   
      $this->bahayaBerat_model->edit_data($this->input->post());
      redirect('BahayaBerat');       
             }

   public function deleteData()   {   
      $this->bahayaBerat_model->del_data();
      redirect('BahayaBerat'); }
   }