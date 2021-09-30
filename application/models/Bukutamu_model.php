<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bukutamu_model extends CI_Model
{
    public function newVisitor()
    {
        $data = [
            'no_id' => htmlspecialchars($this->input->post('no_id', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
            'no_tlp' => htmlspecialchars($this->input->post('no_tlp', true)),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
            'keperluan' => htmlspecialchars($this->input->post('keperluan', true))
        ];

        $this->db->insert('bukutamu_profil_pengunjung', $data);
        $this->session->set_flashdata('message', 'Disimpan');
        redirect('bukutamu');
    }

    public function visitorToday()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'no_tlp' => htmlspecialchars($this->input->post('no_tlp', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
            'keperluan' => htmlspecialchars($this->input->post('keperluan', true))
        ];

        $this->db->insert('bukutamu_daftar_kunjungan', $data);
        $this->session->set_flashdata('message', 'Ditambahkan');
        redirect('bukutamu');
    }
}
