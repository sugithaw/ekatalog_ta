<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library(array('template' , 'upload' ));
<<<<<<< HEAD
		$this->load->model(array('m_mhs'  , 'm_prodi', 'm_jurusan' ));
=======
		$this->load->model(array('m_mahasiswa'  , 'm_prodi' ));
>>>>>>> afa33100314e0d06b25e17115c0daa45ebeb79c2
		if(!$this->session->userdata('username')){
			redirect('web','refresh');
		}
	}
<<<<<<< HEAD
	public function tampilMahasiswa()
	{
		$data['title'] = "Data Mahasiswa";
		$data['mhs'] = $this->m_mhs->joinData()->result();
		$this->template->display('dataTA/tampil-mhs',$data);
	}
	public function tambahMahasiswa()
	{
		# code...
		$data['title']="Form Tambah Mahasiswa";
		$data['prodi']= $this->m_prodi->semua()->result();
		$data['jurusan']= $this->m_jurusan->semua->result();
		$this->template->display('dataTA/form-tambah-mhs',$data);
=======
	public function index()
	{
		
>>>>>>> afa33100314e0d06b25e17115c0daa45ebeb79c2
	}

}

/* End of file mahasiswa.php */
/* Location: ./application/controllers/mahasiswa.php */