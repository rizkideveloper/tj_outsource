<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Autentikasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'required|trim', [
			'required' => 'nik tidak boleh kosong'
		]);
		$this->form_validation->set_rules('katasandi', 'Kata sandi', 'required|trim', [
			'required' => 'kata sandi tidak boleh kosong'
		]);
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Halaman Masuk';
			$this->load->view('templates/header_login', $data);
			$this->load->view('autentikasi/index');
			$this->load->view('templates/footer_login');
		} else {
			$this->masuk();
		}
	}

	public function masuk()
	{
		$nik = $this->input->post('nik');
		$katasandi = $this->input->post('katasandi');

		$this->db->select('*');
		$this->db->from('tb_pengguna pg');
		$this->db->join('tb_jabatan jb', 'pg.id_jabatan = jb.id_jabatan');
		$this->db->join('tb_perusahaan ph', 'pg.id_perusahaan = ph.id_perusahaan');
		$this->db->where('nik', $nik);
		$pengguna = $this->db->get()->row_array();


		if ($pengguna) {

			//cek katasandi
			if ($katasandi == $pengguna['katasandi']) {
				$data = [
					'nik' => $pengguna['nik'],
					'nama_pengguna' => $pengguna['nama_pengguna'],
					'jabatan' => $pengguna['nama_jabatan'],
					'perusahaan' => $pengguna['nama_perusahaan']
				];
				$this->session->set_userdata($data);

				if ($pengguna['nama_jabatan'] == 'Koordinator Area') {
					redirect('Halaman_Utama');
				} elseif ($pengguna['nama_jabatan'] == 'Manajer Operasional') {
					redirect('Halaman_pengguna_jasa');
				}
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Nik dengan kata sandi tidak sesuai
               </div>');
				redirect('Autentikasi');
			}
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
               Nik dengan kata sandi tidak sesuai
              </div>');
			redirect('Autentikasi');
		}
	}

	public function keluar()
	{
		$this->session->unset_userdata('nama_pengguna');
		$this->session->unset_userdata('jabatan');
		$this->session->unset_userdata('nik');
		$this->session->unset_userdata('perusahaan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Berhasil keluar aplikasi</div>');
		redirect('Autentikasi');
	}
}
