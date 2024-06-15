<?php
class login_model extends CI_Model
{
    public function login_data($where)
    {
        return $this->db->get_where('login', $where);
    }
}