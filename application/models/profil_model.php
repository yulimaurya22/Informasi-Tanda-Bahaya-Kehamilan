<?php
class profil_model extends CI_Model {

    public function get_data($table)
    {
       return $this->db->get('tbl_profil');
       
    }

    public function edit_data($profil){
        $data = array('foto'=>$profil['foto'],'nama'=>$profil['nama'], 'alamat'=>$profil['alamat'],'jeniskelamin'=>$profil['jeniskelamin'],'telp'=>$profil['telp']);
        $this->db->where('id',$profil['id']);
        $this->db->update('tbl_profil', $data);
   }
}
?>