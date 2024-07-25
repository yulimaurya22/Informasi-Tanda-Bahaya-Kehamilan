<?php
class Profil extends CI_Controller
{

   function __construct()
   {
      parent::__construct();
      $this->load->model('Profil_model');  
      $this->load->library('OneSignalLibrary');
      $this->load->model('Login_model');  
        
    if(empty($this->session->userdata('username'))) {
      redirect('Login');
          
    }  
        
   } 

   function index()
   { 
    $data['title'] = 'Profil Admin';
    $data['profil'] = $this->Profil_model->get_data('tbl_profil')->result();
    $data['login'] = $this->Login_model->get_data('login')->result();


    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('profil', $data);
    $this->load->view('template/footer');} 

    function editData()   {   
          $title = "Welcome Baby";
        $message = "Admin Update Profil Bidan";
     $this->onesignallibrary->sendNotification($title, $message);
     $this->Profil_model->edit_data_notif($this->input->post());
     
      $id = $this->input->post('id');
      $config['upload_path'] = './asset/img/';
      $config['allowed_types'] = 'gif|jpg|png|PNG';
      $config['max_size'] = 10000;
      $config['max_width'] = 10000;
      $config['max_height'] = 10000;

      $this->load->library('upload', $config);
      if (! $this->upload->do_upload('foto'))
      {
        $nama = $this->input->post('nama', TRUE);
        $alamat = $this->input->post('alamat', TRUE);
        $jeniskelamin = $this->input->post('jeniskelamin', TRUE);
        $telp = $this->input->post('telp', TRUE);
        $data = array(
          'nama' => $nama,
          'alamat' => $alamat,
          'jeniskelamin' => $jeniskelamin,
          'telp' =>$telp,
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_profil', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Diubah!</dv>');   
       redirect ('Profil');        
     }
     else{
      $foto = $this->upload->data();
      $foto = $foto['file_name'];
      $nama = $this->input->post('nama', TRUE);
      $alamat = $this->input->post('alamat', TRUE);
      $jeniskelamin = $this->input->post('jeniskelamin', TRUE);
      $telp = $this->input->post('telp', TRUE);
      $data = array(
        'nama' => $nama,
        'alamat' => $alamat,
        'jeniskelamin' => $jeniskelamin,
        'telp' =>$telp,
        'foto' => $foto,
      );
      $this->db->where('id', $id);
      $this->db->update('tbl_profil', $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Data Berhasil Diubah!</dv>');   
     redirect ('Profil');       
   }
  }
     
    


             function edit_Data()   {   
              $this->Login_model->editdata($this->input->post());
              redirect ('Profil');       
                     }
        

   }