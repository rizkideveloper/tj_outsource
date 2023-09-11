<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Danru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Danru_model');
        $this->load->model('Perusahaan_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman Pegawai';
        $data['danru'] = $this->Danru_model->tampil_pegawai_danru();
        $data['perusahaan'] = $this->db->query('SELECT * FROM tb_perusahaan WHERE id_perusahaan != 1')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pegawai/danru/index');
        $this->load->view('templates/footer');
    }

    public function tampil_korlap()
    {
        $id = $this->input->post('id_perusahaan');
        $this->db->select('*');
        $this->db->from('tb_korlap kp');
        $this->db->join('tb_perusahaan pr', 'kp.id_perusahaan = pr.id_perusahaan');
        $this->db->join('tb_jabatan jb', 'kp.id_jabatan = jb.id_jabatan');
        $this->db->where('kp.id_perusahaan', $id);
        $data_id = $this->db->get()->row_array();

        $response = [
            'id_korlap' => $data_id['id_korlap'],
            'nama_korlap' => $data_id['nama_korlap'],
            'status' => 'berhasil'
        ];
        echo json_encode($response);
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nik', 'Nik', 'required|trim|numeric|is_unique[tb_danru.nik]', [
            'is_unique' => 'Nik sudah terdaftar',
            'required' => 'Nik tidak boleh kosong',
            'numeric' => 'Nik harus berupa angka '
        ]);
        $this->form_validation->set_rules('umur', 'Umur', 'required|trim|numeric', [
            'required' => 'Umur tidak boleh kosong',
            'numeric' => 'Umur harus berupa angka '
        ]);
        $this->form_validation->set_rules('nama_danru', 'Nama danru', 'required|trim', [
            'required' => 'Nama danru tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama_perusahaan', 'Perusahaan', 'required|trim', [
            'required' => 'Perusahaan tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'nik' => strip_tags(form_error('nik')),
                'nama_korlap' => strip_tags(form_error('nama_danru')),
                'umur' => strip_tags(form_error('umur')),
                'nama_perusahaan' => strip_tags(form_error('nama_perusahaan')),
                'status' => 'gagal'
            ];
        } else {
            $this->Danru_model->tambah_pegawai_danru();
            $response['status'] = 'berhasil';
        }
        echo json_encode($response);
    }

    public function tampil_id()
    {
        $id = $this->input->post('id');
        $data_id = $this->Danru_model->tampil_pegawai_id_danru($id);
        $perusahaan = $this->db->query('SELECT * FROM tb_perusahaan WHERE id_perusahaan != 1')->result_array();
        $response = [
            'id_danru' => $data_id['id_danru'],
            'id_perusahaan' => $data_id['id_perusahaan'],
            'id_korlap' => $data_id['id_korlap'],
            'nik' => $data_id['nik'],
            'nama_danru' => $data_id['nama_danru'],
            'perusahaan' => $perusahaan,
            'nama_korlap' => $data_id['nama_korlap'],
            'umur' => $data_id['umur'],
            'status' => 'berhasil'
        ];
        echo json_encode($response);
    }

    public function ubah()
    {

        $this->form_validation->set_rules('umur', 'Umur', 'required|trim|numeric', [
            'required' => 'Umur tidak boleh kosong',
            'numeric' => 'Umur harus berupa angka '
        ]);
        $this->form_validation->set_rules('nama_danru', 'Nama Pegawai', 'required|trim', [
            'required' => 'Nama danru tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama_perusahaan', 'Perusahaan', 'required|trim', [
            'required' => 'Perusahaan tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'nama_danru' => strip_tags(form_error('nama_danru')),
                'umur' => strip_tags(form_error('umur')),
                'nama_perusahaan' => strip_tags(form_error('nama_perusahaan')),
                'status' => 'gagal'
            ];
        } else {
            $this->Danru_model->ubah_pegawai_danru();
            $response['status'] = 'berhasil';
        }

        echo json_encode($response);
    }

    public function hapus()
    {
        $id = $this->input->post('id');
        $this->db->delete('tb_danru', ['id_danru' => $id]);
        echo json_encode('berhasil');
    }
}
