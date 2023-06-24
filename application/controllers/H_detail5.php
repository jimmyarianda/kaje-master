<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_detail5 extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }
	
	public function index()
	{
		$data['content'] = 'home/detail/kaje5';
        $this->load->view('home/index', $data);
	}
}