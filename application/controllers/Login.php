<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');             
    }

function index()   {
    $data['title'] = 'Login Aplikasi';
    
   
    $this->load->view('template/header', $data);   
    $this->load->view('login', $data);
    $this->load->view('template/footer');} 

    public function login_admin(){
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

       if($this->form_validation->run() != FALSE){
        $where = array(
            'username' => $username,
            'password' => $password
        );
       $login_data = $this->login_model->login_data($where)->num_rows();

       if($login_data > 0){
        $sess_data = array(
            'username' => $username,
            'login' => 'OK'
        );

        $this->session->set_userdata($sess_data);
        redirect(base_url('Beranda'));
       }else{
        $this->session->set_flashdata('info', 'Maaf Username dan Password Anda Salah!');
        redirect(base_url('Login'));
       }
       }else{
        $this->load->view('login');     
      }
       
    }

    public function logout(){
    
        $this->session->get_userdata('username', FALSE);
        $this->session->sess_destroy();
        
              redirect('Login');
           
     
    }
}