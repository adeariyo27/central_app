<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12 col-lg">
                <div class="flash-data" data-notifadminsurvei="<?= $this->session->flashdata('message'); ?>"></div>
                <section class="panel">
                    <header class="panel-heading">
                        <?= $title; ?>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <table class="table table-bordered table-striped" id="tblUser">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> Nama</th>
                                        <th> Instansi</th>
                                        <th> Umur</th>
                                        <th> Jenis Kelamin</th>
                                        <th> Pendidikan</th>
                                        <th> Pekerjaan</th>
                                        <th class="text-center bg-success"> Skor Survei</th>
                                        <th class="text-center"> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($ipk as $i) : ?>
                                        <?php
                                        $var_manipulasi_peraturan = $i['manipulasi_peraturan'];
                                        $var_penyalahgunaan_jabatan = $i['penyalahgunaan_jabatan'];
                                        $var_menjual_pengaruh = $i['menjual_pengaruh'];
                                        $var_transaksi_biaya = $i['transaksi_biaya'];
                                        $var_biaya_tambahan = $i['biaya_tambahan'];
                                        $var_hadiah = $i['hadiah'];
                                        $var_transparansi_biaya = $i['transparansi_biaya'];
                                        $var_percaloan = $i['percaloan'];
                                        $var_perbuatan_curang = $i['perbuatan_curang'];
                                        $var_transaksi_rahasia = $i['transaksi_rahasia'];

                                        $total = $var_manipulasi_peraturan + $var_penyalahgunaan_jabatan + $var_menjual_pengaruh + $var_transaksi_biaya + $var_biaya_tambahan + $var_hadiah + $var_transparansi_biaya + $var_percaloan + $var_perbuatan_curang + $var_transaksi_rahasia;
                                        ?>
                                        <tr>
                                            <th scope="row"><?= $no++; ?></th>
                                            <td><?= $i['nama']; ?></td>
                                            <td><?= $i['instansi']; ?></td>
                                            <td><?= $i['umur']; ?> th</td>
                                            <td><?= $i['jenis_kelamin']; ?></td>
                                            <td><?= $i['pendidikan']; ?></td>
                                            <td><?= $i['pekerjaan']; ?></td>
                                            <td class="text-center font-weight-bold"><?= $total; ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('survei/cetaksurvei_ipk/') . $i['id']; ?>" class="badge badge-warning" target="_blank"><i class=" icon-print"></i></a>
                                                <a href="<?= base_url('survei/deletesurvei_ipk/') . $i['id']; ?>" class="badge badge-danger tblHapusSurveiIpk"><i class=" icon-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<!--main content end-->