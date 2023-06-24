<?php
defined('BASEPATH') or exit('No direct script access allowed');

class D_berita extends CI_Controller
{
    private static $_table = 'berita';
    private static $_primaryKey = 'id_berita';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('berita_model');
        $this->auth->restrict();
    }

    public function index()
    {
        $data['title'] = 'Berita & CSR - PT. Kunango Jantan Group';

        $data['content'] = 'vadmin/berita';
        $this->load->view('vadmin/index', $data);
    }

    public function get_data()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $this->load->library('datatables_ssp');

            $columns = array(
                array('db' => 'id_berita', 'dt' => 'id_berita'),
                array('db' => 'judul_berita', 'dt' => 'judul_berita'),
                // array('db' => 'isi_berita', 'dt' => 'isi_berita'),
                array('db' => 'foto', 'dt' => 'foto'),
                array('db' => 'jenis', 'dt' => 'jenis'),
                array('db' => 'user', 'dt' => 'user'),
                array('db' => 'perusahaan', 'dt' => 'perusahaan'),
                array(
                    'db' => 'id_berita',
                    'dt' => 'action',
                    'formatter' => function ($id) {
                        return '<a href="' . site_url('d_berita/edit/' . $id) . '" class="btn btn-success btn-sm mb-1"><i class="fa fa-eye"></i>View</a>
                                <a onclick="deleteConfirm(' . "'" . site_url('d_berita/delete/' . $id) . "'" . ')" href="#!" class="btn btn-danger btn-sm mb-1"><i class="fa fa-trash"></i>Hapus</a>';
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

            $judul_berita = $this->input->post('judul_berita', TRUE);
            $isi_berita = $this->input->post('isi_berita', TRUE);
            $user = $this->session->userdata('usr_username', TRUE);
            $jenis = $this->input->post('jenis', TRUE);
            $perusahaan = $this->input->post('perusahaan', TRUE);
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
                'judul_berita' => $judul_berita,
                'isi_berita' => $isi_berita,
                'user' => $user,
                'jenis' => $jenis,
                'perusahaan' => $perusahaan,
                'foto' => $foto,
                'created_at' => $created_at
            ];
            

            $this->berita_model->insert($data);
            $this->session->set_flashdata('success', 'Data Berita berhasil ditambahkan.');
            redirect('d_berita');
        } else {
            $data['kategori'] = $this->berita_model->get_kategori();
            $data['title'] = 'Tambah Data Berita & CSR - PT. Kunango Jantan Group';
            $data['form_title'] = 'Tambah Berita';
            $data['content'] = 'vadmin/berita_form';
            $this->load->view('vadmin/index', $data);
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $where = "id_berita = $id";
        $data['berita'] = $this->berita_model->get_data($where);
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
                'judul_berita' => $this->input->post('judul_berita', TRUE),
                'isi_berita' => $this->input->post('isi_berita', TRUE),
                'user' => $this->session->userdata('usr_username', TRUE),
                'jenis' => $this->input->post('jenis', TRUE),
                'foto' => (!empty($foto)) ? $foto : $data['project']['foto'],
                'perusahaan' => $this->input->post('perusahaan', TRUE),
                'updated_at' => $updated_at
            ]; 

            $this->berita_model->update($data, $id);
            $this->session->set_flashdata('success', 'Data berhasil diperbarui.');
            redirect('d_berita');
        } else {
            $data['kategori'] = $this->berita_model->get_kategori();
            $data['title'] = 'Edit Data - PT. Kunango Jantan Group';
            $data['form_title'] = 'Edit Data';
            $data['content'] = 'vadmin/berita_edit_form';
            $data['action'] = site_url(uri_string()); // Mengambil URL yang aktif
            $this->load->view('vadmin/index', $data);
        }
    }

    public function delete($id = NULL)
    {
        $this->berita_model->delete($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus.');
        redirect('d_berita');
    }
}