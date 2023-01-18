<?php 

class Model_profile extends CI_Model{
    public function tampilprofile() {
        return $this->db->get('user');
    }
    public function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}