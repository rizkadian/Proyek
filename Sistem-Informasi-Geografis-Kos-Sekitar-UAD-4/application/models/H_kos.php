<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_kos extends CI_Model{

    public function get_uploaded_data() {
        $this->db->where('status', 'terupload');
        $query = $this->db->get('kost');
        return $query->result();
    }
    public function update_status($id) {
        $this->db->set('status', 'terupload');
        $this->db->where('id', $id);
        return $this->db->update('kost');
    }
    public function data_masuk(){
        $query = $this->db->get('kost');
        return $query->result();
    }
    public function insertdata_masuk($data){
        return $this->db->insert('kost', $data);
    }
    public function getdata_masuk($id){
        $this->db->where('id', $id);
        $query = $this->db->get('kost');
        return $query->row();
    }
    public function updatedata_masuk($id, $data){
        $this->db->where('id', $id);
        $this->db->update('kost', $data);
    }
    public function deletedata_masuk($id){
        $this->db->where('id', $id);
        $this->db->delete('kost');
    }
    public function caridata_masuk($cari) {
        $this->db->like('nama', $cari);
        $this->db->or_like('alamat', $cari);
        $this->db->or_like('harga', $cari);
        $this->db->or_like('jenis', $cari);
        $query = $this->db->get('kost');
        return $query->result();
    }
    public function detail_masuk($id){
        $query = $this->db->get_where('kost', array('id' => $id));
        return $query->row_array();
    }
    public function login_verifikasi($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password); 
        $query = $this->db->get('login');
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function insert_visitor($ip_address) {
        $data = array(
            'ip_address' => $ip_address,
            'visit_date' => date('Y-m-d')
        );
        return $this->db->insert('visitors', $data);
    }
    public function count_visitors_all_time() {
        $this->db->select('COUNT(DISTINCT ip_address) as total');
        $query = $this->db->get('visitors');
        return $query->row()->total;
    }
}
?>
