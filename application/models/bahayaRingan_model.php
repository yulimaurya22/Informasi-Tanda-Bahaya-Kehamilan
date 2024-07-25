<?php
class BahayaRingan_model extends CI_Model {

    public function get_data($table)
    {
       return $this->db->get('tbl_ringan');
       
    }
   
    public function insert_data($bahayaringan)
    {
        $data = array('judul'=>$bahayaringan['judul'], 'keterangan'=>$bahayaringan['keterangan'], 'gejala'=>$bahayaringan['gejala'], 'penyebab'=>$bahayaringan['penyebab'], 'penanganan'=>$bahayaringan['penanganan']);
      $this->db->insert('tbl_ringan', $data);    
    }
     public function insert_data_notif($notif)
     {
       $data = array('message'=>$notif, 'message'=> 'Terdapat Informasi Kehamilan Ringan Terbaru');
         $this->db->insert('tbl_notif', $data);    
         return ($this->db->affected_rows() > 0);
     }
     
      public function edit_data_notif($notifedit)
     {
       $data = array('message'=>$notifedit, 'message'=> 'Terdapat Informasi Kehamilan Ringan Terbaru');
         $this->db->insert('tbl_notif', $data);    
         return ($this->db->affected_rows() > 0);
     }

    public function edit_data($bahayaringan){
      $data = array('judul'=>$bahayaringan['judul'], 'keterangan'=>$bahayaringan['keterangan'], 'gejala'=>$bahayaringan['gejala'], 'penyebab'=>$bahayaringan['penyebab'], 'penanganan'=>$bahayaringan['penanganan']);
      $this->db->where('id',$bahayaringan['id']);
      $this->db->update('tbl_ringan', $data);
 }

 public function del_data(){
      
    $id = $this->input->post('id');
    $this->db->where('id',$id);
    $this->db->delete('tbl_ringan');
  }

  public function get_keyword($keyword){
    $this->db->select('*'); 
    $this->db->from('tbl_ringan');
    $this->db->like('judul',$keyword);
    $this->db->or_like('keterangan',$keyword);
    return $this->db->get()->result();
  }

  public function detail($id = NULL){
    $query = $this->db->get_where('tbl_ringan', array('id' => $id))->row();
    return $query;
  }
}
?>