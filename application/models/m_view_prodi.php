<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_view_prodi extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

	public function semua()
	{
		# code...
		return $this->db->get('view_prodi');
	}

}

/* End of file m_view_prodi.php */
/* Location: ./application/models/m_view_prodi.php */