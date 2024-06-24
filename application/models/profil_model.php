<?php
class profil_model extends CI_Model {

    public function get_data($table)
    { 
       return $this->db->get('tbl_profil');
       
    }

   

}
?>