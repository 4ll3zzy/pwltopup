<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile_legends extends CI_Controller {
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

        $this->load->view('admin/header');
		$this->load->view('admin/mobile_legends/sidebar_ml.php');
		$this->load->view('admin/mobile_legends/index', $data);
		$this->load->view('admin/footer');
	}

	function create(){
		$this->load->view('admin/header');
		$this->load->view('admin/mobile_legends/sidebar_ml.php');
		$this->load->view('admin/mobile_legends/create');
		$this->load->view('admin/footer');
	}

	function store() {
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->create();
		}else{
			$data = array(
				'nominal' => $this->input->post('nominal'),
				'harga' => $this->input->post('harga'),
			);
			$this->Mole_model->insert_data($data, 'mobile_legends');
			$this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
			Data Sukses ditambahkan
		  	</div>');
			redirect('admin/mobile_legends');
		}
	}

	function edit($id) {

		$querymole = $this->Mole_model->edit_data($id);
		$data = array('querymole' => $querymole);

		$this->load->view('admin/header');
		$this->load->view('admin/mobile_legends/sidebar_ml.php');
		$this->load->view('admin/mobile_legends/edit',$data);
		$this->load->view('admin/footer');
	}

	function update() {
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$data = array(
				'id' => $this->input->post('id'),
				'nominal' => $this->input->post('nominal'),
				'harga' => $this->input->post('harga'),
			);
		}
		$this->Mole_model->update_data($data, 'mobile_legends');
		$this->session->set_flashdata('update', '<div class="alert alert-primary" role="alert">
			Data Sukses diubah
		  	</div>');
			redirect('admin/mobile_legends');
	}

	function destroy($id) {
		$where = array('id' => $id);
		
		$this->Mole_model->destroy($where, 'mobile_legends');
		$this->session->set_flashdata('destroy', '<div class="alert alert-primary" role="alert">
			Data Sukses dihapus
		  	</div>');
			redirect('admin/mobile_legends');
	}

	function _rules() {


		$this->form_validation->set_rules('nominal', 'Nominal', 'required', array(
			'required' => '%s harus diisi'
		));
		$this->form_validation->set_rules('harga', 'Harga', 'required', array(
			'required' => '%s harus diisi'
		));
	}


}