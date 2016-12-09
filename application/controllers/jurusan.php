<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->model(array('m_jurusan' , 'm_prodi', 'm_view_prodi'));

		if(!$this->session->userdata('username')){
			redirect('web','refresh');
		}
	}

	public function tampilJurusan()
	{
		$data['title'] = "Data Jurusan";
		$data['jurusan'] = $this->m_jurusan->semua()->result();
		$this->template->display('jurusan/index',$data);
	}

	public function tambahJurusan()
	{
		# code...
		$data['title'] = "Form Tambah Jurusan";
		$this->template->display('jurusan/form-tambah-jurusan',$data);
	}

	public function prosesTambahJurusan()
	{
		# code...
		$info = array(
			'id_jurusan' => null ,
			'nama_jurusan' => $this->input->post('nama_jurusan')
			);
		$this->m_jurusan->tambahJurusan($info);
		redirect('jurusan/tampilJurusan','refresh');
	}

	public function editJurusan()
	{
		# code...
		$id = $this->uri->segment(3);
		$data['title'] = "Form Edit Jurusan";
		$data['jurusan'] = $this->m_jurusan->cekJurusan($id)->result();
		//echo $id;
		$this->template->display('jurusan/form-edit-jurusan',$data);
	}

	public function prosesEditJurusan()
	{
		# code...
		$info = array(
			'id_jurusan' => $this->input->post('id_jurusan') ,
			'nama_jurusan' => $this->input->post('nama_jurusan')
			);
		$this->m_jurusan->update($info);
		redirect('jurusan/tampilJurusan','refresh');
	}

	public function hapusJurusan()
	{
		# code...
		$id = $this->uri->segment(3);
		$this->m_jurusan->hapus($id);
		redirect('jurusan/tampilJurusan','refresh');
	}

	//----------------Prodi--------------------

	public function tampilProdi()
	{
		# code...
		$data['title'] = "Data Program Studi";
		//$data['v_prodi'] = $this->m_view_prodi->semua()->result();
		$data['prodi'] = $this->m_prodi->joinProdi()->result();
		//$data['jurusan'] = $this->m_jurusan->semua()->result();
		$this->template->display('jurusan/tampil-prodi',$data);
	}

	public function tambahProdi()
	{
		# code...
		$data['title'] = "Form Tambah Program Studi";
		$data['jurusan'] = $this->m_jurusan->semua()->result();
		$this->template->display('jurusan/form-tambah-prodi',$data);

	}

	public function prosesTambahProdi()
	{
		# code...
		$info = array(
			'id_prodi' => null ,
			'id_jurusan' => $this->input->post('id_jurusan') ,
			'nama_prodi' => $this->input->post('nama_prodi')
			);
		$this->m_prodi->tambah($info);
		redirect('jurusan/tampilProdi','refresh');
	}

	public function editProdi()
	{
		# code...
		$id = $this->uri->segment(3);
		$data['title'] = "Form Edit Program Studi";
		$data['prodi'] = $this->m_prodi->cekProdi($id)->result();
		$this->template->display('jurusan/form-edit-prodi',$data);
	}

	public function prosesEditProdi()
	{
		# code...
		$info = array(
			'id_prodi' => $this->input->post('id_prodi') ,
			'nama_prodi' => $this->input->post('nama_prodi')
			);
		$this->m_prodi->update($info);
		redirect('jurusan/tampilProdi','refresh');
	}

	public function hapusProdi()
	{
		# code...

		$id = $this->uri->segment(3);
		$this->m_prodi->hapus($id);
		redirect('jurusan/tampilProdi','refresh');
	}

}

/* End of file jurusan.php */
/* Location: ./application/controllers/jurusan.php */