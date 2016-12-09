<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_prodi extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function semua()
	{
		# code...
		return $this->db->get('prodi');
	}
	public function joinProdi()
	{
		# code...
		$this->db->join('jurusan', 'jurusan.id_jurusan = prodi.id_jurusan');
		$this->db->order_by('nama_jurusan', 'asc');
		return $this->db->get('prodi');
	}
	public function tambah($info)
	{
		# code...
		$this->db->insert('prodi', $info);
	}
	public function cekProdi($id)
	{
		# code...
		$this->db->where('id_prodi', $id);
		return $this->db->get('prodi');
	}
	public function update($info)
	{
		# code...
		$id = $info['id_prodi'];
		$this->db->where('id_prodi', $id);
		$this->db->update('prodi', $info);
	}
	public function hapus($id)
	{
		# code...
		$this->db->where('id_prodi', $id);
		$this->db->delete('prodi');
	}

}

/* End of file m_prodi.php */
/* Location: ./application/models/m_prodi.php */