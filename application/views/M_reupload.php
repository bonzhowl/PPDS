<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_reupload extends CI_Model
{

	var $tabel='PF_PPDS';

	//fungsi utk menampilkan seuruh data dari database
	function get_all()
	{
		$this->db->from($this->tabel);
		$query = $this->db->get();
		return $query->result();
	}
	//fungsi insert ke database
	function get_insert($data)
	{
		$this->db->insert($this->tabel, $data);
		return TRUE;
	}
}