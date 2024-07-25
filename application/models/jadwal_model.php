<?php
class Jadwal_model extends CI_Model {

    public function get_data($table)
    {
       return $this->db->get('tbl_jadwal');
       
    }
   
    public function edit_data($jadwalperiksa){
      $data = array('senin'=>$jadwalperiksa['senin'], 'selasa'=>$jadwalperiksa['selasa'],'rabu'=>$jadwalperiksa['rabu'],'kamis'=>$jadwalperiksa['kamis'],'jumat'=>$jadwalperiksa['jumat'],'sabtu'=>$jadwalperiksa['sabtu'],'minggu'=>$jadwalperiksa['minggu'],);
      $this->db->where('id',$jadwalperiksa['id']);
      $this->db->update('tbl_jadwal', $data);
 }
 
  
      public function edit_data_notif($notifedit)
     {
       $data = array('message'=>$notifedit, 'message'=> 'Terdapat Jadwal Jam Buka Terbaru');
         $this->db->insert('tbl_notif', $data);    
         return ($this->db->affected_rows() > 0);
     }


}
?>