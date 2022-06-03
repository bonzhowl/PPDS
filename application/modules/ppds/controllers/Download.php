<?php

class Download extends CI_Controller
{

	public function __construct(){
		parent::__construct();
			$this->load->model('M_download');
			$this->load->library('session');
			$this->load->helper(array('url','download'));
			$this->load->database();
	}

	public function file($name){
		$dir='./personal_file/';
		$file=$name;
		force_download($dir.$file, NULL);
		// $name = $this->uri->segment(3);
		// $data = file_get_contents(base_url('/personal_file'.$name));
		// force_download($name, $data);
	}
}