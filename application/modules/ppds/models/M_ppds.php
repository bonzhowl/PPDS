<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_ppds extends CI_Model {

function __construct()
	{
	parent::__construct();
	$this->db=$this->load->database('default',true);
	}

public function get_data()
	{
    	$query="SELECT a.*, TO_CHAR(a.tgl_lahir,'YYYY-MM-DD') as TGL_LAHIR, TO_CHAR(a.per_msk,'YYYY-MM-DD') as PER_MSK, TO_CHAR(a.per_lulus,'YYYY-MM-DD') as PER_LULUS, b.bagian
        from ppds a
        left join prodi_ppds b on a.kd_prodi = b.kd_prodi
        ORDER BY status asc";
        return $this->db->query($query)->result();
	}

public function getDataAkademik()
{
    $query="SELECT A.ID_PPDS, A.NAMA, A.NPM,B.LEVEL_KOMPETENSI, TO_CHAR(A.PER_MSK,'YYYY-MM-DD') as PER_MSK, TO_CHAR(A.PER_LULUS,'YYYY-MM-DD') as PER_LULUS, A.STATUS
    FROM PPDS A 
    LEFT JOIN AKADEMIK_PPDS B ON A.ID_AKADEMIK = B.ID_AKADEMIK
    ORDER BY STATUS ASC";
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
        $this->db->select("a.*,TO_CHAR(TGL_LAHIR,'YYYY-MM-DD') as TGL_LAHIR2, TO_CHAR(PER_MSK,'YYYY-MM-DD') as PER_MSK, TO_CHAR(PER_LULUS,'YYYY-MM-DD') as PER_LULUS");
        $this->db->from('PPDS a');
        $this->db->where('ID_PPDS', $ID_PPDS);
        return $this->db->get()->row();
    }

public function GetViewUpdateStatus($ID_PPDS)
    {
        $this->db->select("ID_PPDS,NAMA,NPM,LEVEL_KOMPETENSI, TO_CHAR(PER_MSK,'YYYY-MM-DD') as PER_MSK, TO_CHAR(PER_LULUS,'YYYY-MM-DD') as PER_LULUS, STATUS");
        $this->db->from('PPDS');
        $this->db->where('ID_PPDS', $ID_PPDS);
        return $this->db->get()->row();
    }
public function get_view_prodi(){
        $this->db->select('*');
        $this->db->from('PRODI_PPDS');
        return $this->db->get()->result();
    }
public function update($ID_PPDS,$TGL_LAHIR,$PER_MSK,$PER_LULUS,$data)
    {
        $this->db->where('ID_PPDS',$ID_PPDS);
        $this->db->set('TGL_LAHIR',"TO_DATE('".$TGL_LAHIR."','YYYY-MM-DD')", false, false);
        $this->db->set('PER_MSK',"TO_DATE('".$PER_MSK."','YYYY-MM-DD')", false, false);
        $this->db->set('PER_LULUS',"TO_DATE('".$PER_LULUS."','YYYY-MM-DD')", false, false);
        return $this->db->update('PPDS', $data);
       // echo $this->db->last_query();exit;
    }

function update_status($id_ppds){
        $this->db->set('STATUS', 'Lulus');
        $this->db->set('PER_LULUS',"SYSDATE", false, false);
        $this->db->where('ID_PPDS',$id_ppds);
        $this->db->update('PPDS');
    }

public function get_upload()
    {
        $query="select ID_PPDS, NPM, NAMA, UP_FILE from PPDS";
        return $this->db->query($query)->result();

    }
}