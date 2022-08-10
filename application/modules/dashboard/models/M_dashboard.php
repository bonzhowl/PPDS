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
		$query="select 'PPDS' status, count(status) as total 
		from ppds group by status 
		order by status asc";
		return $this->db->query($query)->result_array();
	}

	public function get_jumlah_prodi()
	{
		$query="select count(*) jumlah from prodi_ppds";
		return $this->db->query($query)->row_array();
	}

	public function getjumlahppdsAktif()
	{
		$query="select a.bagian, count(b.kd_prodi) jumlah 
		from ppds b 
  		left join prodi_ppds a on b.kd_prodi = a.kd_prodi
  		where status = 'Aktif'
		group by a.bagian";
		return $this->db->query($query)->result_array();
	}

	public function getjumlahppdsLulus()
	{
		$query="select a.bagian, count(b.kd_prodi) jumlah 
		from ppds b 
  		left join prodi_ppds a on b.kd_prodi = a.kd_prodi
  		where status = 'Lulus'
		group by a.bagian";
		return $this->db->query($query)->result_array();
	}

	// public function getpersenppdsLulus()
	// {
	// 	$query="select to_char(per_lulus, 'YYYY-MM-DD') lulus, COUNT(*) total 
	// 	from ppds
	// 	where per_lulus>= sysdate - 1830
	// 	--data ppds lulus 5 tahun kebelakang
	// 	GROUP BY to_char(per_lulus, 'YYYY-MM-DD')
	// 	ORDER BY to_char(per_lulus, 'YYYY-MM-DD') ASC";
	// 	return $this->db->query($query)->result_array();
	// }

	public function getdatalulus()
	{
		$query="select a.*, b.*
		from ppds a
		left join prodi_ppds b on a.kd_prodi = b.kd_prodi
	    where to_char(per_lulus, 'YYYY-MM-DD') is NOT NULL
	    order by to_char(per_lulus, 'YYYY-MM-DD') desc";
		return $this->db->query($query)->result_array();
	}

	public function getdataaktif()
	{
		$query="select a.*, b.*
		from ppds a
		left join prodi_ppds b on a.kd_prodi = b.kd_prodi
	    where status = 'Aktif'
	    order by to_char(per_msk, 'YYYY-MM-DD')";
		return $this->db->query($query)->result_array();
	}

	public function getdataprodi()
	{
		$query="select * 
		from prodi_ppds";
		return $this->db->query($query)->result_array();
	}

}