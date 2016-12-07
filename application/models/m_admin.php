<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_admin extends CI_Model {
		private $table = "admin";

		public function __construct()
			{
				parent::__construct();
				//Do your magic here
			}
		function cekAdmin($username, $password)
			{
				# code...
				$this->db->select('*');
				$this->db->from('admin');
				$this->db->where('username', $username);
				$this->db->where('password', $password);

				return $this->db->get();
			}
		function semua()
			{
				# code...
				return $this->db->get('admin');
			}
		function cekUser($user)
			{
				# code...
				$this->db->where('username', $user);
				return $this->db->get('admin');
			}
		function cekId($id)
		{
			# code...
			$this->db->where('id_admin', $id);
			return $this->db->get('admin');
		}
		function tambah($info)
			{
				# code...
				$this->db->insert('admin', $info);
			}
		function hapus($id)
			{
				# code...
				$this->db->where('id_admin', $id);
				$this->db->delete('admin');
			}
		function update($info)
			{
				# code...
				$id = $info['id_admin'];
				$this->db->where('id_admin', $id);
				$this->db->update('admin', $info);
			}	
	}
	
	/* End of file m_admin.php */
	/* Location: ./application/models/m_admin.php */
?>