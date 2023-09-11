<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_model extends CI_Model
{
    public function tampil_pengguna()
    {
        $this->db->select('*');
        $this->db->from('tb_pengguna pg');
        $this->db->join('tb_perusahaan pr', 'pg.id_perusahaan = pr.id_perusahaan');
        $this->db->join('tb_jabatan jb', 'pg.id_jabatan = jb.id_jabatan');
        $this->db->order_by('pg.id_jabatan ASC');
        return $this->db->get()->result_array();
    }

    public function tambah_pengguna()
    {
        $nama_pengguna = $this->input->post('nama_pengguna', true);
        $nama_jabatan = $this->input->post('nama_jabatan', true);
        $nik = $this->input->post('nik', true);
        $nama_perusahaan = $this->input->post('nama_perusahaan', true);
        $katasandi = $this->input->post('katasandi', true);

        $data = [
            'id_jabatan' => $nama_jabatan,
            'id_perusahaan' => $nama_perusahaan,
            'nama_pengguna' => $nama_pengguna,
            'nik' => $nik,
            'katasandi' => $katasandi
        ];

        $this->db->insert('tb_pengguna', $data);
    }

    public function ubah_pengguna()
    {
        $nama_pengguna = $this->input->post('nama_pengguna', true);
        $nama_jabatan = $this->input->post('nama_jabatan', true);
        $nik = $this->input->post('nik', true);
        $nama_perusahaan = $this->input->post('nama_perusahaan', true);
        $id = $this->input->post('id', true);

        $data = [
            'id_jabatan' => $nama_jabatan,
            'id_perusahaan' => $nama_perusahaan,
            'nama_pengguna' => $nama_pengguna,
            'nik' => $nik
        ];
        $this->db->update('tb_pengguna', $data, ['id_pengguna' => $id]);
    }
}
