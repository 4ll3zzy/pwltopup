<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mole_model extends CI_Model
{
    function get_data($table) {
        return $this->db->get($table);
    }

    function insert_data($data, $table) {
        $this->db->insert($table,$data);
    }

    function edit_data($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('mobile_legends');
        return $query->row();
    }

    function update_data($data, $table) {
        $this->db->where('id', $data['id']);
        $this->db->update($table, $data);
    }

    function destroy($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }
}