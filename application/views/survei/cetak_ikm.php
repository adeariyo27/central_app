<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <style type="text/css">
        #tabel-data {
            border-collapse: collapse;
            margin: 10px 0px 0px 35px;
            height: auto;
        }

        h4 {
            font-family: sans-serif;
            text-transform: uppercase;
        }

        .biodata {
            margin-left: 40px;
        }

        #footer-tanggal {
            margin-left: 800px;
            margin-top: 30px;
        }

        #footer-jabatan {
            margin-left: 800px;
        }

        #footer-nama {
            margin-left: 800px;
            margin-top: 80px;
            font-weight: bold;
        }

        #footer-nip {
            margin-left: 800px;

        }

        #nomor {
            text-align: center;
        }
    </style>
</head>

<body>
    <table style="margin-left: 60px;">
        <tr>
            <td><img src="<?= "assets/img/profile/" . $satker['logo_satker'] . ""; ?>" height="80" style="margin: 0px 0px 5px 250px"></td>
        </tr>
        <tr>
            <td align="center">
                <h4>SURVEY KEPUASAN PELAYANAN <?= $satker['nama_satker']; ?></h4>
                <h4>KUESIONER INI MOHON DIISI UNTUK MENINGKATKAN PELAYANAN</h4>
                <h4><?= $satker['nama_satker']; ?> KEPADA PARA PENCARI KEADILAN</h4>
            </td>
        </tr>
    </table>
    <div>
    </div>
    <hr style="width: 90%;" />

    <div class="biodata">
        <table>
            <tr>
                <td>Nama</td>
                <td style="width: 30px;text-align: center;">:</td>
                <td><?= $survei['nama']; ?></td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td style="width: 30px;text-align: center;">:</td>
                <td><?= $survei['no_tlp']; ?></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td style="width: 30px;text-align: center;">:</td>
                <td><?= tgl_eng_to_ind(date('d-m-Y', strtotime($survei['tanggal']))); ?></td>
            </tr>
        </table>
    </div>

    <table width="95%" id="tabel-data" border="1" cellpadding="4">
        <tr>
            <th rowspan="2" id="nomor">No</th>
            <th rowspan="2">Aspek Layanan</th>
            <th rowspan="2">Sub Aspek Layanan</th>
            <th colspan="4">Tingkat Kepuasan Pelayanan Publik</th>
        </tr>
        <tr>
            <th>Sangat Puas</th>
            <th>Puas</th>
            <th>Cukup Puas</th>
            <th>Kurang Puas</th>
        </tr>
        <tr>
            <td rowspan="7" id="nomor">1</td>
            <td rowspan="7">Fasilitas Pengadilan</td>
            <td>1. Fasilitas Informasi</td>
            <?php
            if ($survei['fasilitas_informasi'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['fasilitas_informasi'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['fasilitas_informasi'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>2. Fasilitas Toilet</td>
            <?php
            if ($survei['fasilitas_toilet'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['fasilitas_toilet'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['fasilitas_toilet'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>3. Parkir Kendaraan</td>
            <?php
            if ($survei['parkir_kendaraan'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['parkir_kendaraan'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['parkir_kendaraan'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>4. Kebersihan</td>
            <?php
            if ($survei['kebersihan'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['kebersihan'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['kebersihan'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>5. Taman</td>
            <?php
            if ($survei['taman'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['taman'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['taman'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>6. Sarana Ibadah</td>
            <?php
            if ($survei['sarana_ibadah'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['sarana_ibadah'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['sarana_ibadah'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>7. Ruang Tunggu</td>
            <?php
            if ($survei['ruang_tunggu'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['ruang_tunggu'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['ruang_tunggu'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td rowspan="2" id="nomor">2</td>
            <td rowspan="2">Prosedur Pendaftaran</td>
            <td>1. Sistem Pembayaran</td>
            <?php
            if ($survei['sistem_pembayaran'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['sistem_pembayaran'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['sistem_pembayaran'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>2. Pelayanan Pendaftaran</td>
            <?php
            if ($survei['pelayanan_pendaftaran'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['pelayanan_pendaftaran'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['pelayanan_pendaftaran'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td rowspan="5" id="nomor">3</td>
            <td rowspan="5">Persidangan</td>
            <td>1. Persiapan Persidangan</td>
            <?php
            if ($survei['persiapan_persidangan'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['persiapan_persidangan'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['persiapan_persidangan'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>2. Fasilitas Ruang Sidang</td>
            <?php
            if ($survei['fasilitas_ruang_sidang'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['fasilitas_ruang_sidang'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['fasilitas_ruang_sidang'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>3. Proses Persidangan</td>
            <?php
            if ($survei['proses_persidangan'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['proses_persidangan'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['proses_persidangan'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>4. Waktu Pemeriksaan</td>
            <?php
            if ($survei['waktu_pemeriksaan'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['waktu_pemeriksaan'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['waktu_pemeriksaan'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>5. Pemeriksaan Setempat</td>
            <?php
            if ($survei['pemeriksaan_setempat'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['pemeriksaan_setempat'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['pemeriksaan_setempat'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td id="nomor">4</td>
            <td>Profesionalitas Hakim</td>
            <td>Profesionalitas Hakim</td>
            <?php
            if ($survei['profesionalitas_hakim'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['profesionalitas_hakim'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['profesionalitas_hakim'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td id="nomor">5</td>
            <td>Pemberian Salinan Putusan</td>
            <td>Pemberian Salinan Putusan</td>
            <?php
            if ($survei['pemberian_salinan_putusan'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['pemberian_salinan_putusan'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['pemberian_salinan_putusan'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td id="nomor">6</td>
            <td>Pelayanan Informasi</td>
            <td>Pelayanan Informasi</td>
            <?php
            if ($survei['pelayanan_informasi'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['pelayanan_informasi'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['pelayanan_informasi'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td id="nomor">7</td>
            <td>Pelayanan Pengaduan</td>
            <td>Pelayanan Pengaduan</td>
            <?php
            if ($survei['pelayanan_pengaduan'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['pelayanan_pengaduan'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['pelayanan_pengaduan'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td id="nomor">8</td>
            <td>Pelayanan Persuratan</td>
            <td>Pelayanan Persuratan</td>
            <?php
            if ($survei['pelayanan_persuratan'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['pelayanan_persuratan'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['pelayanan_persuratan'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td id="nomor">9</td>
            <td>Pengembalian Sisa Biaya Panjar</td>
            <td>Pengembalian Sisa Biaya Panjar</td>
            <?php
            if ($survei['pengembalian_sisa_biaya_panjar'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['pengembalian_sisa_biaya_panjar'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['pengembalian_sisa_biaya_panjar'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td id="nomor">10</td>
            <td>Permohonan Eksekusi</td>
            <td>Permohonan Eksekusi</td>
            <?php
            if ($survei['permohonan_eksekusi'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['permohonan_eksekusi'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['permohonan_eksekusi'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td rowspan="3" id="nomor">11</td>
            <td rowspan="3">Aparatur Pengadilan</td>
            <td>1. Sikap Petugas</td>
            <?php
            if ($survei['sikap_petugas'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['sikap_petugas'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['sikap_petugas'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>2. Kemampuan Pengetahuan Petugas</td>
            <?php
            if ($survei['kemampuan_pengetahuan_petugas'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['kemampuan_pengetahuan_petugas'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['kemampuan_pengetahuan_petugas'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>3. Penampilan Petugas</td>
            <?php
            if ($survei['penampilan_petugas'] == "Sangat Puas") {
            ?>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['penampilan_petugas'] == "Puas") {
            ?>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
                <td></td>
            <?php
            } elseif ($survei['penampilan_petugas'] == "Cukup Puas") {
            ?>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
                <td></td>
            <?php
            } else {
            ?>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;font-weight: bold;"><i>X</i></td>
            <?php
            }
            ?>
        </tr>
        <tr>
            <td>12</td>
            <td>Saran :<p style="font-style: italic;font-size: 12px;">(Apabila masih ada pelayanan kami yang kurang, diharapkan untuk menuliskan alasan kekurangan tersebut di kolom sebelah sehingga kami dapat memperbaikinya</p>
            </td>
            <td colspan="5" style="font-weight: bold;"><?php echo $survei['kritik_saran']; ?></td>
        </tr>
    </table>
</body>

</html>