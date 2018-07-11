<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function __construct()
		{	
			parent::__construct();
			$this->load->library('Pdf');
			$this->load->model('produk_model');
			$this->load->model('modelSekolah');
		}
	public function index()
		{
			$data['sekolah'] = $this->produk_model->get_produk();
			$this->load->view('laporan', $data);
		}
	
	public function cetak_produk()
		{
			$data['sekolah'] = $this->produk_model->get_produk();
			$this->load->view('cetak_produk', $data);
	}	
}