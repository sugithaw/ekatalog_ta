<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jurusan extends CI_Model {
	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	
	public function semua()
	{
		# code...
		return $this->db->get('jurusan');
	}
	public function tambahJurusan($info)
	{
		# code...
		$this->db->insert('jurusan', $info);
	}
	
	public function cekJurusan($id)
	{
		# code...
		$this->db->where('id_jurusan', $id);
		return $this->db->get('jurusan');
	}

	public function update($info)
	{
		# code...
		$id = $info['id_jurusan'];
		$this->db->where('id_jurusan', $id);
		$this->db->update('jurusan',$info);
	}

	public function hapus($id)
	{
		# code...
		$this->db->where('id_jurusan', $id);
		$this->db->delete('jurusan');
	}

}

/* End of file m_jurusan.php */
/* Location: ./application/models/m_jurusan.php */