<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subkriteria_korlap extends CI_Controller
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
        $data['title'] = 'Halaman SubKriteria Korlap';
        $data['subkriteria_korlap'] = $this->Subkriteria_model->tampil_subkriteria_korlap();
        $data['kriteria'] = $this->Kriteria_model->tampil_kriteria();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('subkriteria/korlap/index');
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
            $this->Subkriteria_model->tambah_subkriteria_korlap();
            $response['status'] = 'berhasil';
        }

        echo json_encode($response);
    }

    public function tampil_id()
    {
        $id = $this->input->post('id');
        $data_id = $this->db->get_where('tb_subkriteria_korlap', ['id_subkriteria_korlap' => $id])->row_array();
        $response = [
            'id_subkriteria_korlap' => $data_id['id_subkriteria_korlap'],
            'kode_subkriteria_korlap' => $data_id['kode_subkriteria_korlap'],
            'nama_subkriteria_korlap' => $data_id['nama_subkriteria_korlap'],
            'nama_kriteria' => $data_id['id_kriteria_korlap'],
            'kriteria' => $this->Kriteria_model->tampil_kriteria(),
            'bobot_subkriteria_korlap' => $data_id['bobot_subkriteria_korlap'],
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
            $this->Subkriteria_model->ubah_subkriteria_korlap();
            $response['status'] = 'berhasil';
        }

        echo json_encode($response);
    }

    public function perbandingan_subkriteria()
    {
        $data['title'] = 'Halaman Perbadingan Subkriteria';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('Subkriteria/korlap/perbandingan_subkriteria', $data);
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

        $data = $this->db->get('tb_subkriteria_korlap')->result_array();

        foreach ($data as $key => $value) {
            if ($value['kode_subkriteria_korlap'] == 'S1') {
                $id = $value['id_subkriteria_korlap'];
                $this->db->update('tb_subkriteria_korlap', ['bobot_subkriteria_korlap' => $prs1], ['id_subkriteria_korlap' => $id]);
            } elseif ($value['kode_subkriteria_korlap'] == 'S2') {
                $id = $value['id_subkriteria_korlap'];
                $this->db->update('tb_subkriteria_korlap', ['bobot_subkriteria_korlap' => $prs2], ['id_subkriteria_korlap' => $id]);
            } elseif ($value['kode_subkriteria_korlap'] == 'S3') {
                $id = $value['id_subkriteria_korlap'];
                $this->db->update('tb_subkriteria_korlap', ['bobot_subkriteria_korlap' => $prs3], ['id_subkriteria_korlap' => $id]);
            } elseif ($value['kode_subkriteria_korlap'] == 'S4') {
                $id = $value['id_subkriteria_korlap'];
                $this->db->update('tb_subkriteria_korlap', ['bobot_subkriteria_korlap' => $prs4], ['id_subkriteria_korlap' => $id]);
            } elseif ($value['kode_subkriteria_korlap'] == 'S5') {
                $id = $value['id_subkriteria_korlap'];
                $this->db->update('tb_subkriteria_korlap', ['bobot_subkriteria_korlap' => $prs5], ['id_subkriteria_korlap' => $id]);
            } elseif ($value['kode_subkriteria_korlap'] == 'S6') {
                $id = $value['id_subkriteria_korlap'];
                $this->db->update('tb_subkriteria_korlap', ['bobot_subkriteria_korlap' => $prs6], ['id_subkriteria_korlap' => $id]);
            } elseif ($value['kode_subkriteria_korlap'] == 'S7') {
                $id = $value['id_subkriteria_korlap'];
                $this->db->update('tb_subkriteria_korlap', ['bobot_subkriteria_korlap' => $prs7], ['id_subkriteria_korlap' => $id]);
            }
        }
        echo json_encode('berhasil');
    }

    public function hapus()
    {
        $id = $this->input->post('id');
        $this->db->delete('tb_subkriteria_korlap', ['id_subkriteria_korlap' => $id]);
        echo json_encode('berhasil');
    }
}
