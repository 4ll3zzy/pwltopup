<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model {
    
    public function get($email){
        $this->db->where('email', $email); // Untuk menambahkan Where Clause : email='$email'
        $result = $this->db->get('user')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
}