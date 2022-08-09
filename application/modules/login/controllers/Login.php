<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller
{
	
	public function __construct()
	{

		parent::__construct();
		$this->load->library('session');
		$this->load->model('M_login');
	}

	public function index()
	{
			
		$this->load->view('v_login');
	}	

	public function aksi_login()
	{

		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));
		$data=array(
			'username' => $username,
			'password' => $password);

		$cek=$this->M_login->cek_login("USER_PPDS", $data);
		if  ($cek)
		{
			$data_session = array(
				'nama' => $cek->NAMA,
				'akses' => $cek->AKSES
			);

			$this->session->set_userdata('sess_user', $data_session);
			$success=true;
			
		}
		else
		{
			$success=false;
		}
			if 	($success)
	        {
				redirect('Dashboard', 'refresh');
	        }
	        else
        {
	        echo "<script>alert('Maaf Username/Password Salah');</script>";
	        redirect('Login','refresh');
	        //$this->load->view('v_login', $data);
        }
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('index','refresh');
	}
}
// buat password manual admin
// echo md5('komkordik');
// 			exit;
//buat password manual username
//echo md5('userpassword');
//exit;