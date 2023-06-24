<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dashboard_model');
        $this->auth->restrict();
    }

    public function index()
    {
        //User
        // $data['user'] = count($this->dashboard_model->get_user());

        //unit
        // $data['unit'] = count($this->dashboard_model->get_unit());
        
        //laporan
        // $data['laporan'] = count($this->dashboard_model->get_laporan());

        if ($this->session->userdata('usr_level') === 'Admin') {
            $data['title'] = 'Dashboard - ELaporan';
            $data['content'] = 'vadmin/dashboard';
            $this->load->view('vadmin/index', $data);
        }  elseif ($this->session->userdata('usr_level') === 'User') {
            $data['title'] = 'Dashboard - ELaporan';
            $data['content'] = 'vuser/home';
            $this->load->view('vuser/index', $data);
        }
    }
}
