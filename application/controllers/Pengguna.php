<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Pengguna_model');
        $this->load->model('Perusahaan_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman Pengguna';
        $data['pengguna'] = $this->Pengguna_model->tampil_pengguna();
        $data['perusahaan'] = $this->Perusahaan_model->tampil_perusahaan();
        $data['jabatan'] = $this->db->query('SELECT * FROM tb_jabatan LIMIT 0,5')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pengguna/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nik', 'Nik', 'required|trim|numeric|is_unique[tb_pengguna.nik]', [
            'is_unique' => 'Nik sudah terdaftar',
            'required' => 'Nik tidak boleh kosong',
            'numeric' => 'Nik harus berupa angka '
        ]);
        $this->form_validation->set_rules('nama_pengguna', 'Nama Pengguna', 'required|trim', [
            'required' => 'Nama pengguna tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama_jabatan', 'Jabatan', 'required|trim', [
            'required' => 'Jabatan tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required|trim', [
            'required' => 'Perusahaan tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('katasandi', 'Katasandi', 'required|trim', [
            'required' => 'Katasandi tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('konf_katasandi', 'Konfirmasi katasandi', 'required|trim|matches[katasandi]', [
            'required' => 'Konfirmasi katasandi tidak boleh kosong',
            'matches' => 'Konfirmasi katasandi tidak sama'
        ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'nik' => strip_tags(form_error('nik')),
                'nama_pengguna' => strip_tags(form_error('nama_pengguna')),
                'nama_jabatan' => strip_tags(form_error('nama_jabatan')),
                'nama_perusahaan' => strip_tags(form_error('nama_perusahaan')),
                'katasandi' => strip_tags(form_error('katasandi')),
                'konf_katasandi' => strip_tags(form_error('konf_katasandi')),
                'status' => 'gagal'
            ];
        } else {
            $this->Pengguna_model->tambah_pengguna();
            $response['status'] = 'berhasil';
        }

        echo json_encode($response);
    }

    public function tampil_id()
    {
        $id = $this->input->post('id');
        $data_id = $this->Pengguna_model->tampil_pengguna_id($id);
        $response = [
            'id_pengguna' => $data_id['id_pengguna'],
            'id_jabatan' => $data_id['id_jabatan'],
            'id_perusahaan' => $data_id['id_perusahaan'],
            'perusahaan' => $this->Perusahaan_model->tampil_perusahaan(),
            'jabatan' => $this->db->query('SELECT * FROM tb_jabatan LIMIT 0,3')->result_array(),
            'nama_pengguna' => $data_id['nama_pengguna'],
            'nik' => $data_id['nik'],
            'status' => 'berhasil'
        ];
        echo json_encode($response);
    }

    public function ubah()
    {

        $this->form_validation->set_rules('nik', 'Nik', 'required|trim|numeric', [
            'required' => 'Nik tidak boleh kosong',
            'numeric' => 'Nik harus berupa angka '
        ]);
        $this->form_validation->set_rules('nama_pengguna', 'Nama Pengguna', 'required|trim', [
            'required' => 'Nama pengguna tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama_jabatan', 'Jabatan', 'required|trim', [
            'required' => 'Jabatan tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama_perusahaan', 'Perusahaan', 'required|trim', [
            'required' => 'Perusahaan tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'nik' => strip_tags(form_error('nik')),
                'nama_pengguna' => strip_tags(form_error('nama_pengguna')),
                'nama_jabatan' => strip_tags(form_error('nama_jabatan')),
                'nama_perusahaan' => strip_tags(form_error('nama_perusahaan')),
                'status' => 'gagal'
            ];
        } else {
            $this->Pengguna_model->ubah_pengguna();
            $response['status'] = 'berhasil';
        }

        echo json_encode($response);
    }

    public function hapus()
    {
        $id = $this->input->post('id');
        $this->db->delete('tb_pengguna', ['id_pengguna' => $id]);
        echo json_encode('berhasil');
    }
}
