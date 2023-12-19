<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends MY_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('Login_model');
  }
  public function index(){
    if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
      redirect('home/index'); // Redirect ke page home
    // function render_login tersebut dari file core/MY_Controller.php
    $this->render_login('login'); // Load view login.php
  }
  public function login(){
    $email = $this->input->post('email'); // Ambil isi dari inputan email pada form login
    $password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
    $user = $this->Login_model->get($email); // Panggil fungsi get yang ada di Login_model.php
    if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
      $this->session->set_flashdata('message', 'email tidak ditemukan'); // Buat session flashdata
      redirect('login'); // Redirect ke halaman login
    }else{
      if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
        $session = array(
          'authenticated'=>true, // Buat session authenticated dengan value true
          'email'=>$user->email,  // Buat session email
          'role'=>$user->role // Buat session role
        );
        $this->session->set_userdata($session); // Buat session sesuai $session
        redirect('home'); // Redirect ke halaman home
      }else{
        $this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
        redirect('login'); // Redirect ke halaman login
      }
    }
  }
  public function logout(){
    $this->session->sess_destroy(); // Hapus semua session
    redirect('login'); // Redirect ke halaman login
  }
}