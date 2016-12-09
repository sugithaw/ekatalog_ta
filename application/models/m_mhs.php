<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mhs extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function semua()
	{
		# code...
		$this->db->get('mahasiswa');
	}

	public function joinData()
	{
		# code...
		$this->db->join('jurusan', 'jurusan.id_jurusan = mahasiswa.id_jurusan');
		$this->db->join('prodi', 'prodi.id_prodi = mahasiswa.id_prodi');
		return $this->db->get('mahasiswa');
	}

}

/* End of file m_mhs.php */
/* Location: ./application/models/m_mhs.php */