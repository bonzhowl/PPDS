<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppds extends MX_Controller
{
	
	function __construct(){
		parent::__construct();
			$this->load->model('M_ppds');
			$this->load->library('session');
			$session_data = $this->session->userdata('sess_user');
            if ($session_data)
            {
              $this->nama=$session_data['nama'];
              $this->akses=$session_data['akses'];
              
            }
            else
              {
                redirect('login','refresh');
              }
		// 	$data_session = $this->session->userdata('sess_user');
		
		// if ($data_session){
		// 	$this->load->model('M_ppds');
		// }else{
		// 	redirect('login','refresh');
		// }

	}

	public function index_login(){	
		$data['title'] 	   = "MASTER PPDS RSHS/UNPAD";
		$data['subtitle']  = "DATA PPDS RSHS/UNPAD";
		$data['header']    = "header/header";
		$data['navbar']    = "navbar/navbar";
		$data['sidebar']   = "sidebar/sidebar";
		$data['body'] 	   = "v_dashboard";
		$data['footer']    = "footer/footer";

		// user login
	    $data['nama']     = $this->nama; 
	    $data['akses']		= $this->akses;
			$this->load->view('template', $data);
	}

	public function index(){	
		$data['title'] 	   = "MASTER PPDS RSHS/UNPAD";
		$data['subtitle']  = "DATA PPDS RSHS/UNPAD";
		$data['header']    = "header/header";
		$data['navbar']    = "navbar/navbar";
		$data['sidebar']   = "sidebar/sidebar";
		$data['body'] 	   = "ppds_view";
		$data['footer']    = "footer/footer";

		// user login
	    $data['nama']     = $this->nama; 
	    $data['akses']		= $this->akses;
	    
	    // data ppds & prodi
		$data['list_ppds'] = $this->M_ppds->get_data();
		$data['data_ppds']   = $this->M_ppds->get_view_update($ID_PPDS="");
		$data['data_prodi']  = $this->M_ppds->get_view_prodi();
		$data['m_data_ppds'] = $this->M_ppds->get_data();
		//--untuk liat data--
		// var_dump($data['list_ppds']);
		// exit;
		// untuk buat password
		// echo(md5('adminkomkordik'));
			$this->load->view('template', $data);
	}

	public function view_upload(){
		$data['title'] 	   = "MASTER PPDS RSHS/UNPAD";
		$data['subtitle']  = "Upload Personal File PPDS";
		$data['header']    = "header/header";
		$data['navbar']    = "navbar/navbar";
		$data['sidebar']   = "sidebar/sidebar";
		$data['body'] 	   = "v_upload";
		$data['footer']    = "footer/footer";

		// user login
	    $data['nama']     = $this->nama; 
	    $data['akses']		= $this->akses;

		$data['data_ppds'] = $this->M_ppds->get_upload();

			$this->load->view('template', $data);
	} 

	public function view_download(){
		$data['title']	   = "MASTER PPDS RSHS/UNPAD";
		$data['subtitle']  = "Download Personal File PPDS";
		$data['header']	   = "header/header";
		$data['navbar']	   = "navbar/navbar";
		$data['sidebar']   = "sidebar/sidebar";
		$data['body']	     = "v_download";
		$data['footer']	   = "footer/footer";

		// user login
	    $data['nama']     = $this->nama; 
	    $data['akses']		= $this->akses;

		$data['data_ppds']  = $this->M_ppds->get_upload();

					$this->load->view('template', $data);
	}

	public function view_insert(){
		$data['title'] 	  	 = "MASTER PPDS RSHS/UNPAD";
		$data['subtitle'] 	 = "Tambah PPDS";
		$data['header']   	 = "header/header";
		$data['navbar']   	 = "navbar/navbar";
		$data['sidebar']  	 = "sidebar/sidebar";
		$data['body'] 	  	 = "ppds_view";
		$data['footer']   	 = "footer/footer";

		// user login
	    $data['nama']     = $this->nama; 
	    $data['akses']		= $this->akses;


		$data['list_ppds']	 = $this->M_ppds->get_data();
		$data['data_ppds']   = $this->M_ppds->get_view_update($ID_PPDS="");
		$data['data_prodi']  = $this->M_ppds->get_view_prodi();
		$data['m_data_ppds'] = $this->M_ppds->get_data();

		
					$this->load->view('template', $data);
	}

	public function insert(){
		$data['title'] 	  	 = "MASTER PPDS RSHS/UNPAD";
		$data['subtitle'] 	 = "Tambah PPDS";
		$data['header']   	 = "header/header";
		$data['navbar']   	 = "navbar/navbar";
		$data['sidebar']  	 = "sidebar/sidebar";
		$data['body'] 	  	 = "tb_ppds";
		$data['footer']   	 = "footer/footer";

		// user login
	    $data['nama']     = $this->nama; 
	    $data['akses']		= $this->akses;

		$data['list_ppds']	 = $this->M_ppds->get_data();
		$data['data_ppds']   = $this->M_ppds->get_view_update($ID_PPDS="");
		$data['data_prodi']  = $this->M_ppds->get_view_prodi();
		$data['m_data_ppds'] = $this->M_ppds->get_data();

		
					$this->load->view('template', $data);
	}

	public function submit_insert(){
		$data['KD_PRODI']=$this->input->post('kd_prodi');
		$data['NAMA']		 = $this->input->post('nama');
		$data['NPM']		 = $this->input->post('npm');
		$data['NIK']		 = $this->input->post('nik');
		$data['TMPT_LAHIR']  = $this->input->post('tmpt_lahir');
		$data['JNS_KELAMIN'] = $this->input->post('jns_kelamin');
		$data['AGAMA']		 = $this->input->post('agama');
		$data['ALAMAT']		 = $this->input->post('alamat');
		$data['NO_HP']		 = $this->input->post('no_hp');
		$data['EMAIL']		 = $this->input->post('email');
		$data['STATUS']    = $this->input->post('status');
		$TGL_LAHIR			   = $this->input->post('tgl_lahir');
		$PER_MSK			     = $this->input->post('per_msk');
		$ID_PPDS			     = $this->input->post('id_ppds');

        	$this->M_ppds->insert($TGL_LAHIR,$PER_MSK,$data);

        	$this->session->set_flashdata('message',array('message'=>'data berhasil di update.','type'=>'success','head'=>'success')); 

			redirect('/Ppds','refresh');
	} 

	public function view_update($ID_PPDS){
		$data['title'] 	  	 = "MASTER PPDS RSHS/UNPAD";
		$data['subtitle'] 	 = "Update PPDS";
 		$data['header']   	 = "header/header";
   	$data['navbar']   	 = "navbar/navbar";
    $data['sidebar']  	 = "sidebar/sidebar";
    $data['body'] 	  	 = "v_update";
    $data['footer']   	 = "footer/footer";
        
      // user login
    $data['nama']     = $this->nama; 
    $data['akses']		= $this->akses;

		//memanggil data yang akan di Update
		$data['data_ppds']   = $this->M_ppds->get_view_update($ID_PPDS);
		$data['data_prodi']  = $this->M_ppds->get_view_prodi();
		$data['m_data_ppds'] = $this->M_ppds->get_data();

        	$this->load->view('template', $data);
	}

	public function view_akademik(){
		$data['title'] 	   = "MASTER PPDS RSHS/UNPAD";
		$data['subtitle']  = "STATUS AKADEMIK PPDS RSHS/UNPAD";
		$data['header']    = "header/header";
		$data['navbar']    = "navbar/navbar";
		$data['sidebar']   = "sidebar/sidebar";
		$data['body'] 	   = "v_status_akademik";
		$data['footer']    = "footer/footer";

		// user login
    $data['nama']     = $this->nama; 
    $data['akses']		= $this->akses;

		$data['list_ppds'] = $this->M_ppds->get_data();

					$this->load->view('template', $data);
	}

	public function insert_status_akademik($id_ppds){
	        $update = $this->M_ppds->update_status($id_ppds);
  }
	
	public function submit_update(){
		$data['KD_PRODI']=$this->input->post('kd_prodi');
		$data['NAMA']		 = $this->input->post('nama');
		$data['NPM']		 = $this->input->post('npm');
		$data['NIK']	  	 = $this->input->post('nik');
		$data['TMPT_LAHIR']  = $this->input->post('tmpt_lahir');
		$data['JNS_KELAMIN'] = $this->input->post('jns_kelamin');
		$data['AGAMA']		 = $this->input->post('agama');
		$data['ALAMAT']		 = $this->input->post('alamat');
		$data['NO_HP']		 = $this->input->post('no_hp');
		$data['EMAIL']		 = $this->input->post('email');
		$data['STATUS']		 = $this->input->post('status');
		$data['LEVEL_KOMPETENSI']		 = $this->input->post('level');
		$ID_PPDS			 = $this->input->post('id_ppds');
		$TGL_LAHIR			 = $this->input->post('tgl_lahir');
		$PER_MSK			 = $this->input->post('per_msk');
		$PER_LULUS 		=	$this->input->post('per_lulus');
		
        	$this->M_ppds->update($ID_PPDS,$TGL_LAHIR,$PER_MSK,$PER_LULUS,$data);
        	$this->session->set_flashdata('message',array('message'=>'data berhasil di update.','type'=>'success','head'=>'Success')); 

					redirect('/Ppds','refresh');
	}

	// public function submitUpdateStatus()
	// {
	// 	$data['LEVEL_KOMPETENSI']	=$this->input->post('level');
	// 	$ID_PPDS			 = $this->input->post('id_ppds');
	// 	$PER_LULUS	= $this->input->post('per_lulus');
	// 	$STATUS 		= $this->input->post('status');
		
	// 			$this->M_ppds->update($PER_LULUS,$ID_PPDS,$STATUS,$data);
	// 			$this->session->set_flashdata('message',array('message'=>'data berhasil di update.','type'=>'success','head'=>'Success')); 

	// 			redirect('/Ppds/view_akademik','refresh');
	// }

	//public function SubmitUpdateStatus($LEVEL_KOMPETENSI,$PER_LULUS,$STATUS)
	//{
	// 	$LEVEL_KOMPETENSI = $this->input->post('level');
	// 	$STATUS = $this->input->post('status');
	// 	$PER_LULUS = $this->input->post('per_lulus');

	// 				$this->db->set('LEVEL_KOMPETENSI', $LEVEL_KOMPETENSI);
	// 				$this->db->set('STATUS', $STATUS);
	// 				$this->db->set('PER_LULUS',"TO_DATE('".$PER_LULUS."','YYYY-MM-DD')", false, false);
	// 				return $this->db->update($LEVEL_KOMPETENSI, $PER_LULUS, $STATUS);

	// 		redirect('/Ppds/view_akademik','refresh');
	// }

	public function ViewUpdateStatus($ID_PPDS){
		$data['title'] 	  	 = "MASTER PPDS RSHS/UNPAD";
		$data['subtitle'] 	 = "Update Status Akademik PPDS";
 		$data['header']   	 = "header/header";
   	$data['navbar']   	 = "navbar/navbar";
    $data['sidebar']  	 = "sidebar/sidebar";
    $data['body'] 	  	 = "v_update_status";
    $data['footer']   	 = "footer/footer";
        
      // user login
    $data['nama']     = $this->nama; 
    $data['akses']		= $this->akses;

		//memanggil data yang akan di Update
		$data['data_ppds']   = $this->M_ppds->GetViewUpdateStatus($ID_PPDS);
		$data['m_data_ppds'] = $this->M_ppds->get_data();

        	$this->load->view('template', $data);
	}
	
	public function delete($ID_PPDS){
			$this->M_ppds->delete($ID_PPDS);
		 	$this->session->set_flashdata('message',array('message'=>'data berhasil di delete.','type'=>'success','head'=>'Success')); 

			redirect('/Ppds/index','refresh');

	}

}