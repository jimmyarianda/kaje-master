<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_model');	
	}

	public function index()
	{
		$data['kategori'] = $this->kategori_model->get_kategori();

		$data['content'] = 'home/produk';
        $this->load->view('home/index', $data);
	}
		
	public function detail($id = NULL)
	{
		$id = $this->uri->segment(3);
        $where = "id_kategori = $id";
		$data['kategori1'] = $this->kategori_model->get_kategori();
        $data['kategori'] = $this->kategori_model->get_data($where);
		$data['terbaru'] = $this->kategori_model->get_terbaru();
		$data['content'] = 'home/detail/kaje1';
        $this->load->view('home/index', $data);
	}
}