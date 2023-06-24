<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_detail3 extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }
	
	public function index()
	{
		$data['content'] = 'home/detail/kaje3';
        $this->load->view('home/index', $data);
	}
}