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

    public function getProfilPengunjungByID($id)
    {
        $q = "SELECT `bukutamu_profil_pengunjung`.* 
                FROM `bukutamu_profil_pengunjung`
                WHERE `bukutamu_profil_pengunjung`.`no_id` = $id
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

    public function delete($id)
    {
        $this->db->delete('bukutamu_profil_pengunjung', ['no_id' => $id]);
        $this->session->set_flashdata('message', 'Dihapus');
    }
}
