<?php
class tambahAkun_model extends CI_Model {

    public function get_data($table)
    {
       return $this->db->get('tbl_akun');
       
       
    }
    public function getdata($table)
    {
     
       return $this->db->get('tbl_riwayat');
       
    }
    public function insert_data($tambahakun)
    {
      $data = array('username'=>$tambahakun['username'], 'password'=>$tambahakun['password'], 'namabunda'=>$tambahakun['namabunda'], 'usiakehamilan'=>$tambahakun['usiakehamilan'], 'beratbadanbunda'=>$tambahakun['beratbadanbunda'],'tinggibadanbunda'=>$tambahakun['tinggibadanbunda'],'tekanandarah'=>$tambahakun['tekanandarah'],'beratjanin'=>$tambahakun['beratjanin'], 'panjangjanin'=>$tambahakun['panjangjanin'], 'detakjantungjanin'=>$tambahakun['detakjantungjanin'], 'obatyangdikonsumsi'=>$tambahakun['obatyangdikonsumsi']);
      $this->db->insert('tbl_akun', $data);      }
   

 public function edit_data($tambahakun){
  $data = array('username'=>$tambahakun['username'], 'password'=>$tambahakun['password'], 'namabunda'=>$tambahakun['namabunda'], 'usiakehamilan'=>$tambahakun['usiakehamilan'], 'beratbadanbunda'=>$tambahakun['beratbadanbunda'],'tinggibadanbunda'=>$tambahakun['tinggibadanbunda'],'tekanandarah'=>$tambahakun['tekanandarah'],'beratjanin'=>$tambahakun['beratjanin'], 'panjangjanin'=>$tambahakun['panjangjanin'], 'detakjantungjanin'=>$tambahakun['detakjantungjanin'], 'obatyangdikonsumsi'=>$tambahakun['obatyangdikonsumsi']);
  $this->db->where('id',$tambahakun['id']);
  $this->db->update('tbl_akun', $data);
}

 public function del_data(){
      
  $id = $this->input->post('id');
  $this->db->where('id',$id);
  $this->db->delete('tbl_akun');
}

public function get_keyword($keyword){
  $this->db->select('*');
  $this->db->from('tbl_akun');
  $this->db->like('username',$keyword);
  $this->db->or_like('password',$keyword);
  return $this->db->get()->result();
}

public function getkeyword($keyword){
  $this->db->select('*');
  $this->db->from('tbl_akun');
  $this->db->like('username',$keyword);
  $this->db->or_like('password',$keyword);
  return $this->db->get()->result();
}

public function detail($id = NULL){
  $query = $this->db->get_where('tbl_akun', array('id' => $id))->row();
  return $query;
}



public function insertdata($periksa)
{
    $data = array('namabunda'=>$periksa['namabunda'], 'usiakehamilan'=>$periksa['usiakehamilan'], 'beratbadanbunda'=>$periksa['beratbadanbunda'], 'tinggibadanbunda'=>$periksa['tinggibadanbunda'], 'tekanandarah'=>$periksa['tekanandarah'], 'beratjanin'=>$periksa['beratjanin'], 'panjangjanin'=>$periksa['panjangjanin'], 'detakjantungjanin'=>$periksa['detakjantungjanin'], 'obatyangdikonsumsi'=>$periksa['obatyangdikonsumsi']);
  $this->db->insert('tbl_riwayat', $data);    
}

public function editdata($periksa){
  $data = array('namabunda'=>$periksa['namabunda'], 'usiakehamilan'=>$periksa['usiakehamilan'], 'beratbadanbunda'=>$periksa['beratbadanbunda'], 'tinggibadanbunda'=>$periksa['tinggibadanbunda'], 'tekanandarah'=>$periksa['tekanandarah'], 'beratjanin'=>$periksa['beratjanin'], 'panjangjanin'=>$periksa['panjangjanin'], 'detakjantungjanin'=>$periksa['detakjantungjanin'], 'obatyangdikonsumsi'=>$periksa['obatyangdikonsumsi']);
  $this->db->where('id',$periksa['id']);
  $this->db->update('tbl_riwayat', $data);
}

public function deldata(){
  
$id = $this->input->post('id');
$this->db->where('id',$id);
$this->db->delete('tbl_riwayat');
}
}
?>