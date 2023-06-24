<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('home_model');
		$this->load->model('tentang_model');
		$this->load->model('project_model');
		$this->load->model('berita_model');
		$this->load->model('struktur_model');
		$this->load->model('testimoni_model');
    }
	
	public function index()
	{
		$data['home'] = $this->home_model->get_home();
		$data['tentang'] = $this->tentang_model->get_tentang();
		$data['project'] = $this->project_model->get_project();
		$data['berita'] = $this->berita_model->get_terbaru();
		$data['struktur'] = $this->struktur_model->get_struktur();
		$data['testimoni'] = $this->testimoni_model->get_testimoni();
		
		$data['content'] = 'home/home';
        $this->load->view('home/index', $data);
	}

	// public function bidang()
	// {
	// 	$slug_bidang = $this->uri->segment(2);

	// 	$where = "nama_bidang = '$slug_bidang'";

	// 	$data['sub_bidang'] = $this->sub_bidang_model->get_all_sub_bidang($where);
	// 	$data['narasumber'] = $this->narasumber_model->get_all_narasumber($where);
	// 	$data['bidang'] = $slug_bidang;
	// 	$data['content'] = 'home/sub_bidang';
    //     $this->load->view('home/index', $data);
	// }

	// public function narasumber()
	// {
	// 	$slug_narasumber = $this->uri->segment(2);

	// 	$where_narasumber = "narasumber.id = $slug_narasumber";
	// 	$where_subbidang = "id_narasumber = $slug_narasumber";
		
	// 	$data['narasumber'] = $this->narasumber_model->get_narasumber($where_narasumber);
	// 	$data['narasumber_detail'] = $this->narasumber_model->get_all_sub_bidang($where_subbidang);
	// 	$data['content'] = 'home/detail_narasumber';
    //     $this->load->view('home/index', $data);
	// }

}