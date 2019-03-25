<?php 

class Iuran extends CI_Controller{

	function __construct(){
		parent::__construct();
		cek_login();
		$this->load->model('m_iuran');
		$this->load->helper('url');

	}

	function index(){

		$data['byriuran'] = $this->m_iuran->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('v_tampiliuran', $data);
		$this->load->view('templates/footer');

	}

	function tambah(){

		$this->load->view('v_tambahiuran');

	}

	function tambah_aksi(){

		$tgl_bayar = $this->input->post('tgl_bayar');
		$absen = $this->input->post('absen');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$jml_bayar = $this->input->post('jml_bayar');
		$jenis_iuran = $this->input->post('jenis_iuran');

		$data = array(
			'tgl_bayar' => $tgl_bayar,
			'absen' => $absen,
			'nama' => $nama,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'jml_bayar' => $jml_bayar,
			'jenis_iuran' => $jenis_iuran
		);
		$this->m_iuran->input_data($data, 'byriuran');
		redirect('iuran/index');

	}

	function hapus($id){

		$where = array('id_siswa' => $id);
		$this->m_iuran->hapus_data($where, 'byriuran');
		redirect('iuran/index');
	}

	function edit($id){

		$where = array('id_siswa' => $id);
		$data['byriuran'] = $this->m_iuran->edit_data($where, 'byriuran')->result();
		$this->load->view('v_editiuran', $data);
	}

	function update(){

		$id = $this->input->post('id_siswa');
		$tgl_bayar = $this->input->post('tgl_bayar');
		$absen = $this->input->post('absen');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$jml_bayar = $this->input->post('jml_bayar');
		$jenis_iuran = $this->input->post('jenis_iuran');

		$data = array(
			'tgl_bayar' => $tgl_bayar,
			'absen' => $absen,
			'nama' => $nama,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'jml_bayar' => $jml_bayar,
			'jenis_iuran' => $jenis_iuran
		);

		$where = array(
			'id_siswa' => $id
		);

		$this->m_iuran->update_data($where,$data,'byriuran');
		redirect('iuran/index');
	}
}

 ?>