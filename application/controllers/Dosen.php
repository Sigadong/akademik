<?php 

class Dosen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dosen_model');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data['judul'] = "Daftar Dosen";
		$data['dosen'] = $this->Dosen_model->getAllDosen();
		if ( $this->input->post('keyword') ) {
			$data['dosen'] = $this->Dosen_model->cariDataDosen();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('dosen/index');
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
				'nidn' => [
					'field' => 'nidn',
					'label' => 'NIDN',
					'rules' => 'required|numeric|max_length[14]',
					'errors' => [
							'required' => '{field} harus didisi!',
							'numeric' => '{field} harus diisi angka!',
							'max_length' => '{field} angka melebihi batas! (14)',
						]
				],
				'telp' => [
					'field' => 'telp',
					'label' => 'Telp.',
					'rules' => 'required|numeric|max_length[15]',
					'errors' => [
							'required' => '{field} harus didisi!',
							'numeric' => '{field} harus diisi angka!',
							'max_length' => '{field} angka melebihi batas! (15)',
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
				$this->load->view('dosen/tambah');
				$this->load->view('templates/footer');
			
		} else {
			$this->Dosen_model->tambahDataDosen($foto);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('dosen');
		}
		
	}


	public function hapus($id)
	{
		$this->Dosen_model->hapusDataDosen($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('dosen');
	}


	public function detail($id)
	{
		$data['judul'] = "Detail Data Dosen";
		$data['dosen'] = $this->Dosen_model->getDosenById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('dosen/detail', $data);
		$this->load->view('templates/footer');
	}


	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data';
		$data['dosen'] = $this->Dosen_model->getDosenById($id);
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
				'nidn' => [
					'field' => 'nidn',
					'label' => 'NIDN',
					'rules' => 'required|numeric|max_length[14]',
					'errors' => [
							'required' => '{field} harus didisi!',
							'numeric' => '{field} harus diisi angka!',
							'max_length' => '{field} angka melebihi batas! (14)',
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
			$this->load->view('dosen/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Dosen_model->ubahDataDosen();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('dosen');
		}
	}



}