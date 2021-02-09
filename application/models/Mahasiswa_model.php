<?php 


class Mahasiswa_model extends CI_model {

	public function getAllMahasiswa()
	{
		return $this->db->get('mahasiswa')->result_array();
	}


	public function tambahDataMahasiswa()
	{	
		$post = $this->input->post();
		$upload = $this->uploadFoto();

		$data = [
			"nama" => $post['nama'],
			"npm" => $post['npm'],
			"email" => $post['email'],
			"jurusan" => $post['jurusan'],
			"jenis_kelamin" => $post['jenis_kelamin'],
			"alamat" => $post['alamat'],
			"foto" => $upload
		];

		$this->db->insert('mahasiswa', $data);
	}


	private function uploadFoto()
	{
			$config['upload_path'] = 'assets/image';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = 'foto-'. substr(md5(rand()),0,10);
			$config['detect_mime'] = true;
			$config['file_ext_tolower'] = true;
			$config['max_size'] = 1024;
			$config['overwrite'] = true;

		$this->load->library('upload', $config);

	 	if ( $this->upload->do_upload('foto') ) {
	 		return $this->upload->data("file_name");
	 	}
	 	return "default.png";
	}

	public function ubahDataMahasiswa()
	{
		$post = $this->input->post();

		if ( $_FILES['foto']['name'] ) {
			// unlink(FCPATCH.'assets/image/'. $post['foto_lama']);
			array_map('unlink', glob(FCPATH."assets/image/".$post['foto_lama'].".*"));
			$upload = $this->uploadFoto();
			$data = [
				"nama" => $post['nama'],
				"npm" => $post['npm'],
				"email" => $post['email'],
				"jurusan" => $post['jurusan'],
				"jenis_kelamin" => $post['jenis_kelamin'],
				"alamat" => $post['alamat'],
				"foto" => $upload	
			];
		} else { 
			$data = [
				"nama" => $post['nama'],
				"npm" => $post['npm'],
				"email" => $post['email'],
				"jurusan" => $post['jurusan'],
				"jenis_kelamin" => $post['jenis_kelamin'],
				"alamat" => $post['alamat'],
				"foto" => $post['foto_lama']
			];
		}

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('mahasiswa', $data);
	}


	public function hapusDataMahasiswa($id)
	{
		$this->hapusFoto($id);
		$this->db->delete('mahasiswa', ['id' => $id]);
	}

	private function hapusFoto($id)
	{
		$idfoto = $this->getMahasiswaById($id);
		if ($idfoto->foto !== "default.png") {
			$filename = explode(".", $idfoto->foto)[0];
			return array_map('unlink', glob(FCPATH."assets/image/$filename.*"));
		}
		
	}


	public function getMahasiswaById($id)
	{
		return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
	}


	public function cariDataMahasiswa()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('npm', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('jurusan', $keyword);
		$this->db->or_like('alamat', $keyword);
		return $this->db->get('mahasiswa')->result_array();
	}





}