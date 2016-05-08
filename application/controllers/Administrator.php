<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Administrator extends CI_Controller {

		public function __construct()
		{
			parent:: __construct();
			$admin_id=$this->session->userdata('id');
			
			if($admin_id == NULL)
			{
				redirect('admin','refresh');
			}
		}
		
		public function index()
		{
			$this->load->view('admin/admin_master');
		}
		
		public function logout()
		{
			$this->session->unset_userdata('admin_name');
			$this->session->unset_userdata('id');
			$sdata=array();
			$sdata['message']='You are successfully logout!';
			$this->session->set_userdata($sdata);
			redirect('admin','refresh');
		}
	}
?>