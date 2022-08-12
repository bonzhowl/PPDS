<?php 
class Upload extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        //load models
          $this->load->model('M_upload');
          // $this->load->helper(array('form', 'url'));
          $this->load->library('session');
          $this->load->library('form_validation');

    }

    public function index(){
        $data['uploads'] = $this->M_upload->upload_data();
        $this->load->view('v_upload', array('error' => ' ' ), $data);
    }

    public function aksi_upload(){
        $config['upload_path']          = './personal_file/'; //folder upload
        $config['allowed_types']        = 'pdf|PDF'; // jenis file
        $config['max_size']             = 10000; // ukuran file
        // $config['encrypt_name']         = TRUE; // acak nama file yg di upload
        // $config['file_name']         = TRUE; // acak nama file yg di upload
        

        $this->load->library('upload', $config);
        $ID_PPDS=$this->input->post('id_ppds');
        
        if ($this->upload->do_upload('berkas'))
        {
            $filedata = $this->upload->data();
            $upload = [
                'UP_FILE' => $filedata['file_name']
            ];

            if ($this->M_upload->update($upload, $ID_PPDS))
            {
                    $this->session->set_flashdata('message',array('message'=>'Unggah File Berhasil.','type'=>'success','head'=>'success')); 
            }else {
                    $this->session->set_flashdata('');
                  }
                  redirect('/ppds/view_upload');
        } else {
           $this->session->set_flashdata('error', '<p>Gagal Unggah '. $fileData['file_name'] .' tidak berhasil tersimpan di database anda</p>');
            // var_dump($this->upload->display_errors());
            // exit;
            redirect(base_url('ppds/view_upload'));

        }

    }
}
        
        

        // {
        //     $error = array('error' => $this->upload->display_errors());
        //     $this->load->view('v_upload', $error);
        // }else
        // {
        //     $data = array('upload_data' => $this->upload->data());
        //     $this->load->view('v_upload', $data);
        // }