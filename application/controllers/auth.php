<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
    $this->config->load('config_var');
	}


  public function login_admin()
  {
    $this->form_validation->set_rules('nomor_hp', 'Nomor HP', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if($this->form_validation->run() == TRUE){
      if($this->pos->login() == TRUE)
      // echo json_encode($this->pos->login('081216498365','123456'));
        redirect('admin/pilih_toko/');
    }
    else{
    $this->session->set_flashdata('notif', validation_errors());
    $this->load->view('login');
    }
  }

  public function get_detail_item($key)
  {
    $item = $this->pos->getItem($key);

    echo json_encode($item);
  }
  
}