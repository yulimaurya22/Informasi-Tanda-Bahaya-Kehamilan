<?php
class konsultasi_model extends CI_Model {

    public function get_data($table)
    {
       return $this->db->get('tbl_pesan');
       
    }
    public function insert_data($konsultasi)
    {
        $data = array('pesan'=>$konsultasi['pesan']); 
             $this->db->insert('tbl_pesan', $data);    
    }

}
?>