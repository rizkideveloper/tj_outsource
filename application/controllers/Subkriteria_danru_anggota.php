<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subkriteria_danru_anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Subkriteria_model');
        $this->load->model('Kriteria_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman SubKriteria Danru & Angggota';
        $data['subkriteria_da'] = $this->Subkriteria_model->tampil_subkriteria_da();
        $data['kriteria'] = $this->Kriteria_model->tampil_kriteria();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('subkriteria/danru_anggota/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $this->form_validation->set_rules('kode_subkriteria', 'Kode', 'required|trim', [
            'required' => 'Kode subkriteria tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('nama_subkriteria', 'Nama subkriteria', 'required|trim', [
            'required' => 'Nama subkriteria tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama_kriteria', 'Nama kriteria', 'required|trim', [
            'required' => 'Nama kriteria tidak boleh kosong'
        ]);


        if ($this->form_validation->run() == false) {
            $response = [
                'kode_subkriteria' => strip_tags(form_error('kode_subkriteria')),
                'nama_subkriteria' => strip_tags(form_error('nama_subkriteria')),
                'nama_kriteria' => strip_tags(form_error('nama_kriteria')),
                'status' => 'gagal'
            ];
        } else {
            $this->Subkriteria_model->tambah_subkriteria_da();
            $response['status'] = 'berhasil';
        }

        echo json_encode($response);
    }

    public function tampil_id()
    {
        $id = $this->input->post('id');
        $data_id = $this->db->get_where('tb_subkriteria_da', ['id_subkriteria_da' => $id])->row_array();
        $response = [
            'id_subkriteria_da' => $data_id['id_subkriteria_da'],
            'kode_subkriteria_da' => $data_id['kode_subkriteria_da'],
            'nama_subkriteria_da' => $data_id['nama_subkriteria_da'],
            'nama_kriteria' => $data_id['id_kriteria_da'],
            'kriteria' => $this->Kriteria_model->tampil_kriteria(),
            'bobot_subkriteria_da' => $data_id['bobot_subkriteria_da'],
            'status' => 'berhasil'
        ];
        echo json_encode($response);
    }

    public function ubah()
    {
        $this->form_validation->set_rules('nama_subkriteria', 'Nama Subkriteria', 'required|trim', [
            'required' => 'Nama subkriteria tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'nama_subkriteria' => strip_tags(form_error('nama_subkriteria')),
                'status' => 'gagal'
            ];
        } else {
            $this->Subkriteria_model->ubah_subkriteria_da();
            $response['status'] = 'berhasil';
        }

        echo json_encode($response);
    }

    public function perbandingan_subkriteria()
    {
        $data['title'] = 'Halaman Perbadingan Subkriteria Danru & Anggota';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('Subkriteria/danru_anggota/perbandingan_subkriteria', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_bobot()
    {
        $prs1 = round($this->input->post('prs1'), 2);
        $prs2 = round($this->input->post('prs2'), 2);
        $prs3 = round($this->input->post('prs3'), 2);
        $prs4 = round($this->input->post('prs4'), 2);
        $prs5 = round($this->input->post('prs5'), 2);
        $prs6 = round($this->input->post('prs6'), 2);
        $prs7 = round($this->input->post('prs7'), 2);

        // $response = [
        //     'prs1' => $prs1,
        //     'prs2' => $prs2,
        //     'prs3' => $prs3,
        //     'prs4' => $prs4,
        //     'prs5' => $prs5,
        //     'prs6' => $prs6,
        //     'prs7' => $prs7,
        //     'status' => 'berhasil'
        // ];

        $data = $this->db->get('tb_subkriteria_da')->result_array();

        foreach ($data as $key => $value) {
            if ($value['kode_subkriteria_da'] == 'S1') {
                $id = $value['id_subkriteria_da'];
                $this->db->update('tb_subkriteria_da', ['bobot_subkriteria_da' => $prs1], ['id_subkriteria_da' => $id]);
            } elseif ($value['kode_subkriteria_da'] == 'S2') {
                $id = $value['id_subkriteria_da'];
                $this->db->update('tb_subkriteria_da', ['bobot_subkriteria_da' => $prs2], ['id_subkriteria_da' => $id]);
            } elseif ($value['kode_subkriteria_da'] == 'S3') {
                $id = $value['id_subkriteria_da'];
                $this->db->update('tb_subkriteria_da', ['bobot_subkriteria_da' => $prs3], ['id_subkriteria_da' => $id]);
            } elseif ($value['kode_subkriteria_da'] == 'S4') {
                $id = $value['id_subkriteria_da'];
                $this->db->update('tb_subkriteria_da', ['bobot_subkriteria_da' => $prs4], ['id_subkriteria_da' => $id]);
            } elseif ($value['kode_subkriteria_da'] == 'S5') {
                $id = $value['id_subkriteria_da'];
                $this->db->update('tb_subkriteria_da', ['bobot_subkriteria_da' => $prs5], ['id_subkriteria_da' => $id]);
            } elseif ($value['kode_subkriteria_da'] == 'S6') {
                $id = $value['id_subkriteria_da'];
                $this->db->update('tb_subkriteria_da', ['bobot_subkriteria_da' => $prs6], ['id_subkriteria_da' => $id]);
            } elseif ($value['kode_subkriteria_da'] == 'S7') {
                $id = $value['id_subkriteria_da'];
                $this->db->update('tb_subkriteria_da', ['bobot_subkriteria_da' => $prs7], ['id_subkriteria_da' => $id]);
            }
        }
        echo json_encode('berhasil');
    }

    public function hapus()
    {
        $id = $this->input->post('id');
        $this->db->delete('tb_subkriteria_da', ['id_subkriteria_da' => $id]);
        echo json_encode('berhasil');
    }
}
