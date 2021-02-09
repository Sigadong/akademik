<?php 


class Prodi_model extends CI_model {
	public function getAllProdi()
	{
		return $this->db->get('prodi')->result_array();
	}


	public function tambahDataProdi()
	{	
		$post = $this->input->post();
		$data = [
			"kode_prodi" => $post['kode_prodi'],
			"nama_prodi" => $post['nama_prodi'],
			"nama_fakultas" => $post['nama_fakultas'],
		];

		$this->db->insert('prodi', $data);
	}


	public function ubahDataProdi()
	{
		$post = $this->input->post();
		$data = [
			"kode_prodi" => $post['kode_prodi'],
			"nama_prodi" => $post['nama_prodi'],
			"nama_fakultas" => $post['nama_fakultas'],
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('prodi', $data);

	}




	public function hapusDataProdi($id)
	{
		$this->db->delete('prodi', ['id' => $id]);
	}


	public function getProdiById($id)
	{
		return $this->db->get_where('prodi', ['id' => $id])->row_array();
	}



	public function cariDataProdi()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('kode_prodi', $keyword);
		$this->db->or_like('nama_prodi', $keyword);
		$this->db->or_like('nama_fakultas', $keyword);
		return $this->db->get('prodi')->result_array();
	}




}