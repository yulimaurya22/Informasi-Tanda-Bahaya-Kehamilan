<?php
class BahayaRingan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('bahayaRingan_model'); 
        if(empty($this->session->userdata('username'))) {
          redirect('Login');
              
        }
       
          }
   function index()
   {
    $data['title'] = 'Bahaya Ringan';
      $data['bahayaRingan'] = $this->bahayaRingan_model->get_data('tbl_ringan')->result();
  
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('bahayaRingan', $data);
    $this->load->view('template/footer');} 

    function tambah()
    {
     $data['title'] = 'Bahaya Ringan';
    
     $this->load->view('template/header',  $data);
     $this->load->view('template/sidebar',  $data);
     $this->load->view('template/topbar' , $data);
     $this->load->view('inputRingan', $data);
     $this->load->view('template/footer');
    } 

    function tambahaksi()   {   
      $this->bahayaRingan_model->insert_data($this->input->post());
      redirect('BahayaRingan');
      }

    function editData()   {   
      $this->bahayaRingan_model->edit_data($this->input->post());
      redirect('BahayaRingan');       
             }

   public function deleteData()   {   
      $this->bahayaRingan_model->del_data();
      redirect('BahayaRingan'); }

      public function search()   {   
        $keyword = $this->input->post('keyword');
        $data['bahayaRingan']=$this->bahayaRingan_model->get_keyword($keyword);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('bahayaRingan', $data);
        $this->load->view('template/footer');} 

      public function selengkapnya($id)
    {
     $data['title'] = 'Detail';
     $this->load->model('bahayaRingan_model');
     $selengkapnya= $this->bahayaRingan_model->detail($id);
     $data['selengkapnya'] = $selengkapnya;
    
     $this->load->view('template/header');
     $this->load->view('template/sidebar');
     $this->load->view('template/topbar');
     $this->load->view('selengkapnya', $data);
     $this->load->view('template/footer');
    } 
        
   }