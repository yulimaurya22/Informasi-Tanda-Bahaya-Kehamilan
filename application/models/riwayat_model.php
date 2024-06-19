<?php
class riwayat_model extends CI_Model {

    public function get_data($table)
    {
       return $this->db->get('tbl_riwayat');
       
    }
    public function insert_data($periksa)
    {
        $data = array('namabunda'=>$periksa['namabunda'], 'usiakehamilan'=>$periksa['usiakehamilan'], 'beratbadanbunda'=>$periksa['beratbadanbunda'], 'tinggibadanbunda'=>$periksa['tinggibadanbunda'], 'tekanandarah'=>$periksa['tekanandarah'], 'beratjanin'=>$periksa['beratjanin'], 'panjangjanin'=>$periksa['panjangjanin'], 'detakjantungjanin'=>$periksa['detakjantungjanin'], 'obatyangdikonsumsi'=>$periksa['obatyangdikonsumsi']);
      $this->db->insert('tbl_riwayat', $data);    
    }

    public function edit_data($riwayatperiksa){
      $data = array('namabunda'=>$periksa['namabunda'], 'usiakehamilan'=>$periksa['usiakehamilan'], 'beratbadanbunda'=>$periksa['beratbadanbunda'], 'tinggibadanbunda'=>$periksa['tinggibadanbunda'], 'tekanandarah'=>$periksa['tekanandarah'], 'beratjanin'=>$periksa['beratjanin'], 'panjangjanin'=>$periksa['panjangjanin'], 'detakjantungjanin'=>$periksa['detakjantungjanin'], 'obatyangdikonsumsi'=>$periksa['obatyangdikonsumsi']);
      $this->db->where('id',$riwayatperiksa['id']);
      $this->db->update('tbl_riwayat', $data);
 }

 public function del_data(){
      
  $id = $this->input->post('id');
  $this->db->where('id',$id);
  $this->db->delete('tbl_riwayat');
}

}
?>