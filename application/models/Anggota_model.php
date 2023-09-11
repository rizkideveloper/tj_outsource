<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_model extends CI_Model
{
    public function tampil_pegawai_anggota()
    {
        $this->db->select('*, ag.umur');
        $this->db->from('tb_anggota ag');
        $this->db->join('tb_perusahaan pr', 'ag.id_perusahaan = pr.id_perusahaan');
        $this->db->join('tb_jabatan jb', 'ag.id_jabatan = jb.id_jabatan');
        $this->db->join('tb_danru dr', 'ag.id_danru = dr.id_danru');
        return $this->db->get()->result_array();
    }

    public function tampil_pegawai_id_anggota($id)
    {
        $this->db->select('*,ag.umur');
        $this->db->from('tb_anggota ag');
        $this->db->join('tb_perusahaan pr', 'ag.id_perusahaan = pr.id_perusahaan');
        $this->db->join('tb_jabatan jb', 'ag.id_jabatan = jb.id_jabatan');
        $this->db->join('tb_danru dr', 'ag.id_danru = dr.id_danru');
        $this->db->where('id_anggota', $id);
        return $this->db->get()->row_array();
    }

    public function tambah_pegawai_anggota()
    {
        $nama_anggota = $this->input->post('nama_anggota', true);
        $nik = $this->input->post('nik', true);
        $umur = $this->input->post('umur', true);
        $jabatan = 6;
        $perusahaan = $this->input->post('nama_perusahaan', true);
        $id_danru = $this->input->post('id_danru', true);

        $data = [
            'id_perusahaan' => $perusahaan,
            'id_jabatan' => $jabatan,
            'id_danru' => $id_danru,
            'nik' => $nik,
            'nama_anggota' => $nama_anggota,
            'umur' => $umur
        ];

        $this->db->insert('tb_anggota', $data);
    }

    public function ubah_pegawai_anggota()
    {
        $id_anggota = $this->input->post('id_anggota');
        $nama_danru = $this->input->post('nama_danru');
        $nama_anggota = $this->input->post('nama_anggota', true);
        $umur = $this->input->post('umur', true);
        $perusahaan = $this->input->post('nama_perusahaan', true);

        $data = [
            'id_perusahaan' => $perusahaan,
            'id_danru' => $nama_danru,
            'nama_anggota' => $nama_anggota,
            'umur' => $umur
        ];

        $this->db->update('tb_anggota', $data, ['id_anggota' => $id_anggota]);
    }
}
