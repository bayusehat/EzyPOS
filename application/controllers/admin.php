<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct($config = 'rest'){

    	header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		$method = $_SERVER['REQUEST_METHOD'];
		if($method == "OPTIONS") {
		die();
		}
		parent::__construct();
	}

	public function index(){
		$this->load->view('login');
	}

	public function pilih_toko(){
		$this->load->view('pilih_toko');
	}

	public function home(){
		$data['main_view'] = 'dashboard';
		$this->load->view('template',$data);
	}

	public function laporan_penjualan(){
		$data['main_view'] = 'laporan_penjualan';
		$this->load->view('template',$data);
	}

	public function data_pelanggan(){
		$data['main_view'] = 'data_pelanggan';
		$this->load->view('template',$data);
	}

	public function data_barang(){
		$data['main_view'] = 'data_barang';
		$this->load->view('template',$data);
	}

	public function data_kategori(){
		$data['main_view'] = 'data_kategori';
		$this->load->view('template',$data);
	}

	public function data_cara_bayar(){
		$data['main_view'] = 'data_cara_bayar';
		$this->load->view('template',$data);
	}

	public function tentang(){
		$data['main_view'] = 'tentang_view';
		$this->load->view('template',$data);
	}

	public function pengaturan(){
		$data['main_view'] = 'pengaturan';
		$this->load->view('template',$data);
	}
}