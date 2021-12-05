<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survei_model extends CI_Model
{
    public function readQuestion()
    {
        $query = $this->db->get('survei_pertanyaan');
        return $query->result_array();
    }

    // public function getPenandatangan()
    // {
    //     $q = "SELECT `user`.`name`, `user`.`jabatan_id`, `user_jabatan`.`jabatan` 
    //             FROM `user` JOIN `user_jabatan`
    //             ON  `user`.`jabatan_id` = `user_jabatan`.`id`
    //             ";
    //     return $this->db->query($q)->result_array();
    // }

    public function getPenandatanganByName()
    {
        $name = $this->input->post('penandatangan');
        $q = "SELECT `user`.`name`, `user`.`jabatan_id`, `user`.`nip`, `user_jabatan`.`jabatan` 
                FROM `user` JOIN `user_jabatan`
                ON  `user`.`jabatan_id` = `user_jabatan`.`id`
                WHERE `user`.`name` = '$name'
                ";

        return $this->db->query($q)->result_array();
    }

    public function newSurveiIkm()
    {
        $data = [
            'fasilitas_informasi' => htmlspecialchars($this->input->post('fasilitas_informasi', true)),
            'fasilitas_toilet' => htmlspecialchars($this->input->post('fasilitas_toilet', true)),
            'parkir_kendaraan' => htmlspecialchars($this->input->post('parkir_kendaraan', true)),
            'kebersihan' => htmlspecialchars($this->input->post('kebersihan', true)),
            'taman' => htmlspecialchars($this->input->post('taman', true)),
            'sarana_ibadah' => htmlspecialchars($this->input->post('sarana_ibadah', true)),
            'ruang_tunggu' => htmlspecialchars($this->input->post('ruang_tunggu', true)),
            'sistem_pembayaran' => htmlspecialchars($this->input->post('sistem_pembayaran', true)),
            'pelayanan_pendaftaran' => htmlspecialchars($this->input->post('pelayanan_pendaftaran', true)),
            'persiapan_persidangan' => htmlspecialchars($this->input->post('persiapan_persidangan', true)),
            'fasilitas_ruang_sidang' => htmlspecialchars($this->input->post('fasilitas_ruang_sidang', true)),
            'proses_persidangan' => htmlspecialchars($this->input->post('proses_persidangan', true)),
            'waktu_pemeriksaan' => htmlspecialchars($this->input->post('waktu_pemeriksaan', true)),
            'pemeriksaan_setempat' => htmlspecialchars($this->input->post('pemeriksaan_setempat', true)),
            'profesionalitas_hakim' => htmlspecialchars($this->input->post('profesionalitas_hakim', true)),
            'pemberian_salinan_putusan' => htmlspecialchars($this->input->post('pemberian_salinan_putusan', true)),
            'pelayanan_pengaduan' => htmlspecialchars($this->input->post('pelayanan_pengaduan', true)),
            'pelayanan_persuratan' => htmlspecialchars($this->input->post('pelayanan_persuratan', true)),
            'pengembalian_sisa_biaya_panjar' => htmlspecialchars($this->input->post('pengembalian_sisa_biaya_panjar', true)),
            'permohonan_eksekusi' => htmlspecialchars($this->input->post('permohonan_eksekusi', true)),
            'sikap_petugas' => htmlspecialchars($this->input->post('sikap_petugas', true)),
            'kemampuan_pengetahuan_petugas' => htmlspecialchars($this->input->post('kemampuan_pengetahuan_petugas', true)),
            'penampilan_petugas' => htmlspecialchars($this->input->post('penampilan_petugas', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'no_tlp' => htmlspecialchars($this->input->post('no_tlp', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
            'kritik_saran' => htmlspecialchars($this->input->post('kritik_saran', true))
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

    public function getPertanyaanIkm()
    {
        $query = $this->db->get_where('survei_pertanyaan', ['jenis_survei' => "ikm"]);
        return $query->result_array();
    }

    public function newPertanyaanIkm()
    {
        $data = [
            'pertanyaan' => htmlspecialchars($this->input->post('pertanyaan', true)),
            'kategori' => htmlspecialchars($this->input->post('kategori', true)),
            'jenis_survei' => htmlspecialchars($this->input->post('jenis_survei', true))
        ];
        $this->db->insert('survei_pertanyaan', $data);
        $this->session->set_flashdata('message', 'Disimpan');
        redirect('survei/pertanyaan_ikm');
    }

    public function jlhPertanyaanIkm()
    {
        $this->db->like('jenis_survei', 'ikm');
        $this->db->from('survei_pertanyaan');
        return $this->db->count_all_results();
    }

    public function getPenandatangan()
    {
        $q = "SELECT `user`.`name`, `user`.`jabatan_id`, `user_jabatan`.`jabatan` 
                FROM `user` JOIN `user_jabatan`
                ON  `user`.`jabatan_id` = `user_jabatan`.`id`
                ";
        return $this->db->query($q)->result_array();
    }

    public function cetakIkm($id)
    {
        $query = "SELECT `survei_hasil_ikm`.* 
                FROM `survei_hasil_ikm`
                WHERE `survei_hasil_ikm`.`id` = $id
                ";
        return $this->db->query($query)->row_array();
    }
}
