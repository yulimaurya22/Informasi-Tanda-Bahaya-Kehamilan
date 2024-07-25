<?php
class BahayaBerat_model extends CI_Model {

    public function get_data($table)
    {
       return $this->db->get('tbl_berat');
       
    }
   
    public function insert_data($bahayaberat)
    {
        $data = array('judul'=>$bahayaberat['judul'], 'keterangan'=>$bahayaberat['keterangan'], 'gejala'=>$bahayaberat['gejala'], 'penyebab'=>$bahayaberat['penyebab'], 'penanganan'=>$bahayaberat['penanganan']);
      $this->db->insert('tbl_berat', $data);    
    }

    public function edit_data($bahayaberat){
      $data = array('judul'=>$bahayaberat['judul'], 'keterangan'=>$bahayaberat['keterangan'], 'gejala'=>$bahayaberat['gejala'], 'penyebab'=>$bahayaberat['penyebab'], 'penanganan'=>$bahayaberat['penanganan']);
      $this->db->where('id',$bahayaberat['id']);
      $this->db->update('tbl_berat', $data);
 }
 
   public function insert_data_notif($notif)
     {
       $data = array('message'=>$notif, 'message'=> 'Terdapat Informasi Kehamilan Berat Terbaru');
         $this->db->insert('tbl_notif', $data);    
         return ($this->db->affected_rows() > 0);
     }
     
      public function edit_data_notif($notifedit)
     {
       $data = array('message'=>$notifedit, 'message'=> 'Terdapat Informasi Kehamilan Berat Terbaru');
         $this->db->insert('tbl_notif', $data);    
         return ($this->db->affected_rows() > 0);
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

  public function detail($id = NULL){
    $query = $this->db->get_where('tbl_berat', array('id' => $id))->row();
    return $query;
  }
}
?>