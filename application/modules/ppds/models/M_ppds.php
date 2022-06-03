<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_ppds extends CI_Model {

function __construct()
	{
	parent::__construct();
	$this->db=$this->load->database('default',true);
	}

public function get_data()
	{
	$query="select a.id_ppds, a.kd_prodi, b.nama_prodi, a.nik, a.nama, a.npm, a.tmpt_lahir, TO_CHAR(a.tgl_lahir,'DD-MM-YYYY') as TGL_LAHIR, a.jns_kelamin, a.agama, a.alamat, a.no_hp, a.email, a.up_file, TO_CHAR(a.per_msk,'DD-MM-YYYY') as PER_MSK
        from ppds a left join prodi_ppds b on a.kd_prodi = b.kd_prodi";
	return $this->db->query($query)->result();
	}

public function delete($ID_PPDS)
    {
        $this->db->where('ID_PPDS',$ID_PPDS);
        $this->db->delete('PPDS');
    }

private function getseq()
    {
        $query="select seq_ppds.nextval id from dual";
        return $this->db->query($query)->row();
    }

public function insert($TGL_LAHIR,$PER_MSK,$data)
    {
        $data['ID_PPDS']=$this->getseq()->ID;
        $this->db->set('TGL_LAHIR',"TO_DATE('".$TGL_LAHIR."','YYYY-MM-DD')", false, false);
        $this->db->set('PER_MSK',"TO_DATE('".$PER_MSK."','YYYY-MM-DD')", false, false);
        return $this->db->insert('PPDS',$data);
    }
public function get_view_update($ID_PPDS){
        $this->db->select("a.*,TO_CHAR(TGL_LAHIR,'YYYY-MM-DD') as TGL_LAHIR2,TO_CHAR(PER_MSK,'YYYY-MM-DD') as PER_MSK2 ");
        $this->db->from('PPDS a');
        $this->db->where('ID_PPDS', $ID_PPDS);
        return $this->db->get()->row();
    }
public function get_view_prodi(){
        $this->db->select('*');
        $this->db->from('PRODI_PPDS');
        return $this->db->get()->result();
    }
public function update($ID_PPDS,$TGL_LAHIR,$PER_MSK,$data)
    {
        //var_dump($data);
        // exit;
        $this->db->where('ID_PPDS',$ID_PPDS);
        $this->db->set('TGL_LAHIR',"TO_DATE('".$TGL_LAHIR."','YYYY-MM-DD')", false, false);
        $this->db->set('PER_MSK',"TO_DATE('".$PER_MSK."','YYYY-MM-DD')", false, false);
        return $this->db->update('PPDS', $data);
       // echo $this->db->last_query();exit;
    }
public function get_upload()
    {
        $query="select ID_PPDS, NPM, NAMA, UP_FILE from PPDS";
        return $this->db->query($query)->result();

    }
}