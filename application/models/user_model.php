<?php
class User_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_users($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('tbl_akun');
            return $query->result_array();
        }

        $query = $this->db->get_where('tbl_akun', array('id' => $id));
        return $query->row_array();
    }

    public function insert_user($data) {
        return $this->db->insert('tbl_akun', $data);
    }

    public function update_user($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('tbl_akun', $data);
    }

    public function delete_user($id) {
        $this->db->where('id', $id);
        return $this->db->delete('tbl_akun');
    }
}
