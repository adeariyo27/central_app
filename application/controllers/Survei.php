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
            $data['jlh_pertanyaan_ikm'] = $this->Survei_model->jlhPertanyaanIkm();
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
            $data['penandatangan'] = $this->Survei_model->getPenandatangan();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('survei/ikm', $data);
            $this->load->view('templates/footer');
        } else {
            // $this->Survei_model->newSurveiIkm();
        }
    }

    public function pertanyaan_ikm()
    {
        $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required|trim');
        $this->form_validation->set_rules('name_attr', 'Name Attribut', 'required|trim');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('jenis_survei', 'Jenis Survei', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Pertanyaan IKM';
            $data['active_menu'] = 'Survei';
            $data['pertanyaan'] = $this->Survei_model->getPertanyaanIkm();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('survei/pertanyaan_ikm', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Survei_model->newPertanyaanIkm();
        }
    }

    public function cetaksurvei_ikm($id)
    {
        $data['title'] = 'Survey IKM';
        $data['judul_laporan'] = 'SURVEY KEPUASAN PELAYANAN';
        $data['satker'] = $this->db->get('setup_satker')->row_array();
        $data['survei'] =  $this->Survei_model->cetakIkm($id);
        $data['penandatangan'] = $this->Survei_model->getPenandatanganByName();

        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'Legal']);
        $mpdf->showImageErrors = true;
        $data = $this->load->view('survei/cetak_ikm', $data, TRUE);
        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }
}
