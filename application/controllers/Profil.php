<?php
class Profil extends CI_Controller
{

   function __construct()
   {
      parent::__construct();
      $this->load->model('profil_model');  
      $this->load->model('login_model');  
      $this->load->model('foto_model');
        
    if(empty($this->session->userdata('username'))) {
      redirect('Login');
          
    }  
        
   }

   function index()
   { 
    $data['title'] = 'Profil Admin';
    $data['profil'] = $this->profil_model->get_data('tbl_profil')->result();
    $data['login'] = $this->login_model->get_data('login')->result();
    $data['foto'] = $this->foto_model->get_data('tbl_foto')->result();

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('profil', $data);
    $this->load->view('template/footer');} 

    function editData()   {   
      $this->profil_model->edit_data($this->input->post());     
      redirect ('Profil');       
             }

             public function foto() {
              $data['title'] = 'Profil Admin';
              $this->load->view('template/header', $data);
              $this->load->view('template/sidebar', $data);
              $this->load->view('template/topbar', $data);
              $this->load->view('upfoto');
              $this->load->view('template/footer');} 


              public function foto2() {          
              $foto = $_FILES['foto'];
              if ($foto=''){}else{
                $config['upload_path'] ='./asset/img';
                $config['allowed_types'] = 'jpg|png|gif';
        
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('foto')){
                  echo "Upload Gagal"; die();
                }else {
                  $foto=$this->upload->data('file_name');
                }
              }

               redirect ('Profil');       
             }

             function edit_Data()   {   
              $this->login_model->editdata($this->input->post());
              redirect ('Profil');       
                     }
        

   }