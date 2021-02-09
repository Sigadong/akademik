<?php 

class Prodi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Prodi_model');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data['judul'] = "Daftar Prodi";
		$data['prodi'] = $this->Prodi_model->getAllProdi();
		if ( $this->input->post('keyword') ) {
			$data['prodi'] = $this->Prodi_model->cariDataProdi();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('prodi/index');
		$this->load->view('templates/footer');
	}


	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data';

		$config = [
				'nama_prodi' => [
					'field' => 'nama_prodi',
					'label' => 'Nama Prodi',
					'rules' => 'required',
					'errors' => [
							'required' => '{field} harus didisi ',
						]
				],
				'nama_fakultas' => [
					'field' => 'nama_fakultas',
					'label' => 'Nama Fakultas',
					'rules' => 'required',
					'errors' => [
							'required' => '{field} harus didisi ',
						]
				],
				'kode_prodi' => [
					'field' => 'kode_prodi',
					'label' => 'Kode Prodi',
					'rules' => 'required|numeric|max_length[4]',
					'errors' => [
							'required' => '{field} harus didisi!',
							'numeric' => '{field} harus diisi angka!',
							'max_length' => '{field} angka melebihi batas! (4)',
						]
				]
		];

		$this->form_validation->set_rules($config);

		if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('templates/header', $data);
				$this->load->view('prodi/tambah');
				$this->load->view('templates/footer');
			
		} else {
			$this->Prodi_model->tambahDataProdi($foto);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('prodi');
		}
		
	}


	public function hapus($id)
	{
		$this->Prodi_model->hapusDataProdi($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('prodi');
	}


	public function detail($id)
	{
		$data['judul'] = "Detail Data Prodi";
		$data['prodi'] = $this->Prodi_model->getProdiById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('prodi/detail', $data);
		$this->load->view('templates/footer');
	}


	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data';
		$data['prodi'] = $this->Prodi_model->getProdiById($id);
		$data['jenis_kelamin'] = ['Perempuan', 'Laki-Laki'];

		$config = [
				'nama_prodi' => [
					'field' => 'nama_prodi',
					'label' => 'Nama Prodi',
					'rules' => 'required',
					'errors' => [
							'required' => '{field} harus didisi ',
						]
				],
				'nama_fakultas' => [
					'field' => 'nama_fakultas',
					'label' => 'Nama Fakultas',
					'rules' => 'required',
					'errors' => [
							'required' => '{field} harus didisi ',
						]
				],
				'kode_prodi' => [
					'field' => 'kode_prodi',
					'label' => 'Kode Prodi',
					'rules' => 'required|numeric|max_length[4]',
					'errors' => [
							'required' => '{field} harus didisi!',
							'numeric' => '{field} harus diisi angka!',
							'max_length' => '{field} angka melebihi batas! (4)',
						]
				]
		];

		$this->form_validation->set_rules($config);

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/header', $data);
			$this->load->view('prodi/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Prodi_model->ubahDataProdi();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('prodi');
		}
	}



}