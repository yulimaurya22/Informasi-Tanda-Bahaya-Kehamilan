<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model {

    function __construct()
    {
 
        parent::__construct();
        
    }

  public function tampil_ringan() {
    return $this->db->get('tbl_ringan');
  }

  public function tampil_berat() {
    return $this->db->get('tbl_berat');
  }

  public function tampil_lainnya() {
    return $this->db->get('tbl_lainnya');
  }
   
  public function tampil_chat() {
    return $this->db->get('tbl_pesan');
  }

  public function tampil_riwayat() {
    return $this->db->get('tbl_riwayat');
  }

  public function tampil_jadwal() {
    return $this->db->get('tbl_jadwal');
  }

  public function tampil_akun() {
    return $this->db->get('tbl_akun');
  }

}
?>