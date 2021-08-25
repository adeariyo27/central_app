<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hukum_model extends CI_Model
{
    public function addRegisKuasa()
    {
        $data = [
            'nomor_regiskuasa' => htmlspecialchars($this->input->post('nomor_regiskuasa', true)),
            'tgl_regiskuasa' => $this->input->post('tgl_regiskuasa'),
            'nomor_suratkuasa' => htmlspecialchars($this->input->post('nomor_suratkuasa', true)),
            'tgl_suratkuasa' => $this->input->post('tgl_suratkuasa'),
            'nama_pemberikuasa' => htmlspecialchars($this->input->post('nama_pemberikuasa', true)),
            'nama_penerimakuasa' => htmlspecialchars($this->input->post('nama_penerimakuasa', true)),
            'nomor_perkara' => htmlspecialchars($this->input->post('nomor_perkara', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true))
        ];

        $this->db->insert('hukum_regiskuasa', $data);
        $this->session->set_flashdata('message', 'Didaftarkan');
        redirect('hukum');
    }

    public function getRegisKuasaByID($id)
    {
        $q = "SELECT `hukum_regiskuasa`.* 
                FROM `hukum_regiskuasa`
                WHERE `hukum_regiskuasa`.`id` = $id
                ";

        return $this->db->query($q)->row_array();
    }

    public function getPenandatangan()
    {
        $q = "SELECT `user`.`name`, `user`.`jabatan_id`, `user_jabatan`.`jabatan` 
                FROM `user` JOIN `user_jabatan`
                ON  `user`.`jabatan_id` = `user_jabatan`.`id`
                ";
        return $this->db->query($q)->result_array();
    }

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

    public function edit()
    {
        $data = [
            'nomor_regiskuasa' => htmlspecialchars($this->input->post('nomor_regiskuasa', true)),
            'tgl_regiskuasa' => $this->input->post('tgl_regiskuasa'),
            'nomor_suratkuasa' => htmlspecialchars($this->input->post('nomor_suratkuasa', true)),
            'tgl_suratkuasa' => $this->input->post('tgl_suratkuasa'),
            'nama_pemberikuasa' => htmlspecialchars($this->input->post('nama_pemberikuasa', true)),
            'nama_penerimakuasa' => htmlspecialchars($this->input->post('nama_penerimakuasa', true)),
            'nomor_perkara' => htmlspecialchars($this->input->post('nomor_perkara', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true))
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('hukum_regiskuasa', $data);
    }

    public function delete($id)
    {
        $this->db->delete('hukum_regiskuasa', ['id' => $id]);
        $this->session->set_flashdata('message', 'Dihapus');
    }

    public function setPeriode($from_date, $until_date)
    {
        $this->db->where('tgl_regiskuasa >=', $from_date);
        $this->db->where('tgl_regiskuasa <=', $until_date);
        return $this->db->get('hukum_regiskuasa')->result_array();
    }
}
