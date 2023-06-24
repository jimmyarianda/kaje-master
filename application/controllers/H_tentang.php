<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_tentang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tentang_model');	
	}

	public function index()
	{
		$data['tentang'] = $this->tentang_model->get_tentang();

		$data['content'] = 'home/tentang';
        $this->load->view('home/index', $data);
	}
}