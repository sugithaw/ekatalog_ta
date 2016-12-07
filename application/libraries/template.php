<?php 
/**
* 
*/
class Template
{
	protected $_CI;
	function __construct()
	{
		# code...
		$this->_CI=&get_instance();
	}

	function display($template, $data=null)
	{
		# code...
		$data['_content']=$this->_CI->load->view($template,$data,TRUE);
		$data['_header']=$this->_CI->load->view('template_admin/header',$data,TRUE);
		$data['_topbar']=$this->_CI->load->view('template_admin/topbar',$data,TRUE);
		$data['_sidebar']=$this->_CI->load->view('template_admin/sidebar',$data,TRUE);
		$data['_footer']=$this->_CI->load->view('template_admin/footer',$data,TRUE);

		$this->_CI->load->view('template',$data);
	}
}
 ?>