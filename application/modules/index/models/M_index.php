<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_index extends CI_Model {

  function __construct()
  {
    parent::__construct();
    $this->db=$this->load->database('default',true);
  }
}