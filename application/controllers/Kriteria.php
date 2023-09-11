<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Kriteria_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman Kriteria';
        $data['kriteria'] = $this->Kriteria_model->tampil_kriteria();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kriteria/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $this->form_validation->set_rules('kode_kriteria', 'Kode', 'required|trim', [
            'required' => 'Kode kriteria tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('nama_kriteria', 'Nama kriteria', 'required|trim', [
            'required' => 'Nama kriteria tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('bobot_kriteria', 'Bobot', 'required|trim', [
            'required' => 'Bobot tidak boleh kosong',
        ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'kode_kriteria' => strip_tags(form_error('kode_kriteria')),
                'nama_kriteria' => strip_tags(form_error('nama_kriteria')),
                'bobot_kriteria' => strip_tags(form_error('bobot_kriteria')),
                'status' => 'gagal'
            ];
        } else {
            $this->Kriteria_model->tambah_kriteria();
            $response['status'] = 'berhasil';
        }

        echo json_encode($response);
    }

    public function tampil_id()
    {
        $id = $this->input->post('id');
        $data_id = $this->db->get_where('tb_kriteria', ['id_kriteria' => $id])->row_array();
        $response = [
            'id_kriteria' => $data_id['id_kriteria'],
            'kode_kriteria' => $data_id['kode_kriteria'],
            'nama_kriteria' => $data_id['nama_kriteria'],
            'bobot_kriteria' => $data_id['bobot_kriteria'],
            'status' => 'berhasil'
        ];
        echo json_encode($response);
    }

    public function ubah()
    {
        $this->form_validation->set_rules('nama_kriteria', 'Nama kriteria', 'required|trim', [
            'required' => 'Nama kriteria tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'nama_kriteria' => strip_tags(form_error('nama_kriteria')),
                'status' => 'gagal'
            ];
        } else {
            $this->Kriteria_model->ubah_kriteria();
            $response['status'] = 'berhasil';
        }

        echo json_encode($response);
    }

    public function hapus()
    {
        $id = $this->input->post('id');
        $this->db->delete('tb_kriteria', ['id_kriteria' => $id]);
        echo json_encode('berhasil');
    }

    public function perbandingan_kriteria()
    {
        $data['title'] = 'Halaman Perbadingan Kriteria';
        $data['pk'] = $this->Kriteria_model->tampil_pk();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kriteria/perbandingan_kriteria', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_bobot()
    {
        $prk1 = round($this->input->post('prk1'), 2);
        $prf2 = round($this->input->post('prf2'), 2);
        $prp3 = round($this->input->post('prp3'), 2);
        $prs4 = round($this->input->post('prs4'), 2);
        $pru5 = round($this->input->post('pru5'), 2);

        // $response = [
        //     'prk1' => $prk1,
        //     'prf2' => $prf2,
        //     'prp3' => $prp3,
        //     'prs4' => $prs4,
        //     'pru5' => $pru5,
        //     'status' => 'berhasil'
        // ];

        $data = $this->db->get('tb_kriteria')->result_array();

        foreach ($data as $key => $value) {
            if ($value['kode_kriteria'] == 'K') {
                $id = $value['id_kriteria'];
                $this->db->update('tb_kriteria', ['bobot_kriteria' => $prk1], ['id_kriteria' => $id]);
            } elseif ($value['kode_kriteria'] == 'F') {
                $id = $value['id_kriteria'];
                $this->db->update('tb_kriteria', ['bobot_kriteria' => $prf2], ['id_kriteria' => $id]);
            } elseif ($value['kode_kriteria'] == 'P') {
                $id = $value['id_kriteria'];
                $this->db->update('tb_kriteria', ['bobot_kriteria' => $prp3], ['id_kriteria' => $id]);
            } elseif ($value['kode_kriteria'] == 'S') {
                $id = $value['id_kriteria'];
                $this->db->update('tb_kriteria', ['bobot_kriteria' => $prs4], ['id_kriteria' => $id]);
            } elseif ($value['kode_kriteria'] == 'U') {
                $id = $value['id_kriteria'];
                $this->db->update('tb_kriteria', ['bobot_kriteria' => $pru5], ['id_kriteria' => $id]);
            }
        }
        echo json_encode('berhasil');
    }
}
