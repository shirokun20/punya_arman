<?php 

class Registrasi extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_login',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){

		$this->form_validation->set_rules('nama_admin', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('ulangi-password', 'Konfirmasi Password', 'required');

		if ( $this->form_validation->run() == FALSE) {
			$this->load->view('v_input');
		} else {
			$this->m_data->tambah_admin();
			$this->session->set_flashdata('tambah', 'Ditambahkan');
			redirect('registrasi/index');
		}
	}
}

?>