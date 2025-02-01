<?php
class Home extends CI_Controller
{
	public $CI = NULL;
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->helper('url');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('home/home');
	}

	public function products($id, $product)
	{
		$data['data'] = $product;
		$data['id'] = $id;
		$this->load->view('home/products', $data);
	}
}