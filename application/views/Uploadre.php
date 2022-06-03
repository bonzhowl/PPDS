<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadre extends CI_Controller
{
	var $limit=10;
	var $offset=10;

		public function __construct(){
			parent::__construct();
			$this->load->model('M_uploadre'); //load model M_uploadre yang ada di folder model
		}

		public function indexre($page=NULL,$offset="",$key=NULL){
			$data['query'] = $this->M_uploadre->get_alldoc(); //query dari model
			$this->load->view('home',$data); //tampilan awal ketika controller upload di akses
		}

		public function add(){
			$this->load->view('upload_view');
		}

		public function insert(){
			$this->load->library('upload');
			$nmfile = "file_".time(); //nama file + fungsi time
			$config['upload_path'] 		= './personal_file/'; //folder upload
			$config['allowed_types'] 	= 'pdf|PDF'; //jenis file
			$config['max_size']			= 10000; //ukuran file
			$config['max_width']		= 5000; //lebar file
			$config['max_height']		= 5000;
			$config['file_name']		= $nmfile; //nama file yg terupload

			$this->upload->initialize($config);

			if ($_FILES['filedoc']['name'])
			{
				if ($this->upload->do_upload('filedoc'))
				{
					$doc=$this->upload->data();
					$data=array(
						'NAMA_PF'=>$doc['file_name'],
						'TIPE_PF'=>$doc['file_type'],
						'KET_PF'=>$this->input->post('textket'));

					$this->M_uploadre->get_insert($data); //akses model utk menyimpan ke database
				}
			}
		}
}