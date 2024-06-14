<?php
class BahayaRingan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('bahayaRingan_model'); 
       
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
   }