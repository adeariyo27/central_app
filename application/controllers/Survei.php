<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survei extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Survei_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_tlp', 'Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'E-SKM - Pengadilan Tata Usaha Negara Palu';
            $data['survei'] = $this->Survei_model->readQuestion();
            $this->load->view('survei/index', $data);
        } else {
            $this->Survei_model->newSurveiIkm();
        }
    }

    public function ikm()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_tlp', 'Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Survei IKM';
            $data['active_menu'] = 'Survei';
            $data['ikm'] = $this->Survei_model->readIKM();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('survei/ikm', $data);
            $this->load->view('templates/footer');
        } else {
            // $this->Survei_model->newSurveiIkm();
        }
    }
}
