<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AboutModel extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->db=$this->load->database('default',true);
	}

}

/* End of file AboutModel.php */
/* Location: ./application/models/AboutModel.php */