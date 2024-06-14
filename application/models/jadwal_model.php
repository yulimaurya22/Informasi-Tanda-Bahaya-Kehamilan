<?php
class jadwal_model extends CI_Model {

    public function get_data($table)
    {
       return $this->db->get('tbl_jadwal');
       
    }
   
    public function edit_data($jadwalperiksa){
      $data = array('senin'=>$jadwalperiksa['senin'], 'selasa'=>$jadwalperiksa['selasa'],'rabu'=>$jadwalperiksa['rabu'],'kamis'=>$jadwalperiksa['kamis'],'jumat'=>$jadwalperiksa['jumat'],'sabtu'=>$jadwalperiksa['sabtu'],'minggu'=>$jadwalperiksa['minggu'],);
      $this->db->where('id',$jadwalperiksa['id']);
      $this->db->update('tbl_jadwal', $data);
 }


}
?>