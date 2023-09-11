<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Korlap_model extends CI_Model
{
    public function tampil_pegawai_korlap()
    {
        $this->db->select('*');
        $this->db->from('tb_korlap kp');
        $this->db->join('tb_perusahaan pr', 'kp.id_perusahaan = pr.id_perusahaan');
        $this->db->join('tb_jabatan jb', 'kp.id_jabatan = jb.id_jabatan');
        return $this->db->get()->result_array();
    }

    public function tampil_pegawai_id_korlap($id)
    {
        $this->db->select('*');
        $this->db->from('tb_korlap kp');
        $this->db->join('tb_perusahaan pr', 'kp.id_perusahaan = pr.id_perusahaan');
        $this->db->join('tb_jabatan jb', 'kp.id_jabatan = jb.id_jabatan');
        $this->db->where('id_korlap', $id);
        return $this->db->get()->row_array();
    }

    public function tambah_pegawai_korlap()
    {
        $nama_korlap = $this->input->post('nama_korlap', true);
        $nik = $this->input->post('nik', true);
        $umur = $this->input->post('umur', true);
        $jabatan = 4;
        $perusahaan = $this->input->post('nama_perusahaan', true);

        $data = [
            'id_perusahaan' => $perusahaan,
            'id_jabatan' => $jabatan,
            'nik' => $nik,
            'nama_korlap' => $nama_korlap,
            'umur' => $umur
        ];

        $this->db->insert('tb_korlap', $data);
    }

    public function ubah_pegawai_korlap()
    {
        $id = $this->input->post('id');
        $nama_korlap = $this->input->post('nama_korlap', true);
        $umur = $this->input->post('umur', true);
        $perusahaan = $this->input->post('nama_perusahaan', true);

        $data = [
            'id_perusahaan' => $perusahaan,
            'nama_korlap' => $nama_korlap,
            'umur' => $umur
        ];

        $this->db->update('tb_korlap', $data, ['id_korlap' => $id]);
    }
}
