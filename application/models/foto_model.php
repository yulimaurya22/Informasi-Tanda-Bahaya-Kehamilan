<?php
class foto_model extends CI_Model {

    public function get_data($table)
    {
       return $this->db->get('tbl_foto');
       
    }

    public function edit_data($foto){
        $data = array('foto'=>$foto['foto']);
                $this->db->where('id',$foto['id']);
        $this->db->update('tbl_foto', $data);
   }
}
?>