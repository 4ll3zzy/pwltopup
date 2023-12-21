<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('login');
            redirect($url);
		};
		$this->load->model('Mole_model');
	}
	
	public function index()
	{
		
		$data['mobile_legends'] = $this->Mole_model->get_data('mobile_legends')->result();

        $this->load->view('home/header');
		$this->load->view('mobile_legends/order', $data);
	}
}