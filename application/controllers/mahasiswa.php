<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library(array('template' , 'upload' ));
		$this->load->model(array('m_mahasiswa'  , 'm_prodi' ));
		if(!$this->session->userdata('username')){
			redirect('web','refresh');
		}
	}
	public function index()
	{
		
	}

}

/* End of file mahasiswa.php */
/* Location: ./application/controllers/mahasiswa.php */