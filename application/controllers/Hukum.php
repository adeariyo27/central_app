<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hukum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Hukum_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('nomor_regiskuasa', 'Nomor Register Kuasa', 'required|trim');
        $this->form_validation->set_rules('tgl_regiskuasa', 'Tanggal Register Kuasa', 'required|trim');
        $this->form_validation->set_rules('nama_pemberikuasa', 'Nama Pemberi Kuasa', 'required|trim');
        $this->form_validation->set_rules('nama_penerimakuasa', 'Nama Penerima Kuasa', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register Surat Kuasa';
            $data['active_menu'] = 'Hukum';
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['regiskuasa'] = $this->db->get('hukum_regiskuasa')->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('hukum/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Hukum_model->addRegisKuasa();
        }
    }

    public function editregiskuasa($id)
    {
        $this->form_validation->set_rules('nomor_regiskuasa', 'Nomor Register Kuasa', 'required|trim');
        $this->form_validation->set_rules('tgl_regiskuasa', 'Tanggal Register Kuasa', 'required|trim');
        $this->form_validation->set_rules('nama_pemberikuasa', 'Nama Pemberi Kuasa', 'required|trim');
        $this->form_validation->set_rules('nama_penerimakuasa', 'Nama Penerima Kuasa', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register Surat Kuasa';
            $data['active_menu'] = 'Hukum';
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['regiskuasa'] = $this->Hukum_model->getRegisKuasaByID($id);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('hukum/edit-regis-kuasa', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Hukum_model->edit();
            $this->session->set_flashdata('message', 'Diperbaharui');
            redirect('hukum');
        }
    }

    public function deleteregiskuasa($id)
    {
        $this->Hukum_model->delete($id);
        redirect('hukum');
    }
}
