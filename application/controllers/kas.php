<?php 

class Kas extends CI_Controller{

	function __construct(){
		parent::__construct();
		cek_login();
		$this->load->model('m_kas');
		$this->load->helper('url');
		$this->load->library('form_validation');

	}

	function index(){

		$data['byrkas'] = $this->m_kas->tampil_data()->result();
		$this->load->view('templates/header',$data);
		$this->load->view('v_tampilkas',$data);
		$this->load->view('templates/footer');

	}

	function tambah(){

		$this->load->view('v_tambahkas');

	}

	function tambah_aksi(){

		$this->form_validation->set_rules('tgl_bayar', 'Tanggal', 'required');
		$this->form_validation->set_rules('absen', 'Absen', 'required|numeric');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jml_bayar', 'Jumlah Bayar', 'required|numeric');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('v_tambahkas');
		}else{
			$this->m_kas->input_data();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('kas/index');
		}

	}

	function hapus($id){

		$where = array('id_siswa' => $id);
		$this->m_kas->hapus_data($where, 'byrkas');
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('kas/index');
	}

	function edit($id){

		$where = array('id_siswa' => $id);
		$data['byrkas'] = $this->m_kas->edit_data($where, 'byrkas')->result();
		$this->load->view('v_editkas', $data);
	}

	function update(){

		$id = $this->input->post('id_siswa', true);
		$tgl_bayar = $this->input->post('tgl_bayar', true);
		$absen = $this->input->post('absen', true);
		$nama = $this->input->post('nama', true);
		$kelas = $this->input->post('kelas', true);
		$jurusan = $this->input->post('jurusan', true);
		$jml_bayar = $this->input->post('jml_bayar', true);

		$data = array(
			'tgl_bayar' => $tgl_bayar,
			'absen' => $absen,
			'nama' => $nama,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'jml_bayar' => $jml_bayar
		);

		$where = array(
			'id_siswa' => $id
		);

		$this->m_kas->update_data($where,$data,'byrkas');
		$this->session->set_flashdata('flash', 'Diubah');
		redirect('kas/index');
	}
}

 ?>