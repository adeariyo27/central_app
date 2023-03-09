<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <!--state overview start-->
        <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol terques">
                        <i class="icon-user"></i>
                    </div>
                    <div class="value">
                        <h1 class="count text-dark">
                            <?= $total_pengunjung; ?>
                        </h1>
                        <p class="text-dark">Data Pengunjung</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol red">
                        <i class="icon-th-large"></i>
                    </div>
                    <div class="value">
                        <h1 class="text-dark count2">
                            <?php foreach ($total_pengunjung_bln as $tb) : ?>
                                <?= $tb['total']; ?>
                            <?php endforeach; ?>
                        </h1>
                        <?php
                        $bulan = date('m');
                        if ($bulan == 1) {
                            echo "<p class='text-dark'>Pengunjung Januari</p>";
                        } elseif ($bulan == 2) {
                            echo "<p class='text-dark'>Pengunjung Februari</p>";
                        } elseif ($bulan == 3) {
                            echo "<p class='text-dark'>Pengunjung Maret</p>";
                        } elseif ($bulan == 4) {
                            echo "<p class='text-dark'>Pengunjung April</p>";
                        } elseif ($bulan == 5) {
                            echo "<p class='text-dark'>Pengunjung Mei</p>";
                        } elseif ($bulan == 6) {
                            echo "<p class='text-dark'>Pengunjung Juni</p>";
                        } elseif ($bulan == 7) {
                            echo "<p class='text-dark'>Pengunjung Juli</p>";
                        } elseif ($bulan == 8) {
                            echo "<p class='text-dark'>Pengunjung Agustus</p>";
                        } elseif ($bulan == 9) {
                            echo "<p class='text-dark'>Pengunjung September</p>";
                        } elseif ($bulan == 10) {
                            echo "<p class='text-dark'>Pengunjung Oktober</p>";
                        } elseif ($bulan == 11) {
                            echo "<p class='text-dark'>Pengunjung November</p>";
                        } elseif ($bulan == 12) {
                            echo "<p class='text-dark'>Pengunjung Desember</p>";
                        }
                        ?>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol blue">
                        <i class="icon-th"></i>
                    </div>
                    <div class="value">
                        <h1 class="text-dark count3">
                            <?php foreach ($total_pengunjung_thn as $tt) : ?>
                                <?= $tt['total']; ?>
                            <?php endforeach; ?>
                        </h1>
                        <p class="text-dark">Pengunjung Tahun <?= date('Y'); ?></p>
                    </div>
                </section>
            </div>
            <div class=" col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol yellow">
                        <i class="icon-star"></i>
                    </div>
                    <div class="value">
                        <h1 class="text-dark count4">
                            <?php foreach ($most_visit as $mv) : ?>
                                <?= $mv['total']; ?>
                            <?php endforeach; ?>
                        </h1>
                        <p class="text-dark">
                            <?php foreach ($most_visit as $mv) : ?>
                                <?= $mv['nama']; ?>
                            <?php endforeach; ?>
                        </p>
                    </div>
                </section>
            </div>
        </div>
        <!--state overview end-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel text-center">
                    <header class="panel-heading bg-warning text-dark text-uppercase font-weight-bold" style="letter-spacing:2px;">
                        Pengunjung Hari ini
                    </header>
                    <table class="table table-striped table-advance table-hover">
                        <thead class="bg-primary text-white" style="letter-spacing:1.5px;">
                            <tr>
                                <th>#</th>
                                <th> Nama</th>
                                <th>Pekerjaan</th>
                                <th> Keperluan</th>
                                <th class="hidden-phone"> Waktu Kunjungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            if (empty($today_visitor)) {
                                echo "<tr><td colspan='5' class='font-italic'>Tidak Ada Pengunjung</td></tr>";
                            } ?>
                            <?php foreach ($today_visitor as $tp) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $tp['nama'] ?></td>
                                    <td><?= $tp['pekerjaan'] ?></td>
                                    <td><?= $tp['keperluan'] ?></td>
                                    <td class="hidden-phone"><?= date('H:i', strtotime($tp['tanggal'])) ?> WITA</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <!-- page end-->
        <!-- graph start-->
        <div id="morris">
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading text-center">
                            Statistik Pekerjaan Pengunjung Terbanyak
                        </header>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pekerjaan</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 1;
                            if (empty($pekerjaan)) {
                                echo "<tr><td colspan='5' class='font-italic'>Tidak Ada Pengunjung</td></tr>";
                            } ?>
                            <?php foreach ($pekerjaan as $job) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $job['pekerjaan'] ?></td>
                                    <td><?= $job['total'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </section>
                </div>
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading text-center">
                            Statistik Gender Pengunjung
                        </header>
                        <div class="panel-body">
                            <div id="hero-donut" class="graph"></div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- graph end-->
    </section>
</section>