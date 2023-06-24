<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_project extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('project_model');	
	}

	public function index()
	{
		$data['project'] = $this->project_model->get_project();
		$data['berjalan'] = $this->project_model->get_berjalan();
		$data['selesai'] = $this->project_model->get_selesai();
		$data['content'] = 'home/project';
        $this->load->view('home/index', $data);
	}
}