<?php
class Profil_model extends CI_Model {

    public function get_data($table)
    { 
       return $this->db->get('tbl_profil');
       
    }

   
 
     
      public function edit_data_notif($notifedit)
     {
       $data = array('message'=>$notifedit, 'message'=> 'Admin Update Profil Bidan');
         $this->db->insert('tbl_notif', $data);    
         return ($this->db->affected_rows() > 0);
     }
}
?>