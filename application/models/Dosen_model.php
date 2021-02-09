<?php 


class Dosen_model extends CI_model {
	public function getAllDosen()
	{
		return $this->db->get('dosen')->result_array();
	}


	public function tambahDataDosen()
	{	
		$post = $this->input->post();
		$upload = $this->uploadFoto();

		$data = [
			"nidn" => $post['nidn'],
			"nama" => $post['nama'],
			"email" => $post['email'],
			"jenis_kelamin" => $post['jenis_kelamin'],
			"telp" => $post['telp'],
			"alamat" => $post['alamat'],
			"foto" => $upload
		];

		$this->db->insert('dosen', $data);
	}


	private function uploadFoto()
	{
			$config['upload_path'] = 'assets/image/dosen';
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

	public function ubahDataDosen()
	{
		$post = $this->input->post();

		if ( $_FILES['foto']['name'] ) {
			array_map('unlink', glob(FCPATH."assets/image/dosen/".$post['foto_lama'].".*"));
			$upload = $this->uploadFoto();
			$data = [
				"nidn" => $post['nidn'],
				"nama" => $post['nama'],
				"email" => $post['email'],
				"jenis_kelamin" => $post['jenis_kelamin'],
				"telp" => $post['telp'],
				"alamat" => $post['alamat'],
				"foto" => $upload		
			];
		} else { 
			$data = [
				"nidn" => $post['nidn'],
				"nama" => $post['nama'],
				"email" => $post['email'],
				"jenis_kelamin" => $post['jenis_kelamin'],
				"telp" => $post['telp'],
				"alamat" => $post['alamat'],
				"foto" => $post['foto_lama'] 
			];
		}

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('dosen', $data);

	}


	public function hapusDataDosen($id)
	{
		$this->hapusFoto($id);
		$this->db->delete('dosen', ['id' => $id]);
	}


	private function hapusFoto($id)
	{
		$idfoto = $this->getDosenById($id);
		if ($idfoto->foto !== "default.png") {
			$filename = explode(".", $idfoto->foto)[0];
			return array_map('unlink', glob(FCPATH."assets/image/dosen/$filename.*"));
		}
		
	}


	public function getDosenById($id)
	{
		return $this->db->get_where('dosen', ['id' => $id])->row_array();
	}


	public function cariDataDosen()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('nidn', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('telp', $keyword);
		$this->db->or_like('alamat', $keyword);
		return $this->db->get('dosen')->result_array();
	}





}