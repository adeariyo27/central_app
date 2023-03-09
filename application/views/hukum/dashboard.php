<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <!--state overview start-->
        <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol terques pb-5">
                        <i class="icon-file"></i>
                    </div>
                    <div class="value">
                        <h1 class="count text-dark">
                            <?= $total_suratkuasa_today; ?>
                        </h1>
                        <p class="text-dark">Surat Kuasa Hari Ini</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol red pb-5">
                        <i class="icon-file"></i>
                    </div>
                    <div class="value">
                        <h1 class="text-dark count2">
                            <?= $total_suratkuasa_month ?>
                        </h1>
                        <?php
                        $bulan = date('m');
                        if ($bulan == 1) {
                            echo "<p class='text-dark'>Surat Kuasa Bulan Januari " . date('Y') . "</p>";
                        } elseif ($bulan == 2) {
                            echo "<p class='text-dark'>Surat Kuasa Bulan Februari " . date('Y') . "</p>";
                        } elseif ($bulan == 3) {
                            echo "<p class='text-dark'>Surat Kuasa Bulan Maret " . date('Y') . "</p>";
                        } elseif ($bulan == 4) {
                            echo "<p class='text-dark'>Surat Kuasa Bulan April " . date('Y') . "</p>";
                        } elseif ($bulan == 5) {
                            echo "<p class='text-dark'>Surat Kuasa Bulan Mei " . date('Y') . "</p>";
                        } elseif ($bulan == 6) {
                            echo "<p class='text-dark'>Surat Kuasa Bulan Juni " . date('Y') . "</p>";
                        } elseif ($bulan == 7) {
                            echo "<p class='text-dark'>Surat Kuasa Bulan Juli " . date('Y') . "</p>";
                        } elseif ($bulan == 8) {
                            echo "<p class='text-dark'>Surat Kuasa Bulan Agustus " . date('Y') . "</p>";
                        } elseif ($bulan == 9) {
                            echo "<p class='text-dark'>Surat Kuasa Bulan September " . date('Y') . "</p>";
                        } elseif ($bulan == 10) {
                            echo "<p class='text-dark'>Surat Kuasa Bulan Oktober " . date('Y') . "</p>";
                        } elseif ($bulan == 11) {
                            echo "<p class='text-dark'>Surat Kuasa Bulan November " . date('Y') . "</p>";
                        } elseif ($bulan == 12) {
                            echo "<p class='text-dark'>Surat Kuasa Bulan Desember " . date('Y') . "</p>";
                        }
                        ?>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol blue pb-5">
                        <i class="icon-file"></i>
                    </div>
                    <div class="value">
                        <h1 class="text-dark count3">
                            <?= $total_suratkuasa_year; ?>
                        </h1>
                        <p class="text-dark">Surat Kuasa Tahun <?= date('Y'); ?></p>
                    </div>
                </section>
            </div>
            <div class=" col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol yellow pb-5">
                        <i class="icon-file"></i>
                    </div>
                    <div class="value">
                        <h1 class="text-dark count3">
                            <?= $total_suratkuasa; ?>
                        </h1>
                        <p class="text-dark">Jumlah Seluruh Surat Kuasa</p>
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
                        Surat Kuasa Terdaftar Hari ini
                    </header>
                    <table class="table table-striped table-advance table-hover">
                        <thead class="bg-primary text-white" style="letter-spacing:1.5px;">
                            <tr>
                                <th>#</th>
                                <th> Nomor Register Kuasa</th>
                                <th class="hidden-phone"> Nama Pemberi Kuasa</th>
                                <th class="hidden-phone"> Nama Penerima Kuasa</th>
                                <th> Nomor Perkara</th>
                                <th class="hidden-phone">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            if (empty($total_suratkuasa_today)) {
                                echo "<tr><td colspan='6' class='font-italic'>Tidak Ada Surat Kuasa Terdaftar Hari Ini</td></tr>";
                            }
                            foreach ($today_suratkuasa as $sk) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $sk['nomor_regiskuasa']; ?></td>
                                    <td class="hidden-phone"><?= $sk['nama_pemberikuasa']; ?></td>
                                    <td class="hidden-phone"><?= $sk['nama_penerimakuasa']; ?></td>
                                    <td><?= $sk['nomor_perkara']; ?></td>
                                    <td class="hidden-phone"><?= $sk['keterangan']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <!-- page end -->
    </section>
</section>