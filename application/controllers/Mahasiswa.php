<?php 

class Mahasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data['judul'] = "Daftar Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		if ( $this->input->post('keyword') ) {
			$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index');
		$this->load->view('templates/footer');
	}


	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data';

		$config = [
				'nama' => [
					'field' => 'nama',
					'label' => 'Nama',
					'rules' => 'required',
					'errors' => [
							'required' => '{field} harus didisi ',
						]
				],
				'npm' => [
					'field' => 'npm',
					'label' => 'NPM',
					'rules' => 'required|numeric|max_length[10]',
					'errors' => [
							'required' => '{field} harus didisi!',
							'numeric' => '{field} harus diisi angka!',
							'max_length' => '{field} angka melebihi batas! (10)',
						]
				],
				'email' => [ 
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'required|valid_email',
					'errors' => [
							'required' => '{field} harus didisi!',
							'valid_email' => '{field} tidak valid!',
						]
				],
				'alamat' => [ 
					'field' => 'alamat',
					'label' => 'Alamat',
					'rules' => 'required',
					'errors' => [
							'required' => '{field} lengkap harus didisi!',
						]
				]
		];

		$this->form_validation->set_rules($config);

		if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('templates/header', $data);
				$this->load->view('mahasiswa/tambah');
				$this->load->view('templates/footer');
			
		} else {
			$this->Mahasiswa_model->tambahDataMahasiswa($foto);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('mahasiswa');
		}
		
	}


	public function hapus($id)
	{
		$this->Mahasiswa_model->hapusDataMahasiswa($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('mahasiswa');
	}


	public function detail($id)
	{
		$data['judul'] = "Detail Data Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/detail', $data);
		$this->load->view('templates/footer');
	}



	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$data['jurusan'] = ['Teknik Informatika', 'Teknik Industri', 'Teknik Sipil', 'Teknik Elektro', 'Teknik Lingkungan'];
		$data['jenis_kelamin'] = ['Perempuan', 'Laki-Laki'];

		$config = [
				'nama' => [
					'field' => 'nama',
					'label' => 'Nama',
					'rules' => 'required',
					'errors' => [
							'required' => '{field} harus didisi ',
						]
				],
				'alamat' => [
					'field' => 'alamat',
					'label' => 'Alamat',
					'rules' => 'required',
					'errors' => [
							'required' => '{field} harus didisi ',
						]
				],
				'npm' => [
					'field' => 'npm',
					'label' => 'NPM',
					'rules' => 'required|numeric|max_length[10]',
					'errors' => [
							'required' => '{field} harus didisi!',
							'numeric' => '{field} harus diisi angka!',
							'max_length' => '{field} angka melebihi batas! (10)',
						]
				],
				'email' => [ 
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'required|valid_email',
					'errors' => [
							'required' => '{field} harus didisi!',
							'valid_email' => '{field} tidak valid!',
						]
				]
		];

		$this->form_validation->set_rules($config);

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Mahasiswa_model->ubahDataMahasiswa();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('mahasiswa');
		}
	}



}