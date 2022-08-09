<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MX_Controller{
	var $data;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_index');
	}

	public function index()
	{
		$data['title'] 	  = "MASTER PPDS RSHS/UNPAD";
		$data['subtitle'] = "Home";
		$data['header']   = "header/header";
		$data['navbar']   = "navbar/navbar2";
		$data['sidebar']  = "sidebar/sidebar2";
		$data['body'] 	  = "v_index";
		$data['footer']   = "footer/footer";
		$this->load->view('template_index', $data);
	}
}