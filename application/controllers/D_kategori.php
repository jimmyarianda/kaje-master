<?php
defined('BASEPATH') or exit('No direct script access allowed');

class D_kategori extends CI_Controller
{
    private static $_table = 'kategori';
    private static $_primaryKey = 'id_kategori';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_model');
        $this->auth->restrict();
    }

    public function index()
    {
        $data['title'] = 'Kategori - PT. Kunango Jantan Group';

        $data['content'] = 'vadmin/kategori';
        $this->load->view('vadmin/index', $data);
    }

    public function get_data()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $this->load->library('datatables_ssp');

            $columns = array(
                array('db' => 'id_kategori', 'dt' => 'id_kategori'),
                array('db' => 'nama_kategori', 'dt' => 'nama_kategori'),
                array('db' => 'jenis_kategori', 'dt' => 'jenis_kategori'),
                // array('db' => 'keterangan', 'dt' => 'keterangan'),
                array('db' => 'foto', 'dt' => 'foto'),
                array(
                    'db' => 'id_kategori',
                    'dt' => 'action',
                    'formatter' => function ($id) {
                        return '<a href="' . site_url('d_kategori/edit/' . $id) . '" class="btn btn-success btn-sm mb-1"><i class="fa fa-eye"></i>View</a>
                                <a onclick="deleteConfirm(' . "'" . site_url('d_kategori/delete/' . $id) . "'" . ')" href="#!" class="btn btn-danger btn-sm mb-1"><i class="fa fa-trash"></i>Hapus</a>';
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

            $nama_kategori = $this->input->post('nama_kategori', TRUE);
            $jenis_kategori = $this->input->post('jenis_kategori', TRUE);
            $keterangan = $this->input->post('keterangan', TRUE);
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
                'nama_kategori' => $nama_kategori,
                'jenis_kategori' => $jenis_kategori,
                'keterangan' => $keterangan,
                'foto' => $foto,
                'created_at' => $created_at
            ];
            

            $this->kategori_model->insert($data);
            $this->session->set_flashdata('success', 'Data berhasil ditambahkan.');
            redirect('d_kategori');
        } else {
            $data['title'] = 'Tambah Data Tentang - PT. Kunango Jantan Group';
            $data['form_title'] = 'Tambah Tentang';
            $data['content'] = 'vadmin/kategori_form';
            $this->load->view('vadmin/index', $data);
        }
    }

    public function edit($id = NULL)
    {
        $id = $this->uri->segment(3);
        $where = "id_kategori = $id";
        $data['kategori'] = $this->kategori_model->get_data($where);
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
                'nama_kategori' => $this->input->post('nama_kategori', TRUE),
                'jenis_kategori' => $this->input->post('jenis_kategori', TRUE),
                'keterangan' => $this->input->post('keterangan', TRUE),
                'foto' => (!empty($foto)) ? $foto : $data['project']['foto'],
                'updated_at' => $updated_at
            ]; 

            $this->kategori_model->update($data, $id);
            $this->session->set_flashdata('success', 'Data berhasil diperbarui.');
            redirect('d_kategori');
        } else {
            $data['title'] = 'Edit Data - PT. Kunango Jantan Group';
            $data['form_title'] = 'Edit Data';
            $data['content'] = 'vadmin/kategori_edit_form';
            $data['action'] = site_url(uri_string()); // Mengambil URL yang aktif
            $this->load->view('vadmin/index', $data);
        }
    }

    public function delete($id = NULL)
    {
        $this->kategori_model->delete($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus.');
        redirect('d_kategori');
    }
}