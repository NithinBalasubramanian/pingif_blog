<?php
class ERP extends CI_Controller
{
	public $CI = NULL;
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->library('session');
		$this->load->helper('url');
	}
	public function index()
	{
		if ($this->session->userdata('admin_id')) {
			$this->load->view('ERP/index');
		} else {
			$this->load->view('ERP/login');
		}

	}
}
?>