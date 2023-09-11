<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Anggota_model');
        $this->load->model('Perusahaan_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman Pegawai';
        $data['anggota'] = $this->Anggota_model->tampil_pegawai_anggota();
        $data['perusahaan'] = $this->db->query('SELECT * FROM tb_perusahaan WHERE id_perusahaan != 1')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pegawai/anggota/index');
        $this->load->view('templates/footer');
    }

    public function tampil_danru()
    {
        $id = $this->input->post('id_perusahaan');
        $this->db->select('*');
        $this->db->from('tb_danru dr');
        $this->db->join('tb_perusahaan pr', 'dr.id_perusahaan = pr.id_perusahaan');
        $this->db->join('tb_jabatan jb', 'dr.id_jabatan = jb.id_jabatan');
        $this->db->where('dr.id_perusahaan', $id);
        $danru = $this->db->get()->result_array();

        $response = [
            'danru' => $danru,
            'status' => 'berhasil'
        ];
        echo json_encode($response);
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nik', 'Nik', 'required|trim|numeric|is_unique[tb_anggota.nik]', [
            'is_unique' => 'Nik sudah terdaftar',
            'required' => 'Nik tidak boleh kosong',
            'numeric' => 'Nik harus berupa angka '
        ]);
        $this->form_validation->set_rules('umur', 'Umur', 'required|trim|numeric', [
            'required' => 'Umur tidak boleh kosong',
            'numeric' => 'Umur harus berupa angka '
        ]);
        $this->form_validation->set_rules('nama_anggota', 'Nama anggota', 'required|trim', [
            'required' => 'Nama anggota tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama_perusahaan', 'Perusahaan', 'required|trim', [
            'required' => 'Perusahaan tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'nik' => strip_tags(form_error('nik')),
                'nama_anggota' => strip_tags(form_error('nama_anggota')),
                'umur' => strip_tags(form_error('umur')),
                'nama_perusahaan' => strip_tags(form_error('nama_perusahaan')),
                'status' => 'gagal'
            ];
        } else {
            $this->Anggota_model->tambah_pegawai_anggota();
            $response['status'] = 'berhasil';
        }
        echo json_encode($response);
    }

    public function tampil_id()
    {
        $id_anggota = $this->input->post('id_anggota');
        $id_perusahaan = $this->input->post('id_perusahaan');
        $data_id = $this->Anggota_model->tampil_pegawai_id_anggota($id_anggota);
        $perusahaan = $this->db->query('SELECT * FROM tb_perusahaan WHERE id_perusahaan != 1')->result_array();
        $danru = $this->db->get_where('tb_danru', ['id_perusahaan' => $id_perusahaan])->result_array();
        $response = [
            'id_anggota' => $data_id['id_anggota'],
            'id_perusahaan' => $data_id['id_perusahaan'],
            'id_danru' => $data_id['id_danru'],
            'nik' => $data_id['nik'],
            'nama_anggota' => $data_id['nama_anggota'],
            'umur' => $data_id['umur'],
            'perusahaan' => $perusahaan,
            'danru' => $danru,
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
        $this->form_validation->set_rules('nama_anggota', 'Nama Pegawai', 'required|trim', [
            'required' => 'Nama anggota tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama_perusahaan', 'Perusahaan', 'required|trim', [
            'required' => 'Perusahaan tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'nama_anggota' => strip_tags(form_error('nama_anggota')),
                'umur' => strip_tags(form_error('umur')),
                'nama_perusahaan' => strip_tags(form_error('nama_perusahaan')),
                'status' => 'gagal'
            ];
        } else {
            $this->Anggota_model->ubah_pegawai_anggota();
            $response['status'] = 'berhasil';
        }

        echo json_encode($response);
    }

    public function hapus()
    {
        $id = $this->input->post('id');
        $this->db->delete('tb_anggota', ['id_anggota' => $id]);
        echo json_encode('berhasil');
    }
}
