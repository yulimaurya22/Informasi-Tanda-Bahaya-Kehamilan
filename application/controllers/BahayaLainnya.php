<?php
class BahayaLainnya extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('bahayaLainnya_model'); 
        if(empty($this->session->userdata('username'))) {
          redirect('Login');
              
        }
       
          }
   function index()
   {
    $data['title'] = 'Bahaya Lainnya';
      $data['bahayaLainnya'] = $this->bahayaLainnya_model->get_data('tbl_lainnya')->result();
   
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
      $this->bahayaLainnya_model->insert_data($this->input->post());
      redirect('BahayaLainnya');
      }

    function editData()   {   
      $this->bahayaLainnya_model->edit_data($this->input->post());
      redirect ('BahayaLainnya');       
             }

   public function deleteData()   {   
      $this->bahayaBerat_model->del_data();
      redirect('BahayaLainnya'); }
   

   public function search()   {   
  $keyword = $this->input->post('keyword');
  $data['bahayaLainnya']=$this->bahayaLainnya_model->get_keyword($keyword);
  $this->load->view('template/header');
  $this->load->view('template/sidebar');
  $this->load->view('template/topbar');
  $this->load->view('bahayaLainnya', $data);
  $this->load->view('template/footer');} 

  public function detail($id)
    {
     $data['title'] = 'Detail';
     $this->load->model('bahayaLainnya_model');
     $detail= $this->bahayaLainnya_model->detail($id);
     $data['detail'] = $detail;
    
     $this->load->view('template/header');
     $this->load->view('template/sidebar');
     $this->load->view('template/topbar');
     $this->load->view('detailLainnya', $data);
     $this->load->view('template/footer');
    } 
  
 }