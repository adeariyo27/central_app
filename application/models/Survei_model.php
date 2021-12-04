<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survei_model extends CI_Model
{
    public function readQuestion()
    {
        $query = $this->db->get('survei_pertanyaan');
        return $query->result_array();
    }

    public function newSurveiIkm()
    {
        $data = [
            'fasilitas_informasi' => htmlspecialchars($this->input->post('fasilitas_informasi', true)),
            'fasilitas_toilet' => htmlspecialchars($this->input->post('fasilitas_toilet', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'no_tlp' => htmlspecialchars($this->input->post('no_tlp', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true))
        ];
        $this->db->insert('survei_hasil_ikm', $data);
        $this->session->set_flashdata('message', 'Disimpan');
        redirect('survei');
    }

    public function readIkm()
    {
        $query = $this->db->get('survei_hasil_ikm');
        return $query->result_array();
    }
}
