<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller
 {
 	public function __construct(){
 		parent::__construct();
 			$this->load->library('session');
          $session_data = $this->session->userdata('sess_user');
            if ($session_data)
            {
              $this->nama=$session_data['nama'];
              $this->akses=$session_data['akses'];
              $this->load->model('M_dashboard');
            }
            else
              {
                redirect('login','refresh');
              }
          // var_dump($session_data);
          // exit();
 			
 	}

 	public function index(){
 		$data['title']		= "MASTER PPDS RSHS/UNPAD";
 		$data['subtitle']	= "DASHBOARD";
 		$data['header']		= "header/header";
 		$data['navbar']		= "navbar/navbar";
 		$data['sidebar']	= "sidebar/sidebar";
 		$data['body']		  = "v_dashboard";
 		$data['footer']		= "footer/footer";

    // user login
    $data['nama']     = $this->nama; 
    $data['akses']		= $this->akses;
    
    // data ppds & prodi
    $data['jumlah_ppds'] = $this->M_dashboard->get_jumlah_ppds();
    $data['jumlah_prodi'] = $this->M_dashboard->get_jumlah_prodi();
    $data['jumlahppdsAktif'] = $this->M_dashboard->getjumlahppdsAktif();
    $data['jumlahppdsLulus'] = $this->M_dashboard->getjumlahppdsLulus();
    $data['dataprodi'] = $this->M_dashboard->getdataprodi();
    $data['datalulus'] = $this->M_dashboard->getdatalulus();
    $data['dataaktif'] = $this->M_dashboard->getdataaktif();
                  // var_dump($data['jumlah_ppds_prodi']);
              // exit;
 		$this->load->view('template',$data);
 	}

 }