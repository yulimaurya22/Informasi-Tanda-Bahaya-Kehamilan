<?php
class riwayat_model extends CI_Model {

    public function get_data($table)
    {
       return $this->db->get('tbl_riwayat');
       
    }
    public function insert_data($riwayatperiksa)
    {
        $data = array('namabunda'=>$riwayatperiksa['namabunda'], 'usiakehamilan'=>$riwayatperiksa['usiakehamilan'], 'beratbadanbunda'=>$riwayatperiksa['beratbadanbunda'], 'tinggibadanbunda'=>$riwayatperiksa['tinggibadanbunda'], 'tekanandarah'=>$riwayatperiksa['tekanandarah'], 'beratjanin'=>$riwayatperiksa['beratjanin'], 'panjangjanin'=>$riwayatperiksa['panjangjanin'], 'detakjantungjanin'=>$riwayatperiksa['detakjantungjanin'], 'obatyangdikonsumsi'=>$riwayatperiksa['obatyangdikonsumsi']);
      $this->db->insert('tbl_riwayat', $data);    
    }

    public function edit_data($riwayatperiksa){
      $data = array('namabunda'=>$riwayatperiksa['namabunda'], 'usiakehamilan'=>$riwayatperiksa['usiakehamilan'], 'beratbadanbunda'=>$riwayatperiksa['beratbadanbunda'], 'tinggibadanbunda'=>$riwayatperiksa['tinggibadanbunda'], 'tekanandarah'=>$riwayatperiksa['tekanandarah'], 'beratjanin'=>$riwayatperiksa['beratjanin'], 'panjangjanin'=>$riwayatperiksa['panjangjanin'], 'detakjantungjanin'=>$riwayatperiksa['detakjantungjanin'], 'obatyangdikonsumsi'=>$riwayatperiksa['obatyangdikonsumsi']);
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