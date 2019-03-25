<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('admin');
	}

	function tambah_admin(){
		$data = [
			"nama_admin" => $this->input->post('nama_admin', true),
			"username" => $this->input->post('username', true),
			"password" => md5($this->input->post('password', true))
		];

		$this->db->insert('admin', $data);
	}
}

 ?>