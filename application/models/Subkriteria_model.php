<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subkriteria_model extends CI_Model
{
    public function tampil_subkriteria_korlap()
    {
        $this->db->select('*');
        $this->db->from('tb_subkriteria_korlap sk');
        $this->db->join('tb_kriteria k', 'sk.id_kriteria_korlap = k.id_kriteria');
        return $this->db->get()->result_array();
    }

    public function tambah_subkriteria_korlap()
    {
        $nama_subkriteria = $this->input->post('nama_subkriteria', true);
        $nama_kriteria = $this->input->post('nama_kriteria', true);
        $kode_subkriteria = $this->input->post('kode_subkriteria', true);
        $bobot_subkriteria = $this->input->post('bobot_subkriteria', true);

        $data = [
            'id_kriteria_korlap' => $nama_kriteria,
            'kode_subkriteria_korlap' => $kode_subkriteria,
            'nama_subkriteria_korlap' => $nama_subkriteria,
            'bobot_subkriteria_korlap' => $bobot_subkriteria
        ];

        $this->db->insert('tb_subkriteria_korlap', $data);
    }

    public function ubah_subkriteria_korlap()
    {
        $id = $this->input->post('id_subkriteria', true);
        $nama_subkriteria = $this->input->post('nama_subkriteria', true);
        $nama_kriteria = $this->input->post('nama_kriteria', true);

        $data = [
            'id_kriteria_korlap' => $nama_kriteria,
            'nama_subkriteria_korlap' => $nama_subkriteria,
        ];

        $this->db->update('tb_subkriteria_korlap', $data, ['id_subkriteria_korlap' => $id]);
    }

    public function tampil_subkriteria_da()
    {
        $this->db->select('*');
        $this->db->from('tb_subkriteria_da sk');
        $this->db->join('tb_kriteria k', 'sk.id_kriteria_da = k.id_kriteria');
        return $this->db->get()->result_array();
    }

    public function tambah_subkriteria_da()
    {
        $nama_subkriteria = $this->input->post('nama_subkriteria', true);
        $nama_kriteria = $this->input->post('nama_kriteria', true);
        $kode_subkriteria = $this->input->post('kode_subkriteria', true);
        $bobot_subkriteria = $this->input->post('bobot_subkriteria', true);

        $data = [
            'id_kriteria_da' => $nama_kriteria,
            'kode_subkriteria_da' => $kode_subkriteria,
            'nama_subkriteria_da' => $nama_subkriteria,
            'bobot_subkriteria_da' => $bobot_subkriteria
        ];

        $this->db->insert('tb_subkriteria_da', $data);
    }

    public function ubah_subkriteria_da()
    {
        $id = $this->input->post('id_subkriteria', true);
        $nama_subkriteria = $this->input->post('nama_subkriteria', true);
        $nama_kriteria = $this->input->post('nama_kriteria', true);

        $data = [
            'id_kriteria_da' => $nama_kriteria,
            'nama_subkriteria_da' => $nama_subkriteria,
        ];

        $this->db->update('tb_subkriteria_da', $data, ['id_subkriteria_da' => $id]);
    }
}
