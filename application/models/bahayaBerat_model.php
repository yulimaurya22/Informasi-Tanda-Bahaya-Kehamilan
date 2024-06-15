<?php
class bahayaBerat_model extends CI_Model {

    public function get_data($table)
    {
       return $this->db->get('tbl_berat');
       
    }
   
    public function insert_data($bahayaberat)
    {
        $data = array('judul'=>$bahayaberat['judul'], 'keterangan'=>$bahayaberat['keterangan']);
      $this->db->insert('tbl_berat', $data);    
    }

    public function edit_data($bahayaberat){
      $data = array('judul'=>$bahayaberat['judul'], 'keterangan'=>$bahayaberat['keterangan']);
      $this->db->where('id',$bahayaberat['id']);
      $this->db->update('tbl_berat', $data);
 }

 public function del_data(){
      
    $id = $this->input->post('id');
    $this->db->where('id',$id);
    $this->db->delete('tbl_berat');
  }

  public function get_keyword($keyword){
    $this->db->select('*');
    $this->db->from('tbl_berat');
    $this->db->like('judul',$keyword);
    $this->db->or_like('keterangan',$keyword);
    return $this->db->get()->result();
  }
}
?>