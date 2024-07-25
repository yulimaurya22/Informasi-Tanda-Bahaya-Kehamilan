<?php
class BahayaLainnya extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('BahayaLainnya_model'); 
        $this->load->library('OneSignalLibrary');
        if(empty($this->session->userdata('username'))) {
          redirect('Login');
          
          
              
        }
       
          }
   function index()
   {
    $data['title'] = 'Bahaya Lainnya';
      $data['bahayaLainnya'] = $this->BahayaLainnya_model->get_data('tbl_lainnya')->result();
   
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('bahayaLainnya', $data);
    $this->load->view('template/footer');} 

    function tambah()
    {
     $data['title'] = 'Bahaya Lainnya';
    
     $this->load->view('template/header',  $data);
     $this->load->view('template/sidebar',  $data);
     $this->load->view('template/topbar' , $data);
     $this->load->view('inputLainnya', $data);
     $this->load->view('template/footer');
    } 

   function tambahaksi()   {   
      $this->BahayaLainnya_model->insert_data($this->input->post());
       $this->BahayaLainnya_model->insert_data_notif($this->input->post());
      $title = "Welcome Baby";
        $message = "Terdapat Informasi Kehamilan Lainnya";
     $this->onesignallibrary->sendNotification($title, $message);
      redirect('BahayaLainnya');



}
      
       
    function editData()   {   
      $this->BahayaLainnya_model->edit_data($this->input->post());
       $this->BahayaLainnya_model->edit_data_notif($this->input->post());
      $title = "Welcome Baby";
        $message = "Update Informasi Kehamilan Lainnya ";
     $this->onesignallibrary->sendNotification($title, $message);
      redirect ('BahayaLainnya');  
   
    }
       
    
     

  function deleteData()   {   
      $this->BahayaLainnya_model->del_data();
      redirect('BahayaLainnya'); }
   

   function search()   {   
  $keyword = $this->input->post('keyword');
  $data['bahayaLainnya']=$this->BahayaLainnya_model->get_keyword($keyword);
  $this->load->view('template/header');
  $this->load->view('template/sidebar');
  $this->load->view('template/topbar');
  $this->load->view('bahayaLainnya', $data);
  $this->load->view('template/footer');} 

  function detail($id)
    {
     $data['title'] = 'Detail';
     $this->load->model('BahayaLainnya_model');
     $detail= $this->BahayaLainnya_model->detail($id);
     $data['detail'] = $detail;
    
     $this->load->view('template/header');
     $this->load->view('template/sidebar');
     $this->load->view('template/topbar');
     $this->load->view('detailLainnya', $data);
     $this->load->view('template/footer');
    } 
  
}