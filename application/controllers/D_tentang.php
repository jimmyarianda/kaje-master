<?php
defined('BASEPATH') or exit('No direct script access allowed');

class D_tentang extends CI_Controller
{
    private static $_table = 'tentang';
    private static $_primaryKey = 't_id';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tentang_model');
        $this->auth->restrict();
    }

    public function index()
    {
        $data['title'] = 'Tentang - PT. Kunango Jantan Group';

        $data['content'] = 'vadmin/tentang';
        $this->load->view('vadmin/index', $data);
    }

    public function get_data()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $this->load->library('datatables_ssp');

            $columns = array(
                array('db' => 't_id', 'dt' => 't_id'),
                array('db' => 't_text1', 'dt' => 't_text1'),
                // array('db' => 't_text2', 'dt' => 't_text2'),
                // array('db' => 't_text3', 'dt' => 't_text3'),
                // array('db' => 't_pic', 'dt' => 't_pic'),
                array('db' => 't_pekerja', 'dt' => 't_pekerja'),
                array('db' => 't_clients', 'dt' => 't_clients'),
                array('db' => 't_projectsel', 'dt' => 't_projectsel'),
                array('db' => 't_projectber', 'dt' => 't_projectber'),
                array(
                    'db' => 't_id',
                    'dt' => 'action',
                    'formatter' => function ($id) {
                        return '<a href="' . site_url('d_tentang/edit/' . $id) . '" class="btn btn-success btn-sm mb-1"><i class="fa fa-eye"></i>View</a>
                                <a onclick="deleteConfirm(' . "'" . site_url('d_tentang/delete/' . $id) . "'" . ')" href="#!" class="btn btn-danger btn-sm mb-1"><i class="fa fa-trash"></i>Hapus</a>';
                    }
                )
            );

            $sql_details = [
                'user' => $this->db->username,
                'pass' => $this->db->password,
                'db' => $this->db->database,
                'host' => $this->db->hostname
            ];

            echo json_encode(
                Datatables_ssp::simple($_GET, $sql_details, self::$_table, self::$_primaryKey, $columns)
            );
        }
    }

    public function add()
    {
        if (isset($_POST['simpan'])) {

            $text1 = $this->input->post('text1', TRUE);
            $text2 = $this->input->post('text2', TRUE);
            $text3 = $this->input->post('text3', TRUE);
            $pic = $_FILES['pic']['name'];
            $created_at = date('Y-m-d H:i:s');

            $this->load->library('upload');

            $config['upload_path']      = './assets/assets_home/img/';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = 2048;
            $config['overwrite'] = TRUE;
            $x = explode(".", $pic);
            $ext = strtolower(end($x));
            $config['file_name']        = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10) . '.' . $ext;
            // $config['file_name'] = $s_id . "-foto." . $ext;
            $pic = $config['file_name'];
            $this->upload->initialize($config);
            $this->upload->do_upload('pic');
            
            $data = [
                't_text1' => $text1,
                't_text2' => $text2,
                't_text3' => $text3,
                't_pic' => $pic,
                'created_at' => $created_at
            ];
            

            $this->tentang_model->insert($data);
            $this->session->set_flashdata('success', 'Data berhasil ditambahkan.');
            redirect('d_tentang');
        } else {
            $data['title'] = 'Tambah Data Tentang - PT. Kunango Jantan Group';
            $data['form_title'] = 'Tambah Tentang';
            $data['content'] = 'vadmin/tentang_form';
            $this->load->view('vadmin/index', $data);
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $where = "id = $id";
        $data['tentang'] = $this->tentang_model->get_tentang($where);
        $updated_at = date('Y-m-d H:i:s');

        if (isset($_POST['simpan'])) {

            $pic = $_FILES['pic']['name'];

            $this->load->library('upload');

            $config['upload_path']      = './assets/assets_home/img/';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = 2048;
            $config['overwrite'] = TRUE;
            $x = explode(".", $pic);
            $ext = strtolower(end($x));
            $config['file_name']        = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10) . '.' . $ext;
            $pic = $config['file_name'];
            $this->upload->initialize($config);
            $this->upload->do_upload('pic');

            $data = [
                't_text1' => $this->input->post('text1', TRUE),
                't_text2' => $this->input->post('text2', TRUE),
                't_text3' => $this->input->post('text3', TRUE),
                't_pic' => (!empty($pic)) ? $pic : $data['tentang']['t_pic'],
                't_pekerja' => $this->input->post('pekerja', TRUE),
                't_clients' => $this->input->post('clients', TRUE),
                't_projectsel' => $this->input->post('ps', TRUE),
                't_projectber' => $this->input->post('pb', TRUE),
                'updated_at' => $updated_at
            ];

            $this->tentang_model->update($data, $id);
            $this->session->set_flashdata('success', 'Data berhasil diperbarui.');
            redirect('d_tentang');
        } else {
            $data['title'] = 'Edit Data - PT. Kunango Jantan Group';
            $data['form_title'] = 'Edit Data';
            $data['content'] = 'vadmin/tentang_edit_form';
            $data['action'] = site_url(uri_string()); // Mengambil URL yang aktif
            $this->load->view('vadmin/index', $data);
        }
    }

    public function delete($id = NULL)
    {
        $this->tentang_model->delete($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus.');
        redirect('d_tentang');
    }
}