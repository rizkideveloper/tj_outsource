<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Perusahaan_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman Perusahaan';
        $data['perusahaan'] = $this->Perusahaan_model->tampil_perusahaan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('perusahaan/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required|trim', [
            'required' => 'Nama perusahaan tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email tidak boleh kosong',
            'valid_email' => 'Email tidak sesuai'
        ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'nama_perusahaan' => strip_tags(form_error('nama_perusahaan')),
                'alamat' => strip_tags(form_error('alamat')),
                'email' => strip_tags(form_error('email')),
                'status' => 'gagal'
            ];
        } else {
            $this->Perusahaan_model->tambah_perusahaan();
            $response['status'] = 'berhasil';
        }

        echo json_encode($response);
    }

    public function tampil_id()
    {
        $id = $this->input->post('id');
        $data_id = $this->db->get_where('tb_perusahaan', ['id_perusahaan' => $id])->row_array();
        $response = [
            'id_perusahaan' => $data_id['id_perusahaan'],
            'nama_perusahaan' => $data_id['nama_perusahaan'],
            'alamat' => $data_id['alamat'],
            'email' => $data_id['email'],
            'status' => 'berhasil'
        ];
        echo json_encode($response);
    }

    public function ubah()
    {
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required|trim', [
            'required' => 'Nama perusahaan tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email tidak boleh kosong',
            'valid_email' => 'Email tidak sesuai'
        ]);

        if ($this->form_validation->run() == false) {
            $response = [
                'nama_perusahaan' => strip_tags(form_error('nama_perusahaan')),
                'alamat' => strip_tags(form_error('alamat')),
                'email' => strip_tags(form_error('email')),
                'status' => 'gagal'
            ];
        } else {
            $this->Perusahaan_model->ubah_perusahaan();
            $response['status'] = 'berhasil';
        }

        echo json_encode($response);
    }

    public function hapus()
    {
        $id = $this->input->post('id');
        $this->db->delete('tb_perusahaan', ['id_perusahaan' => $id]);
        echo json_encode('berhasil');
    }
}
