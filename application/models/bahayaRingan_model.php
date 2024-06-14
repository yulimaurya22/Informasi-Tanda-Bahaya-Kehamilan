<?php
class bahayaRingan_model extends CI_Model {

    public function get_data($table)
    {
       return $this->db->get('tbl_ringan');
       
    }
   
    public function insert_data($bahayaringan)
    {
        $data = array('judul'=>$bahayaringan['judul'], 'keterangan'=>$bahayaringan['keterangan']);
      $this->db->insert('tbl_ringan', $data);    
    }

    public function edit_data($bahayaringan){
      $data = array('judul'=>$bahayaringan['judul'], 'keterangan'=>$bahayaringan['keterangan']);
      $this->db->where('id',$bahayaringan['id']);
      $this->db->update('tbl_ringan', $data);
 }

 public function del_data(){
      
    $id = $this->input->post('id');
    $this->db->where('id',$id);
    $this->db->delete('tbl_ringan');
  }
}
?>