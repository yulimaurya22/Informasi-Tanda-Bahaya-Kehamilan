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

    function pasien() {
      $data['title'] = 'Riwayat Periksa';
      $data['tambahAkun'] = $this->tambahAkun_model->get_data('tbl_akun')->result();
     

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('pasien', $data);
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

             
   function editData2()   {   
    $this->tambahAkun_model->edit_data($this->input->post());
    redirect('TambahAkun/pasien');       
           }

           

   public function deleteData()   {   
      $this->tambahAkun_model->del_data();
      redirect('TambahAkun');       
               }

   public function search()   {   
  $keyword = $this->input->post('keyword');
  $data['tambahAkun']=$this->tambahAkun_model->get_keyword($keyword);
  $this->load->view('template/header');
  $this->load->view('template/sidebar');
  $this->load->view('template/topbar');
  $this->load->view('tambahAkun', $data);
  $this->load->view('template/footer');} 

  public function search2()   {   
    $keyword = $this->input->post('keyword');
    $data['tambahAkun']=$this->tambahAkun_model->getkeyword($keyword);
    
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/topbar');
    $this->load->view('pasien', $data);
    $this->load->view('template/footer');} 

  public function detail($id)
    {
     $data['title'] = 'Detail';
     $this->load->model('tambahAkun_model');
     $riwayatPeriksa= $this->tambahAkun_model->detail($id);
     $data['riwayatPeriksa'] = $riwayatPeriksa;
     $data['rperiksa'] = $this->tambahAkun_model->getdata('tbl_riwayat')->result();

     $this->load->view('template/header');
     $this->load->view('template/sidebar');
     $this->load->view('template/topbar');
     $this->load->view('riwayatPeriksa', $data);
     $this->load->view('template/footer');
    } 

    function tambahaksi2()   {   
      $this->tambahAkun_model->insertdata($this->input->post());
      redirect('TambahAkun/pasien');
      }
  
      function tambah2()
      {
       $data['title'] = 'Riwayat Periksa';
      
       $this->load->view('template/header',  $data);
       $this->load->view('template/sidebar',  $data);
       $this->load->view('template/topbar' );
       $this->load->view('inputRiwayat');
       $this->load->view('template/footer');
      } 
     
      function editData3()   {   
        $this->tambahAkun_model->editdata($this->input->post());
        redirect('TambahAkun/pasien');       
               }
  
     public function deleteData2()   {   
        $this->tambahAkun_model->deldata();
        redirect('TambahAkun/pasien');       
                 }
  
   }