<?php
class login_model extends CI_Model
{
    public function login_data($where)
    {
        return $this->db->get_where('login', $where);
    }

    public function get_data($table)
    {
       return $this->db->get('login');
       
    }
    public function editdata($login){
        $data = array('username'=>$login['username'], 'password'=>$login['password']);
         $this->db->where('id',$login['id']);
        $this->db->update('login', $data);
   }
} 
?>