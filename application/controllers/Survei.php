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

    public function index_ipk()
    {
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'E-SKM - Pengadilan Tata Usaha Negara Palu';
            $data['survei'] = $this->Survei_model->readQuestionIpk();
            $data['jlh_pertanyaan_ipk'] = $this->Survei_model->jlhPertanyaanIpk();
            $this->load->view('survei/index_ipk', $data);
        } else {
            $this->Survei_model->newSurveiIpk();
        }
    }

    public function dashboard()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Dashboard Survei';
        $data['link'] = 'survei/dashboard';
        $data['active_menu'] = 'Survei';
        $data['total_responden_ikm'] = $this->Survei_model->total_responden_ikm();
        $data['total_responden_ipk'] = $this->Survei_model->total_responden_ipk();
        $data['responden_ikm_bulan'] = $this->Survei_model->responden_ikm_bulan();
        $data['responden_ipk_bulan'] = $this->Survei_model->responden_ipk_bulan();
        $tanggal = date('m');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('survei/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function ikm()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_tlp', 'Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Survei IKM';
            $data['link'] = 'survei/ikm';
            $data['active_menu'] = 'Survei';
            $data['ikm'] = $this->Survei_model->readIkm();
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

    public function ipk()
    {
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Survei IPK';
            $data['link'] = 'survei/ipk';
            $data['active_menu'] = 'Survei';
            $data['ipk'] = $this->Survei_model->readIpk();
            $data['penandatangan'] = $this->Survei_model->getPenandatangan();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('survei/ipk', $data);
            $this->load->view('templates/footer');
        } else {
            // $this->Survei_model->newSurveiIkm();
        }
    }

    public function pertanyaan()
    {
        $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required|trim');
        $this->form_validation->set_rules('name_attr', 'Name Attribut', 'required|trim');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('jenis_survei', 'Jenis Survei', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Manajemen Pertanyaan';
            $data['link'] = 'survei/pertanyaan';
            $data['active_menu'] = 'Survei';
            $data['pertanyaan'] = $this->Survei_model->getPertanyaanIkm();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('survei/pertanyaan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Survei_model->newPertanyaan();
        }
    }

    public function cetaksurvei_ikm($id)
    {
        $data['title'] = 'Survey IKM';
        $data['judul_laporan'] = 'SURVEI KEPUASAN PELAYANAN';
        $data['satker'] = $this->db->get('setup_satker')->row_array();
        $data['survei'] =  $this->Survei_model->cetakIkm($id);

        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'Legal', 'tempDir' => __DIR__ . '/tmp']);
        $mpdf->showImageErrors = true;
        $data = $this->load->view('survei/cetak_ikm', $data, TRUE);
        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }

    public function cetaksurvei_ipk($id)
    {
        $data['title'] = 'Survey IPK';
        $data['judul_laporan'] = 'KUESIONER SURVEI INDEKS KORUPSI';
        $data['satker'] = $this->db->get('setup_satker')->row_array();
        $data['survei'] =  $this->Survei_model->cetakIPK($id);

        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'Legal', 'tempDir' => __DIR__ . '/tmp']);
        $mpdf->showImageErrors = true;
        $data = $this->load->view('survei/cetak_ipk', $data, TRUE);
        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }

    public function deletesurvei_ikm($id)
    {
        $this->Survei_model->funcdel_ikm($id);
        redirect('survei/ikm');
    }

    public function deletesurvei_ipk($id)
    {
        $this->Survei_model->funcdel_ipk($id);
        redirect('survei/ipk');
    }

    public function editPertanyaan($id)
    {
        $this->load->view('templates/auth-header');
        $this->load->view('auth/blocked');
        $this->load->view('templates/auth-footer');
    }

    public function hapusPertanyaan($id)
    {
        $this->load->view('templates/auth-header');
        $this->load->view('auth/blocked');
        $this->load->view('templates/auth-footer');
    }
}
