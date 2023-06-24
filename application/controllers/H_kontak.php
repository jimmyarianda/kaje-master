<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_kontak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kontak_model');	
	}

	public function index()
	{
		$data['kontak'] = $this->kontak_model->get_kontak1();

		$data['content'] = 'home/kontak';
        $this->load->view('home/index', $data);
	}
}