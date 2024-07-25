<?php
class BahayaBerat extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('BahayaBerat_model'); 
        $this->load->library('OneSignalLibrary');
        if(empty($this->session->userdata('username'))) {
          redirect('Login');
              
        }
       
          }
   function index()
   {
    $data['title'] = 'Bahaya Berat';
      $data['bahayaBerat'] = $this->BahayaBerat_model->get_data('tbl_berat')->result();
   
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
      $this->BahayaBerat_model->insert_data($this->input->post());
       $this->BahayaBerat_model->insert_data_notif($this->input->post());
      $title = "Welcome Baby";
        $message = "Terdapat Informasi Kehamilan Berat";
     $this->onesignallibrary->sendNotification($title, $message);
      redirect('BahayaBerat');
      }

    function editData()   {   
      $this->BahayaBerat_model->edit_data($this->input->post());
       $this->BahayaBerat_model->edit_data_notif($this->input->post());
      $title = "Welcome Baby";
        $message = "Update Informasi Kehamilan Berat";
     $this->onesignallibrary->sendNotification($title, $message);
      redirect ('BahayaBerat');       
             }

   public function deleteData()   {   
      $this->BahayaBerat_model->del_data();
      redirect('BahayaBerat'); }
   

   public function search()   {   
  $keyword = $this->input->post('keyword');
  $data['bahayaBerat']=$this->BahayaBerat_model->get_keyword($keyword);
  $this->load->view('template/header');
  $this->load->view('template/sidebar');
  $this->load->view('template/topbar');
  $this->load->view('bahayaBerat', $data);
  $this->load->view('template/footer');} 

  public function detail($id)
    {
     $data['title'] = 'Detail';
     $this->load->model('BahayaBerat_model');
     $detail= $this->BahayaBerat_model->detail($id);
     $data['detail'] = $detail;
    
     $this->load->view('template/header');
     $this->load->view('template/sidebar');
     $this->load->view('template/topbar');
     $this->load->view('detailBerat', $data);
     $this->load->view('template/footer');
    } 
  
 }