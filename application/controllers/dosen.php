<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library(array('template' , 'upload' ));
		$this->load->model('m_dosen');
		if(!$this->session->userdata('username')){
			redirect('web','refresh');
		}
	}

	public function tampilDosen()
	{
		$data['title'] = "Data Dosen";
		$data['dosen'] = $this->m_dosen->semua()->result();
		$this->template->display('dosen/index',$data);
	}

	public function tambahDosen()
	{
		# code...
		$data['title'] = "Tambah Dosen";
		$this->template->display('dosen/form-tambah-dosen',$data);
	}

	public function prosesTambah()
	{
		# code...
		$info = array(
			'id_dosen' => null ,
			'nip' => $this->input->post('nip') ,
			'nama' => $this->input->post('nama') ,
			'no_tlp' => $this->input->post('no_tlp') ,
			'email' => $this->input->post('email') ,
			'alamat' => $this->input->post('alamat') 
			);
		$this->m_dosen->tambahDosen($info);
		redirect('dosen/tampilDosen','refresh');
	}

	public function editDosen()
	{
		# code...
		$id = $this->uri->segment(3);
		$data['title'] = "Form Edit Dosen";
		$data['dosen'] = $this->m_dosen->cekDosen($id)->result();
		#echo $id;
		$this->template->display('dosen/form-edit-dosen',$data);
	}

	public function prosesEditDosen()
	{
		# code...
		$info = array(
			'id_dosen' => $this->input->post('id_dosen') ,
			'nip' => $this->input->post('nip') ,
			'nama' => $this->input->post('nama') ,
			'no_tlp' => $this->input->post('no_tlp') ,
			'email' => $this->input->post('email') ,
			'alamat' => $this->input->post('alamat') 
			);
		$this->m_dosen->update($info);
		redirect('dosen/tampilDosen','refresh');
	}

	function cari()
	{
		# code...
		$data['title'] = "Data Dosen";
		$cari = $this->input->post('cari');
		$data['dosen'] = $this->m_dosen->cari($cari)->result();
		$this->session->set_flashdata('cari',$cari);
		
		$this->template->display('dosen/index',$data);
		/*
		if ($cek->num_rows()>0) {
			# code...
			$data['dosen'] = $cek->result();
			$this->template->display('dosen/tampilDosen',$data);

		}else{
			$data['dosen'] = $cek->result();
			$this->template->display('dosen/tampilDosen',$data)	;		
		}*/
		
	}

	public function hapusDosen()
	{
		# code...
		$id = $this->uri->segment(3);
		$this->m_dosen->hapus($id);
		redirect('dosen/tampilDosen','refresh');
	}

}

/* End of file dosen.php */
/* Location: ./application/controllers/dosen.php */
?>