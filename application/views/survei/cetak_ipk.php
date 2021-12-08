<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <style type="text/css">
        #tabel-data {
            border-collapse: collapse;
            margin: 0;
            height: auto;
        }

        h4 {
            font-family: sans-serif;
            text-transform: uppercase;
        }

        .biodata {
            margin-bottom: 10px;
        }

        #nomor {
            text-align: center;
        }
    </style>
</head>

<body>
    <table style="margin-left: 20%;">
        <tr>
            <td align="center"><img src="<?= "assets/img/profile/" . $satker['logo_satker'] . ""; ?>" height="80"></td>
        </tr>
        <tr>
            <td align="center">
                <h4><?= $judul_laporan; ?></h4>
                <h4><?= $satker['nama_satker']; ?> TAHUN <?= date('Y'); ?></h4>
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
                <td>Instansi / Perusahaan</td>
                <td style="width: 30px;text-align: center;">:</td>
                <td><?= $survei['instansi']; ?></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td style="width: 30px;text-align: center;">:</td>
                <td><?= $survei['umur']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td style="width: 30px;text-align: center;">:</td>
                <td><?= $survei['jenis_kelamin']; ?></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td style="width: 30px;text-align: center;">:</td>
                <td><?= $survei['pendidikan']; ?></td>
            </tr>
            <tr>
                <td>Pekerjaan Utama</td>
                <td style="width: 30px;text-align: center;">:</td>
                <td><?= $survei['pekerjaan']; ?></td>
            </tr>
        </table>
    </div>

    <table id="tabel-data" border="1" cellpadding="7">
        <tr>
            <td colspan="2" rowspan="2">Pernyataan, <br> bagaimana pendapat bapak/ibu/saudara(i)</td>
            <td colspan="6">Kolom Penilaian</td>
            <td rowspan="2">Keterangan</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
        </tr>
        <tr>
            <td colspan="9" style="background-color:#C5CED6">Eksternal</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Pelayanan oleh petugas sesuai prosedur dan ketentuan dan tidak dipersulit. <br><strong>(Manipulasi Peraturan)</strong></td>
            <?php
            if ($survei['manipulasi_peraturan'] == "1") {
            ?>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>1</i></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['manipulasi_peraturan'] == "2") {
            ?>
                <td>1</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>2</i></td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['manipulasi_peraturan'] == "3") {
            ?>
                <td>1</td>
                <td>2</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>3</i></td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['manipulasi_peraturan'] == "4") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>4</i></td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['manipulasi_peraturan'] == "5") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>5</i></td>
                <td>6</td>
            <?php
            } else {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>6</i></td>
            <?php
            }
            ?>
            <td></td>
        </tr>
        <!--  -->
        <!-----------------------------------------------------------------------------------------------------------------------------------------------  -->
        <!--  -->
        <tr>
            <td>2</td>
            <td>Petugas dalam memberikan layanan pengadilan dilakukan secara cepat dan sederhana tanpa ada penawaran dari petugas untuk meminta imbalan tertentu.. <br><strong>(Penyalahgunaan Jabatan)</strong></td>
            <?php
            if ($survei['penyalahgunaan_jabatan'] == "1") {
            ?>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>1</i></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['penyalahgunaan_jabatan'] == "2") {
            ?>
                <td>1</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>2</i></td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['penyalahgunaan_jabatan'] == "3") {
            ?>
                <td>1</td>
                <td>2</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>3</i></td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['penyalahgunaan_jabatan'] == "4") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>4</i></td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['penyalahgunaan_jabatan'] == "5") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>5</i></td>
                <td>6</td>
            <?php
            } else {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>6</i></td>
            <?php
            }
            ?>
            <td></td>
        </tr>
        <!--  -->
        <!-----------------------------------------------------------------------------------------------------------------------------------------------  -->
        <!--  -->
        <tr>
            <td>3</td>
            <td>Tidak pernah dihubungi oleh seseorang (karyawan pengadilan) yang menjanjikan akan membantu dalam pengurusan surat/berkas perkara dengan meminta sesuatu.. <br><strong>(Menjual Pengaruh)</strong></td>
            <?php
            if ($survei['menjual_pengaruh'] == "1") {
            ?>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>1</i></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['menjual_pengaruh'] == "2") {
            ?>
                <td>1</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>2</i></td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['menjual_pengaruh'] == "3") {
            ?>
                <td>1</td>
                <td>2</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>3</i></td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['menjual_pengaruh'] == "4") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>4</i></td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['menjual_pengaruh'] == "5") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>5</i></td>
                <td>6</td>
            <?php
            } else {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>6</i></td>
            <?php
            }
            ?>
            <td></td>
        </tr>
        <!--  -->
        <!-----------------------------------------------------------------------------------------------------------------------------------------------  -->
        <!--  -->
        <tr>
            <td>4</td>
            <td>Informasi tentang tarif/biaya baik melalui website ataupun petugas layanan mudah diakses/diperoleh.. <br><strong>(Transaksi Biaya)</strong></td>
            <?php
            if ($survei['transaksi_biaya'] == "1") {
            ?>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>1</i></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['transaksi_biaya'] == "2") {
            ?>
                <td>1</td>
                <td style="text-align: center;font-weight: bold; background-color:lightgreen"><i>2</i></td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['transaksi_biaya'] == "3") {
            ?>
                <td>1</td>
                <td>2</td>
                <td style="text-align: center;font-weight: bold; background-color:lightgreen"><i>3</i></td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['transaksi_biaya'] == "4") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td style="text-align: center;font-weight: bold; background-color:lightgreen"><i>4</i></td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['transaksi_biaya'] == "5") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td style="text-align: center;font-weight: bold; background-color:lightgreen"><i>5</i></td>
                <td>6</td>
            <?php
            } else {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>6</i></td>
            <?php
            }
            ?>
            <td></td>
        </tr>
        <!--  -->
        <!-----------------------------------------------------------------------------------------------------------------------------------------------  -->
        <!--  -->
        <tr>
            <td>5</td>
            <td>Pembayaran biaya perkara sesuai tarif resmi tanpa ada biaya tambahan diluar ketentuan.. <br><strong>(Biaya Tambahan)</strong></td>
            <?php
            if ($survei['biaya_tambahan'] == "1") {
            ?>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>1</i></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['biaya_tambahan'] == "2") {
            ?>
                <td>1</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>2</i></td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['biaya_tambahan'] == "3") {
            ?>
                <td>1</td>
                <td>2</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>3</i></td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['biaya_tambahan'] == "4") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>4</i></td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['biaya_tambahan'] == "5") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>5</i></td>
                <td>6</td>
            <?php
            } else {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>6</i></td>
            <?php
            }
            ?>
            <td></td>
        </tr>
        <!--  -->
        <!-----------------------------------------------------------------------------------------------------------------------------------------------  -->
        <!--  -->
        <tr>
            <td>6</td>
            <td>Petugas dengan tegas menolak setiap pemberian tanda terima kasih atas layanan yang diterima.. <br><strong>(Hadiah)</strong></td>
            <?php
            if ($survei['hadiah'] == "1") {
            ?>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>1</i></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['hadiah'] == "2") {
            ?>
                <td>1</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>2</i></td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['hadiah'] == "3") {
            ?>
                <td>1</td>
                <td>2</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>3</i></td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['hadiah'] == "4") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>4</i></td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['hadiah'] == "5") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>5</i></td>
                <td>6</td>
            <?php
            } else {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>6</i></td>
            <?php
            }
            ?>
            <td></td>
        </tr>
        <!--  -->
        <!-----------------------------------------------------------------------------------------------------------------------------------------------  -->
        <!--  -->
        <tr>
            <td>7</td>
            <td>Menerima bukti transaksi keuangan/pembayaran yang sah setelah proses pembayaran dilakukan.. <br><strong>(Transparansi Biaya)</strong></td>
            <?php
            if ($survei['transparansi_biaya'] == "1") {
            ?>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>1</i></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['transparansi_biaya'] == "2") {
            ?>
                <td>1</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>2</i></td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['transparansi_biaya'] == "3") {
            ?>
                <td>1</td>
                <td>2</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>3</i></td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['transparansi_biaya'] == "4") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>4</i></td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['transparansi_biaya'] == "5") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>5</i></td>
                <td>6</td>
            <?php
            } else {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>6</i></td>
            <?php
            }
            ?>
            <td></td>
        </tr>
        <!--  -->
        <!-----------------------------------------------------------------------------------------------------------------------------------------------  -->
        <!--  -->
        <tr>
            <td>8</td>
            <td>Tidak pernah mengetahui ada praktek percaloan dalam pengurusan layanan di pengadilan.. <br><strong>(Percaloan)</strong></td>
            <?php
            if ($survei['percaloan'] == "1") {
            ?>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>1</i></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['percaloan'] == "2") {
            ?>
                <td>1</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>2</i></td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['percaloan'] == "3") {
            ?>
                <td>1</td>
                <td>2</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>3</i></td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['percaloan'] == "4") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>4</i></td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['percaloan'] == "5") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>5</i></td>
                <td>6</td>
            <?php
            } else {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>6</i></td>
            <?php
            }
            ?>
            <td></td>
        </tr>
        <!--  -->
        <!-----------------------------------------------------------------------------------------------------------------------------------------------  -->
        <!--  -->
        <tr>
            <td>9</td>
            <td>Tidak pernah melihat dan/atau mendengar masih terjadi praktek KKN di pengadilan.. <br><strong>(Perbuatan Curang)</strong></td>
            <?php
            if ($survei['perbuatan_curang'] == "1") {
            ?>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>1</i></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['perbuatan_curang'] == "2") {
            ?>
                <td>1</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>2</i></td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['perbuatan_curang'] == "3") {
            ?>
                <td>1</td>
                <td>2</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>3</i></td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['perbuatan_curang'] == "4") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>4</i></td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['perbuatan_curang'] == "5") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>5</i></td>
                <td>6</td>
            <?php
            } else {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>6</i></td>
            <?php
            }
            ?>
            <td></td>
        </tr>
        <!--  -->
        <!-----------------------------------------------------------------------------------------------------------------------------------------------  -->
        <!--  -->
        <tr>
            <td>10</td>
            <td>Tidak pernah mengurus perkara melalui Hakim/Panitera/Staff pengadilan diluar persidangan atau luar prosedur.<br.><br><strong>(Transaksi Rahasia)</strong></td>
            <?php
            if ($survei['transaksi_rahasia'] == "1") {
            ?>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>1</i></td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['transaksi_rahasia'] == "2") {
            ?>
                <td>1</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>2</i></td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['transaksi_rahasia'] == "3") {
            ?>
                <td>1</td>
                <td>2</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>3</i></td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['transaksi_rahasia'] == "4") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>4</i></td>
                <td>5</td>
                <td>6</td>
            <?php
            } elseif ($survei['transaksi_rahasia'] == "5") {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>5</i></td>
                <td>6</td>
            <?php
            } else {
            ?>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td style="text-align: center;font-weight: bold;background-color:lightgreen"><i>6</i></td>
            <?php
            }
            ?>
            <td></td>
        </tr>
    </table>
</body>

</html>