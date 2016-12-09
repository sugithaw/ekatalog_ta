<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_admin');
		$this->load->library(array('template','upload'));
		$this->load->helper('url');

		if(!$this->session->userdata('username')){
			redirect('web','refresh');
		}
	}

	public function index()
	{
		$data['title'] = "Home";
		$this->template->display('dashboard/index',$data);
	}

	public function admin()
	{
		# code...
		$data['title'] = "Data Admin";
		$data['petugas'] = $this->m_admin->semua()->result();
		$this->template->display('dashboard/petugas',$data);
	}

	public function form_tambah()
	{
		# code...
		$data['title'] = "Tambah Admin";
		$this->template->display('dashboard/form-tambah',$data);
	}

	public function tambahAdmin()
	{
		# code..
		$user = $this->input->post('username');
		$cek = $this->m_admin->cekUser($user);
		if($cek->num_rows()>0){
			$data['message']="<div class='alert alert-danger'>Username sudah digunakan</div>";
			$this->template->display('dashboard/form-tambah',$data);
		}else{
			//konfigurasi upload gambar
			$config['upload_path'] = './assets/img/admin/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '99999999';
			$config['max_width']  = '999999999';
			$config['max_height']  = '999999999';
			$config['file_name']  = $this->input->post('nip');
			
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('image')){
				$gambar='default.jpg';
			}else{
				$gambar=$this->upload->file_name;
			}

			echo $gambar;
			
			$info = array(
				'id_admin' => null ,
				'nip' =>$this->input->post('nip') ,
				'nama' =>$this->input->post('nama') ,
				'alamat' =>$this->input->post('alamat') ,
				'no_tlp' =>$this->input->post('no_tlp') ,
				'username' =>$this->input->post('username') ,
				'password' =>md5($this->input->post('password')) ,
				'image' =>$gambar  
				);
			#$this->m_admin->tambah($info);
			#redirect('dashboard/admin');
		}

	}

	function form_edit()
	{
		# code...
		$id = $this->uri->segment(3);
		$data['title'] = "Form Edit Admin";
		$data['admin'] = $this->m_admin->cekId($id)->result();
		$this->template->display('dashboard/form-edit',$data);
	}

	function proses_edit()
	{
		# code...
		#echo "".$id;
			$info = array(
				'id_admin' => $this->input->post('id') ,
				'nip' =>$this->input->post('nip') ,
				'nama' =>$this->input->post('nama') ,
				'alamat' =>$this->input->post('alamat') ,
				'no_tlp' =>$this->input->post('no_tlp') ,
				'username' =>$this->input->post('username') ,
				//'password' =>$this->input->post('password') ,
				'image'=>''
				);
			$img_tmp = $this->input->post('img_tmp');
			#echo $img_tmp;

		//konfigurasi upload gambar
			$config['upload_path'] = 'assets/img/admin';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '99999999';
			$config['max_width']  = '99999999';
			$config['max_height']  = '99999999';
			$config['file_name']  = $info['nip'];
			$config['overwrite']  = TRUE;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$cek_img =$_FILES['image']['name'];
			#echo $cek_img;
			if ($cek_img !="") {
				# code...
				#echo "Isi";
				if (!$this->upload->do_upload('image')) {
					# code...
					echo "upload gagal";
				}else{
					$info['image'] = $this->upload->data('file_name');

				}
			}else{
				$info['image'] = $img_tmp;
				#echo "Upload Kosong";
			}

			#echo $info['image'];
			#echo $info['nip'];


			$this->m_admin->update($info);
			
			redirect('dashboard/admin','refresh');

	}

	public function hapus()
	{
		# code...
		$id = $this->uri->segment(3);
		$this->m_admin->hapus($id);
		redirect('dashboard/admin','refresh');
	}

	function logout()
	{
		# code...
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		redirect('web','refresh');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
?>