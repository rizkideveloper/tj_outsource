<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Danru_model extends CI_Model
{
    public function tampil_pegawai_danru()
    {
        $this->db->select('*, dr.umur');
        $this->db->from('tb_danru dr');
        $this->db->join('tb_perusahaan pr', 'dr.id_perusahaan = pr.id_perusahaan');
        $this->db->join('tb_jabatan jb', 'dr.id_jabatan = jb.id_jabatan');
        $this->db->join('tb_korlap kp', 'dr.id_korlap = kp.id_korlap');
        return $this->db->get()->result_array();
    }

    public function tampil_pegawai_id_danru($id)
    {
        $this->db->select('*,dr.umur');
        $this->db->from('tb_danru dr');
        $this->db->join('tb_perusahaan pr', 'dr.id_perusahaan = pr.id_perusahaan');
        $this->db->join('tb_jabatan jb', 'dr.id_jabatan = jb.id_jabatan');
        $this->db->join('tb_korlap kp', 'dr.id_korlap = kp.id_korlap');
        $this->db->where('id_danru', $id);
        return $this->db->get()->row_array();
    }

    public function tambah_pegawai_danru()
    {
        $nama_danru = $this->input->post('nama_danru', true);
        $nik = $this->input->post('nik', true);
        $umur = $this->input->post('umur', true);
        $jabatan = 5;
        $perusahaan = $this->input->post('nama_perusahaan', true);
        $id_korlap = $this->input->post('id_korlap', true);

        $data = [
            'id_perusahaan' => $perusahaan,
            'id_jabatan' => $jabatan,
            'id_korlap' => $id_korlap,
            'nik' => $nik,
            'nama_danru' => $nama_danru,
            'umur' => $umur
        ];

        $this->db->insert('tb_danru', $data);
    }

    public function ubah_pegawai_danru()
    {
        $id_danru = $this->input->post('id_danru');
        $id_korlap = $this->input->post('id_korlap');
        $nama_danru = $this->input->post('nama_danru', true);
        $umur = $this->input->post('umur', true);
        $perusahaan = $this->input->post('nama_perusahaan', true);

        $data = [
            'id_perusahaan' => $perusahaan,
            'id_korlap' => $id_korlap,
            'nama_danru' => $nama_danru,
            'umur' => $umur
        ];

        $this->db->update('tb_danru', $data, ['id_danru' => $id_danru]);
    }
}
