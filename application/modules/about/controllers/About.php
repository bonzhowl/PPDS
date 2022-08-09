<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends MX_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AboutModel');
	}

	public function index()
	{
		$data['title']	= "MASTER PPDS RSHS/UNPAD";
		$data['subtitle']	= "About";
		$data['header']	= "header/header";
		$data['navbar']	= "navbar/navbar2";
		$data['sidebar']	= "sidebar/sidebar2";
		$data['body']	= "aboutView";
		$data['footer']	= "footer/footer";

		//user login
		//$data['nama']		= $this->nama;
		//$data['akses']		= $this->akses;
		$this->load->view('templateabout', $data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */