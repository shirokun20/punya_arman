<?php 

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		cek_login();
	}

	function index()
	{
		$data['judul'] = 'Di Kas In Aja';
		$this->load->view('templates/header', $data);
		$this->load->view('v_home');
		$this->load->view('templates/footer');
	}
}
 