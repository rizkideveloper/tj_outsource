<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria_model extends CI_Model
{
    public function tampil_kriteria()
    {

        return $this->db->get('tb_kriteria')->result_array();
    }

    public function tambah_kriteria()
    {
        $kode_kriteria = $this->input->post('kode_kriteria', true);
        $nama_kriteria = $this->input->post('nama_kriteria', true);
        $bobot_kriteria = $this->input->post('bobot_kriteria', true);

        $data = [
            'kode_kriteria' => $kode_kriteria,
            'nama_kriteria' => $nama_kriteria,
            'bobot_kriteria' => $bobot_kriteria
        ];

        $this->db->insert('tb_kriteria', $data);
    }

    public function ubah_kriteria()
    {
        $id = $this->input->post('id', true);
        $nama_kriteria = $this->input->post('nama_kriteria', true);

        $this->db->update('tb_kriteria', ['nama_kriteria' => $nama_kriteria], ['id_kriteria' => $id]);
    }

    public function tampil_pk()
    {

        return $this->db->get('tb_perbandingan_kriteria')->result_array();
    }
}
