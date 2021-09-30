<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bukutamu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bukutamu_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('no_id', 'Nomor Identitas', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal Kunjungan', 'required|trim');
        $this->form_validation->set_rules('keperluan', 'Keperluan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Buku Tamu Digital - Pengadilan Tata Usaha Negara Palu';
            $this->load->view('bukutamu/index', $data);
        } elseif ($this->input->post('new')) {
            $this->Bukutamu_model->newVisitor();
        } else {
            $this->Bukutamu_model->visitorToday();
        }
    }

    public function profil_pengunjung()
    {
        $data['title'] = 'Data Profil Pengunjung';
        $data['active_menu'] = 'Buku Tamu Digital';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('bukutamu/profil_pengunjung', $data);
        $this->load->view('templates/footer');
    }

    public function daftar_kunjungan()
    {
        $data['title'] = 'Daftar Kunjungan';
        $data['active_menu'] = 'Buku Tamu Digital';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('bukutamu/daftar_kunjungan', $data);
        $this->load->view('templates/footer');
    }
}
