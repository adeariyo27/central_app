<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bukutamu_model extends CI_Model
{
    public function readAll()
    {
        $this->db->order_by('tanggal', 'DESC');
        $query = $this->db->get('bukutamu_profil_pengunjung');
        return $query->result_array();
    }

    public function readAllKunjungan()
    {
        $this->db->order_by('tanggal', 'DESC');
        $query = $this->db->get('bukutamu_daftar_kunjungan');
        return $query->result_array();
    }

    public function newVisitor()
    {
        $data1 = [
            'no_id' => htmlspecialchars($this->input->post('no_id', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
            'no_tlp' => htmlspecialchars($this->input->post('no_tlp', true)),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true))
        ];

        $data2 = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'no_tlp' => htmlspecialchars($this->input->post('no_tlp', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
            'keperluan' => htmlspecialchars($this->input->post('keperluan', true))
        ];

        $this->db->insert('bukutamu_profil_pengunjung', $data1);
        $this->db->insert('bukutamu_daftar_kunjungan', $data2);
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

    public function search_noid($noid)
    {
        $this->db->like('no_id', $noid);
        $this->db->order_by('no_id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('bukutamu_profil_pengunjung')->result();
    }

    public function search_nama($nama)
    {
        $this->db->like('nama', $nama);
        $this->db->order_by('nama', 'ASC');
        $this->db->limit(10);
        return $this->db->get('bukutamu_profil_pengunjung')->result();
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

    public function setPeriode($from_date, $until_date)
    {
        $this->db->where('tanggal >=', $from_date);
        $this->db->where('tanggal <=', $until_date);
        $this->db->order_by('tanggal', 'DESC');
        $query = $this->db->get('bukutamu_profil_pengunjung');
        return $query->result_array();
    }

    public function setPeriodeDaftarKunjungan($from_date, $until_date)
    {
        $this->db->where('tanggal >=', $from_date);
        $this->db->where('tanggal <=', $until_date);
        $this->db->order_by('tanggal', 'DESC');
        $query = $this->db->get('bukutamu_daftar_kunjungan');
        return $query->result_array();
    }

    public function getProfilPengunjungByID($id)
    {
        $q = "SELECT `bukutamu_profil_pengunjung`.* 
                FROM `bukutamu_profil_pengunjung`
                WHERE `bukutamu_profil_pengunjung`.`no_id` = $id
                ";

        return $this->db->query($q)->row_array();
    }

    public function getDaftarKunjunganByID($id)
    {
        $q = "SELECT `bukutamu_daftar_kunjungan`.* 
                FROM `bukutamu_daftar_kunjungan`
                WHERE `bukutamu_daftar_kunjungan`.`id` = $id
                ";

        return $this->db->query($q)->row_array();
    }

    public function edit()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
            'no_tlp' => htmlspecialchars($this->input->post('no_tlp', true)),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
        ];

        $this->db->where('no_id', $this->input->post('no_id'));
        $this->db->update('bukutamu_profil_pengunjung', $data);
    }

    public function editKunjungan()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'no_tlp' => htmlspecialchars($this->input->post('no_tlp', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
            'keperluan' => htmlspecialchars($this->input->post('keperluan', true))
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('bukutamu_daftar_kunjungan', $data);
    }

    public function delete($id)
    {
        $this->db->delete('bukutamu_profil_pengunjung', ['no_id' => $id]);
        $this->session->set_flashdata('message', 'Dihapus');
    }

    public function deleteKunjungan($id)
    {
        $this->db->delete('bukutamu_daftar_kunjungan', ['id' => $id]);
        $this->session->set_flashdata('message', 'Dihapus');
    }

    public function VisitorTodayDashboard()
    {
        $today = date('Y-m-d');
        $this->db->order_by('tanggal', 'ASC');
        $q = $this->db->like('tanggal', $today);
        return $this->db->get('bukutamu_daftar_kunjungan')->result_array();
    }

    public function jk()
    {
        $this->db->select('jenis_kelamin, COUNT(jenis_kelamin) as total');
        $this->db->group_by('jenis_kelamin');
        return $this->db->get('bukutamu_profil_pengunjung')->result_array();
    }

    public function job()
    {
        $this->db->select('pekerjaan, COUNT(pekerjaan) as total');
        $this->db->group_by('pekerjaan');
        $this->db->order_by('total', 'DESC');
        $this->db->limit(6);
        return $this->db->get('bukutamu_profil_pengunjung')->result_array();
    }

    public function totalPengunjung()
    {
        return $this->db->count_all_results('bukutamu_profil_pengunjung');
    }

    public function totalPengunjungBln()
    {
        $this->db->select('tanggal, COUNT(tanggal) as total');
        $this->db->where('MONTH(tanggal)', date('m'));
        return $this->db->get('bukutamu_daftar_kunjungan')->result_array();
    }

    public function totalPengunjungThn()
    {
        $this->db->select('tanggal, COUNT(tanggal) as total');
        $this->db->where('YEAR(tanggal)', date('Y'));
        return $this->db->get('bukutamu_daftar_kunjungan')->result_array();
    }

    public function mostVisit()
    {
        $this->db->select('nama, COUNT(nama) as total');
        $this->db->group_by('nama');
        $this->db->order_by('total', 'DESC');
        $this->db->limit(1);
        return $this->db->get('bukutamu_daftar_kunjungan')->result_array();
        // var_dump($q);
        // die;
    }
}
