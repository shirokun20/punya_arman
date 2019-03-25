<?php 

class M_kas extends CI_Model{
	function tampil_data(){
		return $this->db->get('byrkas');
	}

	function input_data(){

		$data = [
		"tgl_bayar" => $this->input->post('tgl_bayar', true),
		"absen" => $this->input->post('absen', true),
		"nama" => $this->input->post('nama', true),
		"kelas" => $this->input->post('kelas', true),
		"jurusan" => $this->input->post('jurusan', true),
		"jml_bayar" => $this->input->post('jml_bayar', true)
		];

		$this->db->insert('byrkas', $data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

 ?>