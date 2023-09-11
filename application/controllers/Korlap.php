<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Korlap extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Korlap_model');
        $this->load->model('Perusahaan_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman Pegawai';
        $data['korlap'] = $this->Korlap_model->tampil_pegawai_korlap();
        $data['perusahaan'] = $this->db->query('SELECT * FROM tb_perusahaan WHERE id_perusahaan != 1')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pegawai/korlap/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nik', 'Nik', 'required|trim|numeric|is_unique[tb_korlap.nik]', [
            'is_unique' => 'Nik sudah terdaftar',
            'required' => 'Nik tidak boleh kosong',
            'numeric' => 'Nik harus berupa angka '
        ]);
        $this->form_validation->set_rules('umur', 'Umur', 'required|trim|numeric', [
            'required' => 'Umur tidak boleh kosong',
            'numeric' => 'Umur harus berupa angka '
        ]);
        $this->form_validation->set_rules('nama_korlap', 'Nama Korlap', 'required|trim', [
            'required' => 'Nama korlap tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama_perusahaan', 'Perusahaan', 'required|trim', [
            'required' => 'Perusahaan tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'nik' => strip_tags(form_error('nik')),
                'nama_korlap' => strip_tags(form_error('nama_korlap')),
                'umur' => strip_tags(form_error('umur')),
                'nama_perusahaan' => strip_tags(form_error('nama_perusahaan')),
                'status' => 'gagal'
            ];
        } else {
            $this->Korlap_model->tambah_pegawai_korlap();
            $response['status'] = 'berhasil';
        }
        echo json_encode($response);
    }

    public function tampil_id()
    {
        $id = $this->input->post('id');
        $data_id = $this->Korlap_model->tampil_pegawai_id_korlap($id);
        $perusahaan = $this->db->query('SELECT * FROM tb_perusahaan WHERE id_perusahaan != 1')->result_array();
        $response = [
            'id_korlap' => $data_id['id_korlap'],
            'id_perusahaan' => $data_id['id_perusahaan'],
            'nik' => $data_id['nik'],
            'nama_korlap' => $data_id['nama_korlap'],
            'perusahaan' => $perusahaan,
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
        $this->form_validation->set_rules('nama_korlap', 'Nama Pegawai', 'required|trim', [
            'required' => 'Nama pegawai tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama_perusahaan', 'Perusahaan', 'required|trim', [
            'required' => 'Perusahaan tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'nama_korlap' => strip_tags(form_error('nama_korlap')),
                'umur' => strip_tags(form_error('umur')),
                'nama_perusahaan' => strip_tags(form_error('nama_perusahaan')),
                'status' => 'gagal'
            ];
        } else {
            $this->Korlap_model->ubah_pegawai_korlap();
            $response['status'] = 'berhasil';
        }

        echo json_encode($response);
    }

    public function hapus()
    {
        $id = $this->input->post('id');
        $this->db->delete('tb_korlap', ['id_korlap' => $id]);
        echo json_encode('berhasil');
    }
}
