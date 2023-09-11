<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halaman_utama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Halaman Utama';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('halaman_utama/index');
        $this->load->view('templates/footer');
    }
}
