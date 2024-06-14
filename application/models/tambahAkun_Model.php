<?php
class tambahAkun_model extends CI_Model {

    public function get_data($table)
    {
       return $this->db->get('tbl_akun');
       
    }
    public function insert_data($tambahakun)
    {
      $data = array('username'=>$tambahakun['username'], 'password'=>$tambahakun['password']);
      $this->db->insert('tbl_akun', $data);    
    }

    public function edit_data($tambahakun){
      $data = array('username'=>$tambahakun['username'], 'password'=>$tambahakun['password']);
      $this->db->where('id',$tambahakun['id']);
      $this->db->update('tbl_akun', $data);
 }

 public function del_data(){
      
  $id = $this->input->post('id');
  $this->db->where('id',$id);
  $this->db->delete('tbl_akun');
}

}
?>