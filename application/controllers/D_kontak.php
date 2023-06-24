<?php
defined('BASEPATH') or exit('No direct script access allowed');

class D_kontak extends CI_Controller
{

    private static $_title = 'Data Kontak - ';
    private static $_table = 'kontak';
    private static $_primaryKey = 'id_kontak';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kontak_model');
        $this->auth->restrict();
    }

    public function index()
    {
        if ($this->session->userdata('usr_level') === 'Admin') {
            $data['title'] = self::$_title;
            $data['content'] = 'vadmin/kontak';
            $this->load->view('vadmin/index', $data);
        }  elseif ($this->session->userdata('usr_level') === 'User') {
            $data['title'] = self::$_title;
            $data['content'] = 'vuser/home';
            $this->load->view('vuser/index', $data);
        }
    }

    public function get_data()
    {
        if ($this->session->userdata('usr_level') === 'Admin') {
            if (!$this->input->is_ajax_request()) {
                exit('No direct script access allowed');
            } else {
                $this->load->library('datatables_ssp');

                $columns = array(
                    array('db' => 'id_kontak', 'dt' => 'id_kontak'),
                    array('db' => 'lokasi', 'dt' => 'lokasi'),
                    array('db' => 'perusahaan', 'dt' => 'perusahaan'),
                    array('db' => 'email', 'dt' => 'email'),
                    array('db' => 'hp', 'dt' => 'hp'),
                    array(
                        'db' => 'id_kontak',
                        'dt' => 'action',
                        'formatter' => function ($id_kontak) {
                            return '<a href="' . site_url('d_kontak/edit/' . $id_kontak) . '" class="btn btn-success btn-sm mb-1"><i class="fa fa-edit"></i>Edit</a>
                                <a onclick="deleteConfirm(' . "'" . site_url('d_kontak/delete/' . $id_kontak) . "'" . ')" href="#!" class="btn btn-danger btn-sm mb-1"><i class="fa fa-trash"></i>Hapus</a>';
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
    }

    public function add()
    {
        if (isset($_POST['simpan'])) {

            $lokasi = $this->input->post('lokasi', TRUE);
            $perusahaan = $this->input->post('perusahaan', TRUE);
            $email = $this->input->post('email', TRUE);
            $hp = $this->input->post('hp', TRUE);
            
            $data = [
                'lokasi' => $lokasi,
                'perusahaan' => $perusahaan,
                'email' => $email,
                'hp' => $hp,
            ];
            

            $this->kontak_model->insert($data);
            $this->session->set_flashdata('success', 'Data berhasil ditambahkan.');
            redirect('d_kontak');
        } else {
            $data['kategori'] = $this->kontak_model->get_kategori();
            $data['title'] = 'Tambah Data - PT. Kunango Jantan Group';
            $data['form_title'] = 'Tambah Data ';
            $data['content'] = 'vadmin/kontak_form';
            $this->load->view('vadmin/index', $data);
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $where = "id_kontak = $id";
        $data['kontak'] = $this->kontak_model->get_kontak($where);

        if (isset($_POST['simpan'])) {
            $data = [
                'lokasi' => $this->input->post('lokasi', TRUE),
                'email' => $this->input->post('email', TRUE),
                'hp' => $this->input->post('hp', TRUE),
                'perusahaan' => $this->input->post('perusahaan', TRUE)
            ];

            $this->kontak_model->update($data, $id);
            $this->session->set_flashdata('success', 'Data berhasil diperbarui.');
            redirect('d_kontak');
        } else {
            $data['kategori'] = $this->kontak_model->get_kategori();
            $data['title'] = 'Edit Data Barang - PT. Kunango Jantan Group';
            $data['form_title'] = 'Edit Data';
            $data['content'] = 'vadmin/kontak_edit_form';
            $data['action'] = site_url(uri_string()); // Mengambil URL yang aktif
            $this->load->view('vadmin/index', $data);
        }
    }

    public function delete($id = NULL)
    {
        $this->kontak_model->delete($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus.');
        redirect('d_kontak');
    }
}