<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hukum_model extends CI_Model
{
    function getAllRegisKuasa()
    {
        $query = $this->db->query("SELECT * FROM hukum_regiskuasa order by id desc");
        return $query->result_array();
    }

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
        return $this->db->select('*')->from('hukum_regiskuasa')->order_by('nomor_regiskuasa', 'asc')->get()->result_array();
    }

    public function search_npk($npk)
    {
        $this->db->like('nama_pemberikuasa', $npk);
        $this->db->order_by('id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('hukum_regiskuasa')->result();
    }

    public function search_npk2($npk)
    {
        $this->db->like('nama_penerimakuasa', $npk);
        $this->db->order_by('id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('hukum_regiskuasa')->result();
    }

    function getTotalSuratKuasaToday()
    {
        $query = $this->db->query("SELECT * FROM hukum_regiskuasa WHERE tgl_regiskuasa = CURDATE()");
        return $query->num_rows();
    }

    function getTotalSuratKuasaMonth()
    {
        $query = $this->db->query("SELECT * FROM hukum_regiskuasa WHERE MONTH(tgl_regiskuasa) = MONTH(CURDATE()) AND YEAR(tgl_regiskuasa) = YEAR(CURDATE())");
        return $query->num_rows();
    }

    function getTotalSuratKuasaYear()
    {
        $query = $this->db->query("SELECT * FROM hukum_regiskuasa WHERE YEAR(tgl_regiskuasa) = YEAR(CURDATE())");
        return $query->num_rows();
    }

    function getTotalSuratKuasa()
    {
        $query = $this->db->query("SELECT * FROM hukum_regiskuasa");
        return $query->num_rows();
    }

    function getTodaySuratKuasa()
    {
        $query = $this->db->query("SELECT * FROM hukum_regiskuasa WHERE tgl_regiskuasa = CURDATE()");
        return $query->result_array();
    }
}
