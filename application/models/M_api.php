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
   

}
?>