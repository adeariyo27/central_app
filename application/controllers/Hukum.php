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
            $data['link'] = 'hukum';
            $data['active_menu'] = 'Hukum';
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['regiskuasa'] = $this->Hukum_model->getAllRegisKuasa();
            $data['penandatangan'] = $this->Hukum_model->getPenandatangan();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('hukum/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Hukum_model->addRegisKuasa();
        }
    }

    public function dashboard()
    {
        $data['title'] = 'Dashboard Hukum';
        $data['link'] = 'hukum/dashboard';
        $data['active_menu'] = 'Hukum';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['total_suratkuasa_today'] = $this->Hukum_model->getTotalSuratKuasaToday();
        $data['total_suratkuasa_month'] = $this->Hukum_model->getTotalSuratKuasaMonth();
        $data['total_suratkuasa_year'] = $this->Hukum_model->getTotalSuratKuasaYear();
        $data['total_suratkuasa'] = $this->Hukum_model->getTotalSuratKuasa();
        $data['today_suratkuasa'] = $this->Hukum_model->getTodaySuratKuasa();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('hukum/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function editregiskuasa($id)
    {
        $this->form_validation->set_rules('nomor_regiskuasa', 'Nomor Register Kuasa', 'required|trim');
        $this->form_validation->set_rules('tgl_regiskuasa', 'Tanggal Register Kuasa', 'required|trim');
        $this->form_validation->set_rules('nama_pemberikuasa', 'Nama Pemberi Kuasa', 'required|trim');
        $this->form_validation->set_rules('nama_penerimakuasa', 'Nama Penerima Kuasa', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register Surat Kuasa';
            $data['link'] = 'hukum';
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

    public function cetak()
    {
        $data['title'] = 'Cetak Laporan Surat Kuasa';
        $data['satker'] = $this->db->get('setup_satker')->row_array();
        $data['judul_laporan'] = 'LAPORAN REGISTER SURAT KUASA';
        $data['regiskuasa'] = $this->db->select('*')->from('hukum_regiskuasa')->order_by('nomor_regiskuasa', 'asc')->get()->result_array();
        $data['penandatangan'] = $this->Hukum_model->getPenandatanganByName();
        $this->load->library('dompdf_gen');
        $this->load->view('hukum/cetak-laporan', $data);

        //Setting pdf
        $paper_size = 'legal';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        ob_end_clean();
        $this->dompdf->stream("laporan_registerkuasa.pdf", array('Attachment' => 0));
    }

    public function cetakPeriode()
    {
        $tgl_judul_awal = tgl_eng_to_ind(date('d-m-Y', strtotime($this->input->post('from_date'))));
        $tgl_judul_akhir = tgl_eng_to_ind(date('d-m-Y', strtotime($this->input->post('until_date'))));

        $from_date = $this->input->post('from_date');
        $until_date = $this->input->post('until_date');

        $data['title'] = 'Cetak Laporan';
        $data['judul_laporan'] = 'LAPORAN REGISTER SURAT KUASA DARI TANGGAL ' . $tgl_judul_awal . ' S/D ' . $tgl_judul_akhir . '';
        $data['satker'] = $this->db->get('setup_satker')->row_array();
        $data['penandatangan'] = $this->Hukum_model->getPenandatanganByName();
        $this->load->library('dompdf_gen');
        $data['regiskuasa'] = $this->Hukum_model->setPeriode($from_date, $until_date);
        $this->load->view('hukum/cetak-laporan', $data);

        //Setting pdf
        $paper_size = 'legal';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        ob_end_clean();
        $this->dompdf->stream("laporan_registerkuasa.pdf", array('Attachment' => 0));
    }

    public function get_autofill()
    {
        if (isset($_GET['term'])) {
            $result = $this->Hukum_model->search_npk($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] = $row->nama_pemberikuasa;
                echo json_encode($arr_result);
            }
        }
    }

    public function get_autofillpenerimakuasa()
    {
        if (isset($_GET['term'])) {
            $result = $this->Hukum_model->search_npk2($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] = $row->nama_penerimakuasa;
                echo json_encode($arr_result);
            }
        }
    }
}
