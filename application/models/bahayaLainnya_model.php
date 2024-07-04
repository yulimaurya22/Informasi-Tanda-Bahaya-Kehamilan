<?php
class bahayaLainnya_model extends CI_Model {

    public function get_data($table)
    {
       return $this->db->get('tbl_lainnya');
       
    }
   
    public function insert_data($bahayalainnya)
    {
        $data = array('judul'=>$bahayalainnya['judul'], 'keterangan'=>$bahayalainnya['keterangan'], 'gejala'=>$bahayalainnya['gejala'], 'penyebab'=>$bahayalainnya['penyebab'], 'penanganan'=>$bahayalainnya['penanganan']);
      $this->db->insert('tbl_lainnya', $data);    
    }

    public function edit_data($bahayalainnya){
      $data = array('judul'=>$bahayalainnya['judul'], 'keterangan'=>$bahayalainnya['keterangan'], 'gejala'=>$bahayalainnya['gejala'], 'penyebab'=>$bahayalainnya['penyebab'], 'penanganan'=>$bahayalainnya['penanganan']);
      $this->db->where('id',$bahayalainnya['id']);
      $this->db->update('tbl_lainnya', $data);
 }

 public function del_data(){
      
    $id = $this->input->post('id');
    $this->db->where('id',$id); 
    $this->db->delete('tbl_lainnya');
  }

  public function get_keyword($keyword){
    $this->db->select('*');
    $this->db->from('tbl_lainnya');
    $this->db->like('judul',$keyword);
    $this->db->or_like('keterangan',$keyword);
    return $this->db->get()->result();
  }

  public function detail($id = NULL){
    $query = $this->db->get_where('tbl_lainnya', array('id' => $id))->row();
    return $query;
  }
}
?>