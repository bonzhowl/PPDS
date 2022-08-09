<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_download extends CI_Model
{
	
	public function download_data()
	{
		$query="select .up_file";
		return $this->db->get();
	}

	public function update($data, $ID_PPDS)
	{
		$this->db->where('ID_PPDS',$ID_PPDS);
		$this->db->update('PPDS', $data);
		// echo $this->db->last_query();
		// exit;
		return ($this->db->affected_rows() > 0) ? true : false;
	}
}