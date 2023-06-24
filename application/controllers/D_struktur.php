<?php
defined('BASEPATH') or exit('No direct script access allowed');

class D_struktur extends CI_Controller
{
    private static $_table = 'struktur';
    private static $_primaryKey = 'id_struktur';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('struktur_model');
        $this->auth->restrict();
    }

    public function index()
    {
        $data['title'] = 'Struktur - PT. Kunango Jantan Group';

        $data['content'] = 'vadmin/struktur';
        $this->load->view('vadmin/index', $data);
    }

    public function get_data()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $this->load->library('datatables_ssp');

            $columns = array(
                array('db' => 'id_struktur', 'dt' => 'id_struktur'),
                array('db' => 'nama', 'dt' => 'nama'),
                array('db' => 'jabatan', 'dt' => 'jabatan'),
                array('db' => 'foto', 'dt' => 'foto'),
                array(
                    'db' => 'id_struktur',
                    'dt' => 'action',
                    'formatter' => function ($id) {
                        return '<a href="' . site_url('d_struktur/edit/' . $id) . '" class="btn btn-success btn-sm mb-1"><i class="fa fa-edit"></i>Edit</a>
                                <a onclick="deleteConfirm(' . "'" . site_url('d_struktur/delete/' . $id) . "'" . ')" href="#!" class="btn btn-danger btn-sm mb-1"><i class="fa fa-trash"></i>Hapus</a>';
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

            $nama = $this->input->post('nama', TRUE);
            $jabatan = $this->input->post('jabatan', TRUE);
            $foto = $_FILES['foto']['name'];
            $created_at = date('Y-m-d H:i:s');

            $this->load->library('upload');

            $config['upload_path']      = './assets/assets_home/img/';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = 2048;
            $config['overwrite'] = TRUE;
            $x = explode(".", $foto);
            $ext = strtolower(end($x));
            $config['file_name']        = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10) . '.' . $ext;
            // $config['file_name'] = $s_id . "-foto." . $ext;
            $foto = $config['file_name'];
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');
            
            $data = [
                'nama' => $nama,
                'jabatan' => $jabatan,
                'foto' => $foto,
                'created_at' => $created_at
            ];
            

            $this->struktur_model->insert($data);
            $this->session->set_flashdata('success', 'Data Berita berhasil ditambahkan.');
            redirect('d_struktur');
        } else {
            $data['title'] = 'Tambah Data Struktur - PT. Kunango Jantan Group';
            $data['form_title'] = 'Tambah Struktur';
            $data['content'] = 'vadmin/struktur_form';
            $this->load->view('vadmin/index', $data);
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $where = "id_struktur = $id";
        $data['struktur'] = $this->struktur_model->get_data($where);
        $updated_at = date('Y-m-d H:i:s');

        if (isset($_POST['simpan'])) {

            $foto = $_FILES['foto']['name'];

            $this->load->library('upload');

            $config['upload_path']      = './assets/assets_home/img/';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = 2048;
            $config['overwrite'] = TRUE;
            $x = explode(".", $foto);
            $ext = strtolower(end($x));
            $config['file_name']        = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10) . '.' . $ext;
            $foto = $config['file_name'];
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');

            $data = [
                'nama' => $this->input->post('nama', TRUE),
                'jabatan' => $this->input->post('jabatan', TRUE),
                
                'foto' => (!empty($foto)) ? $foto : $data['project']['foto'],
                'updated_at' => $updated_at
            ]; 

            $this->struktur_model->update($data, $id);
            $this->session->set_flashdata('success', 'Data berhasil diperbarui.');
            redirect('d_struktur');
        } else {
            
            $data['title'] = 'Edit Data - PT. Kunango Jantan Group';
            $data['form_title'] = 'Edit Data';
            $data['content'] = 'vadmin/struktur_edit_form';
            $data['action'] = site_url(uri_string()); // Mengambil URL yang aktif
            $this->load->view('vadmin/index', $data);
        }
    }

    public function delete($id = NULL)
    {
        $this->struktur_model->delete($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus.');
        redirect('d_struktur');
    }
}