<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periode_penilaian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        // $this->load->model('Periode_penilaian_model');
        $this->load->model('Perusahaan_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman Periode Penilaian';
        $data['perusahaan'] = $this->Perusahaan_model->tampil_perusahaan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('periode_penilaian/index', $data);
        $this->load->view('templates/footer');
    }
}
