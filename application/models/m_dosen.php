<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	
	public function semua()
	{
		# code...
		return $this->db->get('dosen');
	}
	public function cekNip($nip)
	{
		# code...
		$this->db->where('nip', $nip);
		return $this->db->get('dosen');
	}
	function tambahDosen($info)
	{
		# code...
		$this->db->insert('dosen', $info);
	}
	function cekDosen($id)
	{
		# code...
		$this->db->where('id_dosen', $id);
		return $this->db->get('dosen');
	}
	function update($info)
	{
		# code...
		$id = $info['id_dosen'];
		$this->db->where('id_dosen', $id);
		$this->db->update('dosen', $info);

	}
	function hapus($id)
	{
		# code...
		$this->db->where('id_dosen', $id);
		$this->db->delete('dosen');
	}
	function cari($cari)
	{
		# code...
		$this->db->select('*');
		$this->db->from('dosen');
		$this->db->like('nama',$cari);

		return $this->db->get();
	}

}

/* End of file m_dosen.php */
/* Location: ./application/models/m_dosen.php */
?>