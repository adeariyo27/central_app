<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perkara_model extends CI_Model
{

    function getAllPerkara()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_putusan,
                pp.status_putusan_id,
                pb.permohonan_banding,
                pb.putusan_banding,
                pk.permohonan_kasasi,
                pk.putusan_kasasi,
                ppk.permohonan_pk,
                ppk.putusan_pk,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                LEFT JOIN perkara_banding pb ON pp.perkara_id = pb.perkara_id 
                LEFT JOIN perkara_kasasi pk ON pp.perkara_id = pk.perkara_id 
                LEFT JOIN perkara_pk ppk ON pp.perkara_id = ppk.perkara_id 
                order by tanggal_pendaftaran desc
                ");
        return $query->result_array();
    }

    function getCountPerkara()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
                (SELECT COUNT(*) FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE pp.status_putusan_id='34') AS jumlahDikabulkan,
                (SELECT COUNT(*) FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE pp.status_putusan_id='35') AS jumlahDitolak,
                (SELECT COUNT(*) FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE pp.status_putusan_id='36') AS jumlahNO,
                (SELECT COUNT(*) FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE pp.status_putusan_id='37') AS jumlahDicabut,
                (SELECT COUNT(*) FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE pp.status_putusan_id='81') AS jumlahTidakBerwenang,
                (SELECT COUNT(*) FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE pp.status_putusan_id='(NULL)') AS jumlahDismissal
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                ");
        return $query->row_array();
    }

    

    function getPerkaraByID($perkara_id)
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        return $dbsipp->query("SELECT
                pp.perkara_id,
                p.nomor_perkara,
                p.pihak1_text,
                p.pihak2_text,
                p.pihak3_text,
                p.tanggal_pendaftaran,
                p.tahapan_terakhir_id,
                p.tahapan_terakhir_text,
                p.proses_terakhir_id,
                p.proses_terakhir_text,
                pdis.tanggal_penetapan as tanggal_penetapan_dis,
                ppen.penetapan_majelis_hakim as pen_mh,
                ppen.penetapan_panitera_pengganti as pen_ppjs,
                ppenpp.tanggal_penetapan_persiapan as pen_pp,
                ppen.penetapan_hari_sidang as pen_hs,
                ppen.majelis_hakim_text as nama_majelis,
                ppen.panitera_pengganti_text as nama_pp,
                ppen.jurusita_text as nama_jsp,
                ppen.sidang_pertama,
                psid.tanggal_sidang,
                COUNT(psid.tanggal_sidang) As jumlah_sidang,
                pp.tanggal_putusan,
                pp.status_putusan_id,
                pp.amar_putusan,
                pp.tanggal_minutasi,
                pp.tanggal_bht,
                pb.permohonan_banding,
                pb.hakim1_banding,
                pb.hakim2_banding,
                pb.hakim3_banding,
                pb.panitera_pengganti_banding,
                pb.pengiriman_berkas_banding,
                pb.nomor_surat_pengiriman_berkas_banding as nomor_surat_banding,
                pb.nomor_perkara_banding,
                pb.putusan_banding,
                pb.status_putusan_banding_id,
                pb.amar_putusan_banding,
                pb.pemberitahuan_putusan_banding,
                pb.penerimaan_kembali_berkas_banding,
                pk.permohonan_kasasi,
                pk.hakim1_kasasi,
                pk.hakim2_kasasi,
                pk.hakim3_kasasi,
                pk.panitera_pengganti_kasasi,
                pk.pengiriman_berkas_kasasi,
                pk.nomor_surat_pengiriman_berkas_kasasi as nomor_surat_kasasi,
                pk.nomor_perkara_kasasi,
                pk.putusan_kasasi,
                pk.status_putusan_kasasi_id,
                pk.amar_putusan_kasasi,
                pk.pemberitahuan_putusan_kasasi,
                pk.penerimaan_berkas_kasasi,
                ppk.permohonan_pk,
                ppk.hakim1_pk,
                ppk.hakim2_pk,
                ppk.hakim3_pk,
                ppk.panitera_pengganti_pk,
                ppk.pengiriman_berkas_pk,
                ppk.nomor_surat_pengiriman_berkas_pk as nomor_surat_pk,
                ppk.nomor_perkara_pk,
                ppk.putusan_pk,
                ppk.status_putusan_pk_id,
                ppk.amar_putusan_pk,
                ppk.pemberitahuan_putusan_pk,
                ppk.penerimaan_berkas_pk
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                LEFT JOIN perkara_banding pb ON pp.perkara_id = pb.perkara_id 
                LEFT JOIN perkara_kasasi pk ON pp.perkara_id = pk.perkara_id 
                LEFT JOIN perkara_pk ppk ON pp.perkara_id = ppk.perkara_id 
                LEFT JOIN perkara_dismissal pdis ON pp.perkara_id = pdis.perkara_id 
                LEFT JOIN perkara_penetapan ppen ON pp.perkara_id = ppen.perkara_id
                LEFT JOIN perkara_persiapan ppenpp ON pp.perkara_id = ppenpp.perkara_id
                LEFT JOIN perkara_jadwal_sidang psid ON pp.perkara_id = psid.perkara_id
                WHERE p.perkara_id = '$perkara_id'
                order by tanggal_pendaftaran desc
                ")->row_array();
    }

    function getPerkaraBandingByID($perkara_id)
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        return $dbsipp->query("SELECT
                pp.perkara_id,
                p.nomor_perkara,
                pbd.status_pihak_id,
                pbd.status_pihak_text,
                pbd.pihak_nama,
                pbd.pihak_asal_text,
                pbd.penerimaan_memori_banding as memori,
                pbd.penyerahan_memori_banding as pbt_memori,
                pbd.penerimaan_kontra_banding as kontra,
                pbd.penyerahan_kontra_banding as pbt_kontra,
                pbd.pemberitahuan_inzage as pbt_inzage,
                pbd.pelaksanaan_inzage as inzage
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                LEFT JOIN perkara_banding_detil pbd ON pp.perkara_id = pbd.perkara_id 
                WHERE p.perkara_id = '$perkara_id'
                ")->result_array();
    }

    function getPerkaraKasasiByID($perkara_id)
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        return $dbsipp->query("SELECT
                pp.perkara_id,
                p.nomor_perkara,
                pkd.status_pihak_id,
                pkd.status_pihak_text,
                pkd.pihak_nama,
                pkd.pihak_asal_text,
                pkd.penerimaan_memori_kasasi as memori,
                pkd.penyerahan_memori_kasasi as pbt_memori,
                pkd.penerimaan_kontra_kasasi as kontra,
                pkd.penyerahan_kontra_kasasi as pbt_kontra,
                pkd.pemberitahuan_inzage_kasasi as pbt_inzage,
                pkd.pelaksanaan_inzage_kasasi as inzage
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                LEFT JOIN perkara_kasasi_detil pkd ON pp.perkara_id = pkd.perkara_id 
                WHERE p.perkara_id = '$perkara_id'
                ")->result_array();
    }

    function getPerkaraPKByID($perkara_id)
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        return $dbsipp->query("SELECT
                pp.perkara_id,
                p.nomor_perkara,
                ppkd.status_pihak_id,
                ppkd.status_pihak_text,
                ppkd.pihak_nama,
                ppkd.pihak_asal_text,
                ppkd.penerimaan_memori_pk as memori,
                ppkd.penyerahan_memori_pk as pbt_memori,
                ppkd.penerimaan_kontra_pk as kontra,
                ppkd.penyerahan_kontra_pk as pbt_kontra,
                ppkd.pemberitahuan_inzage_pk as pbt_inzage,
                ppkd.pelaksanaan_inzage_pk as inzage
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                LEFT JOIN perkara_pk_detil ppkd ON pp.perkara_id = ppkd.perkara_id 
                WHERE p.perkara_id = '$perkara_id'
                ")->result_array();
    }

    function getPerkaraBiayaByID($perkara_id)
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        return $dbsipp->query("SELECT
                p.perkara_id,
                p.penerimaan,
                p.pengeluaran,
                p.sisa,
                pb.penerimaan as penerimaan_banding,
                pb.pengeluaran as pengeluaran_banding,
                pb.sisa as sisa_banding,
                pk.penerimaan as penerimaan_kasasi,
                pk.pengeluaran as pengeluaran_kasasi,
                pk.sisa as sisa_kasasi,
                ppk.penerimaan as penerimaan_pk,
                ppk.pengeluaran as pengeluaran_pk,
                ppk.sisa as sisa_pk
                FROM v_perkara_biaya p
                LEFT JOIN v_perkara_biaya_banding pb ON p.perkara_id = pb.perkara_id
                LEFT JOIN v_perkara_biaya_kasasi pk ON p.perkara_id = pk.perkara_id
                LEFT JOIN v_perkara_biaya_pk ppk ON p.perkara_id = ppk.perkara_id
                WHERE p.perkara_id = '$perkara_id'
                ")->row_array();
    }
    function getCourtCalendar($perkara_id)
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        return $dbsipp->query("SELECT
                pp.perkara_id,
                p.nomor_perkara,
                ccl.rencana_tanggal,
                ccl.rencana_jam,
                ccl.rencana_agenda
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                LEFT JOIN perkara_court_calendar ccl ON pp.perkara_id = ccl.perkara_id
                WHERE p.perkara_id = '$perkara_id'
                order by rencana_tanggal asc
                ")->result_array();
    }

    function getPerkaraSidang($perkara_id)
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        return $dbsipp->query("SELECT
                pp.perkara_id,
                p.nomor_perkara,
                psid.urutan,
                psid.tanggal_sidang,
                psid.jam_sidang,
                psid.sampai_jam,
                psid.ruangan,
                psid.agenda
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                LEFT JOIN perkara_jadwal_sidang psid ON pp.perkara_id = psid.perkara_id
                WHERE p.perkara_id = '$perkara_id'
                order by urutan asc
                ")->result_array();
    }

    function getPerkaraPersiapan($perkara_id)
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        return $dbsipp->query("SELECT
                pp.perkara_id,
                p.nomor_perkara,
                ppers.urutan,
                ppers.tanggal_musyawarah as tanggal_persiapan,
                COUNT(ppers.tanggal_musyawarah) as jumlah_persiapan
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                LEFT JOIN perkara_persiapan_proses ppers ON pp.perkara_id = ppers.perkara_id
                WHERE p.perkara_id = '$perkara_id'
                order by urutan asc
                ")->row_array();
    }

    function getPerkaraPersiapanJadwal($perkara_id)
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        return $dbsipp->query("SELECT
                pp.perkara_id,
                p.nomor_perkara,
                ppers.urutan as urutan_persiapan,
                ppers.tanggal_musyawarah as tanggal_persiapan,
                ppers.waktu_musyawarah as jam_persiapan,
                ppers.agenda_musyawarah as agenda_persiapan
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                LEFT JOIN perkara_persiapan_proses ppers ON pp.perkara_id = ppers.perkara_id
                WHERE p.perkara_id = '$perkara_id'
                order by urutan asc
                ")->result_array();
    }

    function getAllPerkaraBHT()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_putusan,
                pp.status_putusan_id,
                pb.permohonan_banding,
                pb.putusan_banding,
                pk.permohonan_kasasi,
                pk.putusan_kasasi,
                ppk.permohonan_pk,
                ppk.putusan_pk,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                LEFT JOIN perkara_banding pb ON pp.perkara_id = pb.perkara_id 
                LEFT JOIN perkara_kasasi pk ON pp.perkara_id = pk.perkara_id 
                LEFT JOIN perkara_pk ppk ON pp.perkara_id = ppk.perkara_id 
                WHERE tanggal_bht IS NOT NULL
                order by tanggal_pendaftaran desc
                ");
        return $query->result_array();
    }

    function getAllFileBHT()
    {
        $query = $this->db->query("SELECT * FROM perkara_bht order by perkara_id desc");
        return $query->result_array();
    }

    function getFileBHTByID($perkara_id)
    {
        return $this->db->get_where('perkara_bht', ['perkara_id' => $perkara_id])->row_array();
    }

    public function uploadFileBHT()
    {

        $upload_file = $_FILES['file']['name'];

        if ($upload_file) {
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '10240';
            $config['upload_path'] = 'assets/file_bht/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {

                $new_file = $this->upload->data('file_name');
                $this->db->set('file', $new_file);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('perkara/daftarBHT');
            }

            $data = [
                'nomor_perkara' => htmlspecialchars($this->input->post('nomor_perkara', true)),
                'tanggal_bht' => htmlspecialchars($this->input->post('tanggal_bht', true))
            ];

            $this->db->insert('perkara_bht', $data);
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('perkara/daftarBHT');

        }
    }

    public function deleteFileBHT($perkara_id)
    {
        $data['perkara_bht'] = $this->db->get_where('perkara_bht', ['perkara_id' => $perkara_id])->row_array();
        $this->db->delete('perkara_bht', ['perkara_id' => $perkara_id]);
        $old_file = $data['perkara_bht']['file'];
        unlink(FCPATH . 'assets/file_bht/' . $old_file);
        $this->session->set_flashdata('message', 'Dihapus');
    }

    public function updateFileBHT($perkara_id)
    {
        $data['perkara_bht'] = $this->db->get_where('perkara_bht', ['perkara_id' => $perkara_id])->row_array();

        $upload_file = $_FILES['file']['name'];

        if ($upload_file) {
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '10240';
            $config['upload_path'] = 'assets/file_bht/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $old_file = $data['perkara_bht']['file'];
                if ($old_file) {
                    unlink(FCPATH . 'assets/file_bht/' . $old_file);
                }
                $new_file = $this->upload->data('file_name');
                $this->db->set('file', $new_file);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('perkara/daftarBHT');
            }
            
            $data = [
                'nomor_perkara' => htmlspecialchars($this->input->post('nomor_perkara', true)),
                'tanggal_bht' => htmlspecialchars($this->input->post('tanggal_bht', true))
            ];
            
            $this->db->where('perkara_id', $this->input->post('perkara_id'));
            $this->db->update('perkara_bht', $data);
            $this->session->set_flashdata('message', 'Diperbarui');
            redirect('perkara/daftarBHT');
        } else {
            $data = [
                'nomor_perkara' => htmlspecialchars($this->input->post('nomor_perkara', true)),
                'tanggal_bht' => htmlspecialchars($this->input->post('tanggal_bht', true))
            ];
            $this->db->where('perkara_id', $this->input->post('perkara_id'));
            $this->db->update('perkara_bht', $data);
            $this->session->set_flashdata('message', 'Diperbarui');
            redirect('perkara/daftarBHT');
        }

    }

    function getBhtToday()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE tanggal_bht = CURDATE()
                order by tanggal_pendaftaran desc
                ");
        return $query->result_array();
    }

    function getBhtThisMonth()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE MONTH(tanggal_bht) = MONTH(CURDATE()) AND YEAR(tanggal_bht) = YEAR(CURDATE())
                order by tanggal_pendaftaran desc
                ");
        return $query->result_array();
    }

    function getTotalBhtToday()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE tanggal_bht = CURDATE()
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtMonth()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE MONTH(tanggal_bht) = MONTH(CURDATE())
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtThisMonth()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE MONTH(tanggal_bht) = MONTH(CURDATE()) AND YEAR(tanggal_bht) = YEAR(CURDATE())
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtYear()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE YEAR(tanggal_bht) = YEAR(CURDATE())
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBht()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE tanggal_bht IS NOT NULL
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
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
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_putusan,
                pb.permohonan_banding,
                pb.putusan_banding,
                pk.permohonan_kasasi,
                pk.putusan_kasasi,
                ppk.permohonan_pk,
                ppk.putusan_pk,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                LEFT JOIN perkara_banding pb ON pp.perkara_id = pb.perkara_id 
                LEFT JOIN perkara_kasasi pk ON pp.perkara_id = pk.perkara_id 
                LEFT JOIN perkara_pk ppk ON pp.perkara_id = ppk.perkara_id 
                WHERE tanggal_putusan >= '$from_date' AND tanggal_putusan <= '$until_date'
                order by tanggal_pendaftaran desc
                ");
        return $query->result_array();
    }

    // Count BHT by Year

    function getTotalBhtYear22()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE YEAR(tanggal_bht) = '2022'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtYear21()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE YEAR(tanggal_bht) = '2021'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtYear20()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE YEAR(tanggal_bht) = '2020'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtYear19()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE YEAR(tanggal_bht) = '2019'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtYear18()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE YEAR(tanggal_bht) = '2018'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtYear17()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE YEAR(tanggal_bht) = '2017'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtYear16()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE YEAR(tanggal_bht) = '2016'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtYear15()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE YEAR(tanggal_bht) = '2015'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    // count BHT by Month

    function getTotalBhtMonth1()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE MONTH(tanggal_bht) = '01'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtMonth2()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE MONTH(tanggal_bht) = '02'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtMonth3()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE MONTH(tanggal_bht) = '03'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtMonth4()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE MONTH(tanggal_bht) = '04'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtMonth5()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE MONTH(tanggal_bht) = '05'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtMonth6()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE MONTH(tanggal_bht) = '06'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtMonth7()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE MONTH(tanggal_bht) = '07'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtMonth8()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE MONTH(tanggal_bht) = '08'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtMonth9()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE MONTH(tanggal_bht) = '09'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtMonth10()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE MONTH(tanggal_bht) = '10'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtMonth11()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE MONTH(tanggal_bht) = '11'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getTotalBhtMonth12()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                WHERE MONTH(tanggal_bht) = '12'
                order by tanggal_pendaftaran desc
                ");
        return $query->num_rows();
    }

    function getAllEksekusi()
    {
        $dbsipp = $this->load->database('sipp_578850', TRUE);
        $query = $dbsipp->query("SELECT
				pp.perkara_id,
				p.nomor_perkara,
				p.tanggal_pendaftaran,
                pp.tanggal_putusan,
				pp.status_putusan_id,
                pb.permohonan_banding,
                pb.putusan_banding,
                pb.status_putusan_banding_id,
                pk.permohonan_kasasi,
                pk.putusan_kasasi,
                pk.status_putusan_kasasi_id,
                ppk.permohonan_pk,
                ppk.putusan_pk,
                ppk.status_putusan_pk_id,
				pp.tanggal_bht 
                FROM perkara_putusan pp 
                LEFT JOIN perkara p ON pp.perkara_id = p.perkara_id 
                LEFT JOIN perkara_eksekusi pe ON pp.perkara_id = pe.perkara_id 
                LEFT JOIN perkara_banding pb ON pp.perkara_id = pb.perkara_id 
                LEFT JOIN perkara_kasasi pk ON pp.perkara_id = pk.perkara_id 
                LEFT JOIN perkara_pk ppk ON pp.perkara_id = ppk.perkara_id 
                WHERE tanggal_bht IS NOT NULL 
                AND permohonan_eksekusi IS NULL
                AND status_putusan_id IN (34)
                order by tanggal_pendaftaran desc
                ");
        return $query->result_array();
    }

    function getAllPerkaraEksekusi()
    {
        $query = $this->db->query("SELECT * FROM perkara_eksekusi order by perkara_id desc");
        return $query->result_array();
    }

    function getPerkaraEksekusiByID($perkara_id)
    {
        return $this->db->get_where('perkara_eksekusi', ['perkara_id' => $perkara_id])->row_array();
    }
    
    function getAllStatusEksekusi()
    {
        $query = $this->db->query("SELECT * FROM status_eksekusi order by id asc");
        return $query->result_array();
    }

    function uploadFileEksekusi()
    {

        $upload_file = $_FILES['file']['name'];

        if ($upload_file) {
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '10240';
            $config['upload_path'] = 'assets/file_eksekusi/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {

                $new_file = $this->upload->data('file_name');
                $this->db->set('file', $new_file);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('perkara/perkaraEksekusi');
            }

            $data = [
                'perkara_id' => htmlspecialchars($this->input->post('perkara_id', true)),
                'nomor_perkara' => htmlspecialchars($this->input->post('nomor_perkara', true)),
                'tanggal_surat' => htmlspecialchars($this->input->post('tanggal_surat', true)),
                'status_eksekusi' => htmlspecialchars($this->input->post('status_eksekusi', true))
            ];

            $this->db->insert('perkara_eksekusi', $data);
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('perkara/perkaraEksekusi');

        }
    }

    function updateFileEksekusi($perkara_id)
    {
        $data['perkara_eksekusi'] = $this->db->get_where('perkara_eksekusi', ['perkara_id' => $perkara_id])->row_array();

        $upload_file = $_FILES['file']['name'];

        if ($upload_file) {
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '10240';
            $config['upload_path'] = 'assets/file_eksekusi/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $old_file = $data['perkara_eksekusi']['file'];
                if ($old_file) {
                    unlink(FCPATH . 'assets/file_eksekusi/' . $old_file);
                }
                $new_file = $this->upload->data('file_name');
                $this->db->set('file', $new_file);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('perkara/perkaraEksekusi');
            }
            
            $data = [
                'perkara_id' => htmlspecialchars($this->input->post('perkara_id', true)),
                'nomor_perkara' => htmlspecialchars($this->input->post('nomor_perkara', true)),
                'tanggal_surat' => htmlspecialchars($this->input->post('tanggal_surat', true)),
                'status_eksekusi' => htmlspecialchars($this->input->post('status_eksekusi', true))
            ];
            
            $this->db->where('perkara_id', $this->input->post('perkara_id'));
            $this->db->update('perkara_eksekusi', $data);
            $this->session->set_flashdata('message', 'Diperbarui');
            redirect('perkara/perkaraEksekusi');
        } else {
            $data = [
                'perkara_id' => htmlspecialchars($this->input->post('perkara_id', true)),
                'nomor_perkara' => htmlspecialchars($this->input->post('nomor_perkara', true)),
                'tanggal_surat' => htmlspecialchars($this->input->post('tanggal_surat', true)),
                'status_eksekusi' => htmlspecialchars($this->input->post('status_eksekusi', true))
            ];
            $this->db->where('perkara_id', $this->input->post('perkara_id'));
            $this->db->update('perkara_eksekusi', $data);
            $this->session->set_flashdata('message', 'Diperbarui');
            redirect('perkara/perkaraEksekusi');
        }

    }

}
