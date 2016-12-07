<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model(array('m_admin'));
		#if ($this->session->userdata('username')){
			#redirect('dashboard','refresh');
		#}
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('web/index');
	}
	public function login_proses()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$cek = $this->m_admin->cekAdmin($username ,$password);
		if($cek->num_rows()>0){
			//login berhasil
			
			$this->session->set_userdata('username', $username);
			redirect('dashboard','refresh');
		}else{
			//login gagal
			$this->session->flashdata('message', 'Username Atau Password Salah');
			redirect('web');
		}
	}

}

/* End of file web.php */
/* Location: ./application/controllers/web.php */