<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');	
	}

	public function index()
	{
		$data['berita'] = $this->berita_model->get_berita();

		$data['content'] = 'home/berita';
        $this->load->view('home/index', $data);
	}

	public function detail($id = NULL)
	{
		$id = $this->uri->segment(3);
        $where = "id_berita = $id";
        $data['berita'] = $this->berita_model->get_data($where);
		$data['kategori1'] = $this->berita_model->get_kategori();
		$data['terbaru'] = $this->berita_model->get_terbaru();
		$data['content'] = 'home/detail/kaje2';
        $this->load->view('home/index', $data);
	}
}