<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class M_dashboard extends CI_model
{
	function __construct()
		{
			parent::__construct();
			$this->db = $this->load->database('default',true);
		}
	
	public function get_jumlah_ppds()
		{
			$query="select 'PPDS AKTIF' as nama, COUNT (*) as jumlah from PPDS";
			return $this->db->query($query)->row_array();
		}
	public function get_jumlah_prodi()
		{
			$query="select count(*) jumlah from prodi_ppds";
			return $this->db->query($query)->row_array();
		}
	public function get_ppds_prodi()
		{
			$query=	"select a.nama_prodi, count(b.kd_prodi) jumlah from ppds b 
      		left join prodi_ppds a on b.kd_prodi = a.kd_prodi
			group by a.nama_prodi";
			return $this->db->query($query)->result_array();
		}

}