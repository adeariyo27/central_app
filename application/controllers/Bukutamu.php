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

    public function dashboard()
    {
        $data['title'] = 'Dashboard Buku Tamu';
        $data['link'] = 'bukutamu/dashboard';
        $data['active_menu'] = 'Buku Tamu Digital';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['today_visitor'] = $this->Bukutamu_model->VisitorTodayDashboard();
        $data['jenis_kelamin'] = $this->Bukutamu_model->jk();
        $data['pekerjaan'] = $this->Bukutamu_model->job();
        $data['total_pengunjung'] = $this->Bukutamu_model->totalPengunjung();
        $data['total_pengunjung_bln'] = $this->Bukutamu_model->totalPengunjungBln();
        $data['total_pengunjung_thn'] = $this->Bukutamu_model->totalPengunjungThn();
        $data['most_visit'] = $this->Bukutamu_model->mostVisit();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('bukutamu/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function profil_pengunjung()
    {
        $data['title'] = 'Data Profil Pengunjung';
        $data['link'] = 'bukutamu/profil_pengunjung';
        $data['active_menu'] = 'Buku Tamu Digital';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['profilpengunjung'] = $this->Bukutamu_model->readAll();
        $data['penandatangan'] = $this->Bukutamu_model->getPenandatangan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('bukutamu/profil_pengunjung', $data);
        $this->load->view('templates/footer');
    }

    public function daftar_kunjungan()
    {
        $data['title'] = 'Daftar Kunjungan';
        $data['link'] = 'bukutamu/daftar_kunjungan';
        $data['active_menu'] = 'Buku Tamu Digital';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['daftarkunjungan'] = $this->Bukutamu_model->readAllKunjungan();
        $data['penandatangan'] = $this->Bukutamu_model->getPenandatangan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('bukutamu/daftar_kunjungan', $data);
        $this->load->view('templates/footer');
    }

    public function get_autofill()
    {
        if (isset($_GET['term'])) {
            $result = $this->Bukutamu_model->search_noid($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    // $arr_result[] = $row->no_id;

                    $arr_result[] = array(
                        'label' => $row->no_id,
                        'nama' => $row->nama,
                        'tgl_lahir' => $row->tgl_lahir,
                        'no_tlp' => $row->no_tlp,
                        'jenis_kelamin' => $row->jenis_kelamin,
                        'alamat' => $row->alamat,
                        'pekerjaan' => $row->pekerjaan
                    );
                echo json_encode($arr_result);
            }
        }
    }

    public function get_autofillnama()
    {
        if (isset($_GET['term'])) {
            $result = $this->Bukutamu_model->search_nama($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    // $arr_result[] = $row->no_id;

                    $arr_result[] = array(
                        'label' => $row->nama,
                        'no_id' => $row->no_id,
                        'tgl_lahir' => $row->tgl_lahir,
                        'no_tlp' => $row->no_tlp,
                        'jenis_kelamin' => $row->jenis_kelamin,
                        'alamat' => $row->alamat,
                        'pekerjaan' => $row->pekerjaan
                    );
                echo json_encode($arr_result);
            }
        }
    }

    public function cetak()
    {
        $data['title'] = 'Cetak Laporan';
        $data['satker'] = $this->db->get('setup_satker')->row_array();
        $data['judul_laporan'] = 'LAPORAN PROFIL PENGUNJUNG';
        $data['profilpengunjung'] = $this->Bukutamu_model->readAll();
        $data['penandatangan'] = $this->Bukutamu_model->getPenandatanganByName();
        $this->load->library('dompdf_gen');
        $this->load->view('bukutamu/cetak-laporan', $data);

        //Setting pdf
        $paper_size = 'legal';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        ob_end_clean();
        $this->dompdf->stream("laporan_profil_pengunjung.pdf", array('Attachment' => 0));
    }

    public function cetak_kunjungan()
    {
        $data['title'] = 'Cetak Laporan';
        $data['satker'] = $this->db->get('setup_satker')->row_array();
        $data['judul_laporan'] = 'LAPORAN DAFTAR KUNJUNGAN';
        $data['daftarkunjungan'] = $this->Bukutamu_model->readAllKunjungan();
        $data['penandatangan'] = $this->Bukutamu_model->getPenandatanganByName();
        $this->load->library('dompdf_gen');
        $this->load->view('bukutamu/cetak-laporan-kunjungan', $data);

        //Setting pdf
        $paper_size = 'legal';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        ob_end_clean();
        $this->dompdf->stream("laporan_daftar_kunjungan.pdf", array('Attachment' => 0));
    }

    public function cetakPeriode()
    {
        $tgl_judul_awal = tgl_eng_to_ind(date('d-m-Y', strtotime($this->input->post('from_date'))));
        $tgl_judul_akhir = tgl_eng_to_ind(date('d-m-Y', strtotime($this->input->post('until_date'))));

        $from_date = $this->input->post('from_date');
        $until_date = $this->input->post('until_date');

        $data['title'] = 'Cetak Laporan';
        $data['judul_laporan'] = 'LAPORAN PROFIL PENGUNJUNG DARI TANGGAL ' . $tgl_judul_awal . ' S/D ' . $tgl_judul_akhir . '';
        $data['satker'] = $this->db->get('setup_satker')->row_array();
        $data['penandatangan'] = $this->Bukutamu_model->getPenandatanganByName();
        $this->load->library('dompdf_gen');
        $data['profilpengunjung'] = $this->Bukutamu_model->setPeriode($from_date, $until_date);
        $this->load->view('bukutamu/cetak-laporan', $data);

        //Setting pdf
        $paper_size = 'legal';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        ob_end_clean();
        $this->dompdf->stream("laporan_profil_pengunjung.pdf", array('Attachment' => 0));
    }

    public function cetakperiode_kunjungan()
    {
        $tgl_judul_awal = tgl_eng_to_ind(date('d-m-Y', strtotime($this->input->post('from_date'))));
        $tgl_judul_akhir = tgl_eng_to_ind(date('d-m-Y', strtotime($this->input->post('until_date'))));

        $from_date = $this->input->post('from_date');
        $until_date = $this->input->post('until_date');

        $data['title'] = 'Cetak Laporan';
        $data['judul_laporan'] = 'LAPORAN DAFTAR KUNJUNGAN DARI TANGGAL ' . $tgl_judul_awal . ' S/D ' . $tgl_judul_akhir . '';
        $data['satker'] = $this->db->get('setup_satker')->row_array();
        $data['penandatangan'] = $this->Bukutamu_model->getPenandatanganByName();
        $this->load->library('dompdf_gen');
        $data['daftarkunjungan'] = $this->Bukutamu_model->setPeriodeDaftarKunjungan($from_date, $until_date);
        $this->load->view('bukutamu/cetak-laporan-kunjungan', $data);

        //Setting pdf
        $paper_size = 'legal';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        ob_end_clean();
        $this->dompdf->stream("laporan_daftar_kunjungan.pdf", array('Attachment' => 0));
    }

    public function editprofilpengunjung($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('no_tlp', 'Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Data Profil Pengunjung';
            $data['link'] = 'bukutamu/profil_pegunjung';
            $data['active_menu'] = 'Buku Tamu Digital';
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['profilpengunjung'] = $this->Bukutamu_model->getProfilPengunjungByID($id);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('bukutamu/edit-profil-pengunjung', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Bukutamu_model->edit();
            $this->session->set_flashdata('message', 'Diperbaharui');
            redirect('bukutamu/profil_pengunjung');
        }
    }

    public function editdaftarkunjungan($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_tlp', 'Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar Kunjungan';
            $data['link'] = 'bukutamu/daftar_kunjungan';
            $data['active_menu'] = 'Buku Tamu Digital';
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['daftarkunjungan'] = $this->Bukutamu_model->getDaftarKunjunganByID($id);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('bukutamu/edit-daftar-kunjungan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Bukutamu_model->editKunjungan();
            $this->session->set_flashdata('message', 'Diperbaharui');
            redirect('bukutamu/daftar_kunjungan');
        }
    }

    public function deleteprofilpengunjung($id)
    {
        $this->Bukutamu_model->delete($id);
        redirect('bukutamu/profil_pengunjung');
    }

    public function deletedaftarkunjungan($id)
    {
        $this->Bukutamu_model->deleteKunjungan($id);
        redirect('bukutamu/daftar_kunjungan');
    }
}
