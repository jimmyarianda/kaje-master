<?php
defined('BASEPATH') or exit('No direct script access allowed');

class D_home extends CI_Controller
{
    private static $_table = 'home';
    private static $_primaryKey = 'h_id';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
        $this->auth->restrict();
    }

    public function index()
    {
        $data['title'] = 'Home - PT. Kunango Jantan Group';

        $data['content'] = 'vadmin/home';
        $this->load->view('vadmin/index', $data);
    }

    public function get_data()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $this->load->library('datatables_ssp');

            $columns = array(
                array('db' => 'h_id', 'dt' => 'h_id'),
                array('db' => 'h_text1', 'dt' => 'h_text1'),
                array('db' => 'h_text2', 'dt' => 'h_text2'),
                array('db' => 'h_text3', 'dt' => 'h_text3'),
                array('db' => 'h_pic1', 'dt' => 'h_pic1'),
                // array('db' => 'h_pic2', 'dt' => 'h_pic2'),
                // array('db' => 'h_pic3', 'dt' => 'h_pic3'),
                
                array(
                    'db' => 'h_id',
                    'dt' => 'action',
                    'formatter' => function ($id) {
                        return '<a href="' . site_url('d_home/edit/' . $id) . '" class="btn btn-success btn-sm mb-1"><i class="fa fa-eye"></i>Edit</a>
                                <a onclick="deleteConfirm(' . "'" . site_url('d_home/delete/' . $id) . "'" . ')" href="#!" class="btn btn-danger btn-sm mb-1"><i class="fa fa-trash"></i>Hapus</a>';
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
            $picbanner = $_FILES['picbanner']['name'];
            $created_at = date('Y-m-d H:i:s');

            $this->load->library('upload');

            $config['upload_path']      = './assets/assets_home/img/';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = 2048;
            $config['overwrite'] = TRUE;
            $x = explode(".", $picbanner);
            $ext = strtolower(end($x));
            $config['file_name']        = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10) . '.' . $ext;
            // $config['file_name'] = $s_id . "-foto." . $ext;
            $picbanner = $config['file_name'];
            $this->upload->initialize($config);
            $this->upload->do_upload('picbanner');
            
            $data = [
                'h_text1' => $text1,
                'h_text2' => $text2,
                'h_text3' => $text3,
                'h_picbanner' => $picbanner,
                'created_at' => $created_at
            ];
            

            $this->home_model->insert($data);
            $this->session->set_flashdata('success', 'Data home berhasil ditambahkan.');
            redirect('d_home');
        } else {
            $data['title'] = 'Tambah Data Home - PT. Kunango Jantan Group';
            $data['form_title'] = 'Tambah Beranda';
            $data['content'] = 'vadmin/home_form';
            $this->load->view('vadmin/index', $data);
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $where = "id = $id";
        $data['home'] = $this->home_model->get_home($where);
        $updated_at = date('Y-m-d H:i:s');

        if (isset($_POST['simpan'])) {

            $pic1 = $_FILES['pic1']['name'];
            $pic2 = $_FILES['pic2']['name'];
            $pic3 = $_FILES['pic3']['name'];

            $this->load->library('upload');

            $config['upload_path']      = './assets/assets_home/img/';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = 2048;
            $config['overwrite'] = TRUE;
            $x = explode(".", $pic1);
            $ext = strtolower(end($x));
            $config['file_name']        = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10) . '.' . $ext;
            $pic1 = $config['file_name'];
            $this->upload->initialize($config);
            $this->upload->do_upload('pic1');

            $config['upload_path']      = './assets/assets_home/img/';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = 2048;
            $config['overwrite'] = TRUE;
            $x = explode(".", $pic2);
            $ext = strtolower(end($x));
            $config['file_name']        = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10) . '.' . $ext;
            $pic2 = $config['file_name'];
            $this->upload->initialize($config);
            $this->upload->do_upload('pic2');

            $config['upload_path']      = './assets/assets_home/img/';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = 2048;
            $config['overwrite'] = TRUE;
            $x = explode(".", $pic3);
            $ext = strtolower(end($x));
            $config['file_name']        = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10) . '.' . $ext;
            $pic3 = $config['file_name'];
            $this->upload->initialize($config);
            $this->upload->do_upload('pic3');

            $data = [
                'h_text1' => $this->input->post('text1', TRUE),
                'h_text2' => $this->input->post('text2', TRUE),
                'h_text3' => $this->input->post('text3', TRUE),
                'h_pic1' => (!empty($pic1)) ? $pic1 : $data['h_pic1']['pic1'],
                'h_pic2' => (!empty($pic2)) ? $pic2 : $data['h_pic2']['pic2'],
                'h_pic3' => (!empty($pic3)) ? $pic3 : $data['h_pic3']['pic3'],
                'updated_at' => $updated_at
            ];

            $this->home_model->update($data, $id);
            $this->session->set_flashdata('success', 'Data berhasil diperbarui.');
            redirect('d_home');
        } else {
            $data['title'] = 'Edit Data - PT. Kunango Jantan Group';
            $data['form_title'] = 'Edit Data';
            $data['content'] = 'vadmin/home_edit_form';
            $data['action'] = site_url(uri_string()); // Mengambil URL yang aktif
            $this->load->view('vadmin/index', $data);
        }
    }

    public function delete($id = NULL)
    {
        $this->home_model->delete($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus.');
        redirect('d_home');
    }
}