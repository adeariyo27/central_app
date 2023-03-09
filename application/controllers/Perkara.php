<?php  

defined('BASEPATH') or exit('No direct script access allowed');

class Perkara extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Perkara_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
       
            $data['title'] = 'Daftar Rekapitulasi Putusan Perkara';
            $data['link'] = 'perkara';
            $data['active_menu'] = 'Perkara';
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['perkara'] = $this->Perkara_model->getAllPerkara();
            $data['perkara_count'] = $this->Perkara_model->getCountPerkara();
            $data['penandatangan'] = $this->Perkara_model->getPenandatangan();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('perkara/index', $data);
            $this->load->view('templates/footer');
    }


    public function dashboard()
    {
        $data['title'] = 'Dashboard Perkara';
        $data['link'] = 'perkara/dashboard';
        $data['active_menu'] = 'Perkara';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['daftarbht']              = $this->Perkara_model->getAllPerkaraBHT();

        $data['bht_today']              = $this->Perkara_model->getBhtToday();
        $data['bht_this_month']         = $this->Perkara_model->getBhtThisMonth();

        $data['total_bht_today']        = $this->Perkara_model->getTotalBhtToday();
        $data['total_bht_this_month']   = $this->Perkara_model->getTotalBhtThisMonth();
        $data['total_bht_month']        = $this->Perkara_model->getTotalBhtMonth();
        $data['total_bht_year']        = $this->Perkara_model->getTotalBhtYear();
        $data['total_bht_year_22']        = $this->Perkara_model->getTotalBhtYear22();
        $data['total_bht_year_21']        = $this->Perkara_model->getTotalBhtYear21();
        $data['total_bht_year_20']        = $this->Perkara_model->getTotalBhtYear20();
        $data['total_bht_year_19']        = $this->Perkara_model->getTotalBhtYear19();
        $data['total_bht_year_18']        = $this->Perkara_model->getTotalBhtYear18();
        $data['total_bht_year_17']        = $this->Perkara_model->getTotalBhtYear17();
        $data['total_bht_year_16']        = $this->Perkara_model->getTotalBhtYear16();
        $data['total_bht_year_15']        = $this->Perkara_model->getTotalBhtYear15();
        $data['total_bht_month_1']        = $this->Perkara_model->getTotalBhtMonth1();
        $data['total_bht_month_2']        = $this->Perkara_model->getTotalBhtMonth2();
        $data['total_bht_month_3']        = $this->Perkara_model->getTotalBhtMonth3();
        $data['total_bht_month_4']        = $this->Perkara_model->getTotalBhtMonth4();
        $data['total_bht_month_5']        = $this->Perkara_model->getTotalBhtMonth5();
        $data['total_bht_month_6']        = $this->Perkara_model->getTotalBhtMonth6();
        $data['total_bht_month_7']        = $this->Perkara_model->getTotalBhtMonth7();
        $data['total_bht_month_8']        = $this->Perkara_model->getTotalBhtMonth8();
        $data['total_bht_month_9']        = $this->Perkara_model->getTotalBhtMonth9();
        $data['total_bht_month_10']       = $this->Perkara_model->getTotalBhtMonth10();
        $data['total_bht_month_11']       = $this->Perkara_model->getTotalBhtMonth11();
        $data['total_bht_month_12']       = $this->Perkara_model->getTotalBhtMonth12();
        $data['total_bht']        = $this->Perkara_model->getTotalBht();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('perkara/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function detailPerkara($perkara_id)
    {
        $data['title'] = 'Detail Perkara' ;
        $data['link'] = 'perkara';
        $data['active_menu'] = 'Perkara';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['perkara'] = $this->Perkara_model->getPerkaraByID($perkara_id);
        $data['perkara_banding'] = $this->Perkara_model->getPerkaraBandingByID($perkara_id);
        $data['perkara_kasasi'] = $this->Perkara_model->getPerkaraKasasiByID($perkara_id);
        $data['perkara_pk'] = $this->Perkara_model->getPerkaraPKByID($perkara_id);
        $data['perkara_biaya'] = $this->Perkara_model->getPerkaraBiayaByID($perkara_id);
        $data['court_calendar'] = $this->Perkara_model->getCourtCalendar($perkara_id);
        $data['perkara_sidang'] = $this->Perkara_model->getPerkaraSidang($perkara_id);
        $data['perkara_persiapan'] = $this->Perkara_model->getPerkaraPersiapan($perkara_id);
        $data['perkara_persiapan_jadwal'] = $this->Perkara_model->getPerkaraPersiapanJadwal($perkara_id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/detail-perkara-header', $data);
        $this->load->view('perkara/detail-perkara', $data);
        $this->load->view('perkara/detail-perkara-banding', $data);
        $this->load->view('perkara/detail-perkara-kasasi', $data);
        $this->load->view('perkara/detail-perkara-pk', $data);
        $this->load->view('templates/detail-perkara-footer', $data);
        $this->load->view('templates/footer');
    }

    public function perkaraBHT()
    {
        $data['title'] = 'Daftar Keterangan BHT Perkara';
        $data['link'] = 'perkara/perkaraBHT';
        $data['active_menu'] = 'Perkara';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['perkarabht'] = $this->Perkara_model->getAllPerkaraBHT();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('perkara/bht/perkara-bht', $data);
        $this->load->view('templates/footer');
    }

    public function daftarBHT()
    {
        $data['title'] = 'Daftar File e-BHT';
        $data['link'] = 'perkara';
        $data['active_menu'] = 'Perkara';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['daftarbht'] = $this->Perkara_model->getAllFileBHT();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('perkara/bht/daftar-bht', $data);
        $this->load->view('templates/footer');
    }

    public function uploadBHT()
    {
        $data['title'] = 'Upload File e-BHT';
        $data['link'] = 'perkara';
        $data['active_menu'] = 'Perkara';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['daftarbht'] = $this->Perkara_model->getAllFileBHT();

        $this->form_validation->set_rules('nomor_perkara', '<b>Nomor Perkara</b>', 'required|trim');
        $this->form_validation->set_rules('tanggal_bht', '<b>Tanggal BHT</b>', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('perkara/bht/upload-bht', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Perkara_model->uploadFileBHT();
        }
    }

    public function deleteBHT($perkara_id)
    {
        $this->Perkara_model->deleteFileBHT($perkara_id);
        redirect('perkara/daftarBHT');
    }

    public function updateBHT($perkara_id)
    {
        $data['title'] = 'Update File e-BHT';
        $data['link'] = 'perkara';
        $data['active_menu'] = 'Perkara';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['daftarbht'] = $this->Perkara_model->getFileBHTByID($perkara_id);

        $this->form_validation->set_rules('nomor_perkara', '<b>Nomor Perkara</b>', 'required|trim');
        $this->form_validation->set_rules('tanggal_bht', '<b>Tanggal BHT</b>', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('perkara/bht/update-bht', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Perkara_model->updateFileBHT($perkara_id);
        }

    }

    public function perkaraEksekusi()
    {
        $data['title'] = 'Daftar Perkara Eksekusi Sukarela';
        $data['link'] = 'perkara/perkaraEksekusi';
        $data['active_menu'] = 'Perkara';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['perkaraeks'] = $this->Perkara_model->getAllEksekusi();
        $data['perkara_eks'] = $this->Perkara_model->getAllPerkaraEksekusi();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('perkara/eksekusi/perkara-eksekusi', $data);
        $this->load->view('templates/footer');
    }

    public function uploadEksekusi($perkara_id)
    {
        $data['title'] = 'Status Perkara Eksekusi Sukarela';
        $data['link'] = 'perkara/uploadEksekusi';
        $data['active_menu'] = 'Perkara';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['perkara'] = $this->Perkara_model->getPerkaraByID($perkara_id);
        $data['status_eks'] = $this->Perkara_model->getAllStatusEksekusi();

        $this->form_validation->set_rules('nomor_perkara', '<b>Nomor Perkara</b>', 'required|trim');
        $this->form_validation->set_rules('tanggal_surat', '<b>Tanggal Surat Eksekusi</b>', 'required|trim');
        $this->form_validation->set_rules('status_eksekusi', '<b>Status Eksekusi</b>', 'required|trim');
        $this->form_validation->set_rules('status_eksekusi', '<b>Status Eksekusi</b>', 'required|trim');
        if (empty($_FILES['file']['name'])) {
            $this->form_validation->set_rules('file', '<b>File Surat Permohonan Informasi Eksekusi</b>', 'required');
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('perkara/eksekusi/add-status-eksekusi', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Perkara_model->uploadFileEksekusi();
        }
    }

    public function updateEksekusi($perkara_id)
    {
        $data['title'] = 'Edit Status Perkara Eksekusi Sukarela';
        $data['link'] = 'perkara/updateEksekusi';
        $data['active_menu'] = 'Perkara';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['perkara'] = $this->Perkara_model->getPerkaraByID($perkara_id);
        $data['perkara_eks'] = $this->Perkara_model->getPerkaraEksekusiByID($perkara_id);
        $data['status_eks'] = $this->Perkara_model->getAllStatusEksekusi();

        $this->form_validation->set_rules('nomor_perkara', '<b>Nomor Perkara</b>', 'required|trim');
        $this->form_validation->set_rules('tanggal_surat', '<b>Tanggal Surat Eksekusi</b>', 'required|trim');
        $this->form_validation->set_rules('status_eksekusi', '<b>Status Eksekusi</b>', 'required|trim');
        $this->form_validation->set_rules('status_eksekusi', '<b>Status Eksekusi</b>', 'required|trim');
        if (empty($_FILES['file']['name'])) {
            $this->form_validation->set_rules('file', '<b>File Surat Permohonan Informasi Eksekusi</b>', 'required');
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('perkara/eksekusi/edit-status-eksekusi', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Perkara_model->updateFileEksekusi($perkara_id);
        }
    }

    public function cetak()
    {
        $data['title'] = 'Cetak Laporan Putusan Perkara';
        $data['satker'] = $this->db->get('setup_satker')->row_array();
        $data['judul_laporan'] = 'LAPORAN REKAPITULASI PUTUSAN PERKARA';
        $data['perkarabht'] = $this->Perkara_model->getAllPerkaraBHT();
        $data['penandatangan'] = $this->Perkara_model->getPenandatanganByName();
        $this->load->library('dompdf_gen');
        $this->load->view('perkara/cetak-laporan-perkara', $data);

        //Setting pdf
        $paper_size = 'legal';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        ob_end_clean();
        $this->dompdf->stream("laporan_perkara_putusan.pdf", array('Attachment' => 0));
    }

    public function cetakPeriode()
    {
        $tgl_judul_awal = tgl_eng_to_ind(date('d-m-Y', strtotime($this->input->post('from_date'))));
        $tgl_judul_akhir = tgl_eng_to_ind(date('d-m-Y', strtotime($this->input->post('until_date'))));

        $from_date = $this->input->post('from_date');
        $until_date = $this->input->post('until_date');

        $data['title'] = 'Cetak Laporan Putusan Perkara';
        $data['judul_laporan'] = 'LAPORAN REKAPITULASI PUTUSAN PERKARA ' . $tgl_judul_awal . ' S/D ' . $tgl_judul_akhir . '';
        $data['satker'] = $this->db->get('setup_satker')->row_array();
        $data['penandatangan'] = $this->Perkara_model->getPenandatanganByName();
        $this->load->library('dompdf_gen');
        $data['perkarabht'] = $this->Perkara_model->setPeriode($from_date, $until_date);
        $this->load->view('perkara/cetak-laporan-perkara', $data);

        //Setting pdf
        $paper_size = 'legal';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        ob_end_clean();
        $this->dompdf->stream("laporan_perkara_putusan.pdf", array('Attachment' => 0));
    }

}

?>