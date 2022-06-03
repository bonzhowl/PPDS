<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class M_login extends CI_model
{
	function __construct()
	{
		parent::__construct();
		$this->db=$this->load->database('default',true);
	}

	public function cek_login($user, $data)
	{
		$this->db->select('*');
		$this->db->from('USER_PPDS');
		$this->db->where('USERNAME',$data["username"]);
		$this->db->where('PASSWORD',$data["password"]);
		
		return $this->db->get()->row();
		// $q="
		// 	SELECT * FROM USER_PPDS WHERE USERNAME='".$data['username']."' and PASSWORD='".$data["password"]."'
		// ";
		// var_dump($q);
		// return $this->db->query($q)->row();

	}
}