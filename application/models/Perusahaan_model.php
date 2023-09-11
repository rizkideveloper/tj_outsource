<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan_model extends CI_Model
{
    public function tampil_perusahaan()
    {
        return $this->db->query('SELECT * FROM tb_perusahaan')->result_array();
    }


    public function tambah_perusahaan()
    {
        $nama_perusahaan = $this->input->post('nama_perusahaan', true);
        $alamat = $this->input->post('alamat', true);
        $email = $this->input->post('email', true);

        $data = [
            'nama_perusahaan' => $nama_perusahaan,
            'alamat' => $alamat,
            'email' => $email
        ];

        $this->db->insert('tb_perusahaan', $data);
    }

    public function ubah_perusahaan()
    {
        $id = $this->input->post('id', true);
        $nama_perusahaan = $this->input->post('nama_perusahaan', true);
        $alamat = $this->input->post('alamat', true);
        $email = $this->input->post('email', true);

        $data = [
            'nama_perusahaan' => $nama_perusahaan,
            'alamat' => $alamat,
            'email' => $email
        ];

        $this->db->update('tb_perusahaan', $data, ['id_perusahaan' => $id]);
    }
}
