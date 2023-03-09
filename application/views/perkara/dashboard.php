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
                            <?= $total_bht_today; ?>
                        </h1>
                        <p class="text-dark">Perkara BHT Hari Ini</p>
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
                            <?= $total_bht_this_month ?>
                        </h1>
                        <?php
                        $bulan = date('m');
                        if ($bulan == 1) {
                            echo "<p class='text-dark'>Perkara BHT Bulan Januari " . date('Y') . "</p>";
                        } elseif ($bulan == 2) {
                            echo "<p class='text-dark'>Perkara BHT Bulan Februari " . date('Y') . "</p>";
                        } elseif ($bulan == 3) {
                            echo "<p class='text-dark'>Perkara BHT Bulan Maret " . date('Y') . "</p>";
                        } elseif ($bulan == 4) {
                            echo "<p class='text-dark'>Perkara BHT Bulan April " . date('Y') . "</p>";
                        } elseif ($bulan == 5) {
                            echo "<p class='text-dark'>Perkara BHT Bulan Mei " . date('Y') . "</p>";
                        } elseif ($bulan == 6) {
                            echo "<p class='text-dark'>Perkara BHT Bulan Juni " . date('Y') . "</p>";
                        } elseif ($bulan == 7) {
                            echo "<p class='text-dark'>Perkara BHT Bulan Juli " . date('Y') . "</p>";
                        } elseif ($bulan == 8) {
                            echo "<p class='text-dark'>Perkara BHT Bulan Agustus " . date('Y') . "</p>";
                        } elseif ($bulan == 9) {
                            echo "<p class='text-dark'>Perkara BHT Bulan September " . date('Y') . "</p>";
                        } elseif ($bulan == 10) {
                            echo "<p class='text-dark'>Perkara BHT Bulan Oktober " . date('Y') . "</p>";
                        } elseif ($bulan == 11) {
                            echo "<p class='text-dark'>Perkara BHT Bulan November " . date('Y') . "</p>";
                        } elseif ($bulan == 12) {
                            echo "<p class='text-dark'>Perkara BHT Bulan Desember " . date('Y') . "</p>";
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
                            <?= $total_bht_year; ?>
                        </h1>
                        <p class="text-dark">Perkara BHT Tahun <?= date('Y'); ?></p>
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
                            <?= $total_bht; ?>
                        </h1>
                        <p class="text-dark">Jumlah Seluruh Perkara BHT</p>
                        </p>
                    </div>
                </section>
            </div>
        </div>
        <!--state overview end-->
       
        <div class="row">
            <div class="col-lg-6">
                <section class="panel text-left">
                    <header class="panel-heading bg-white text-dark text-uppercase font-weight-bold" style="letter-spacing:2px;">
                        Perkara BHT Hari ini
                    </header>
                    <table class="table table-advance table-hover">
                        <thead class="bg-primary text-white" style="letter-spacing:1.5px;">
                            <tr>
                                <th style="width:10%">#</th>
                                <th style="width:55%"> Nomor Perkara</th>
                                <th style="width:35%"> Tanggal BHT</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1;
                        if (empty($total_bht_today)) {
                            echo "<tr><td colspan='6' class='font-italic'>Tidak Ada Perkara BHT Hari Ini</td></tr>";
                        }
                        foreach ($bht_today as $bht) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $bht['nomor_perkara']; ?></td>
                                <td><?= tgl_eng_to_ind(date("d-m-Y", strtotime($bht['tanggal_bht']))); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
            </div>
   
            <div class="col-lg-6">
                <section class="panel text-left">
                    <header class="panel-heading bg-white text-dark text-uppercase font-weight-bold" style="letter-spacing:2px;">
                        <?php $bulan = date('m');
                        if ($bulan == 1) {
                            echo "Perkara BHT Bulan Januari " . $tahun = date('Y');
                        } elseif ($bulan == 2) {
                            echo "Perkara BHT Bulan Februari " . $tahun = date('Y');
                        } elseif ($bulan == 3) {
                            echo "Perkara BHT Bulan Maret " . $tahun = date('Y');
                        } elseif ($bulan == 4) {
                            echo "Perkara BHT Bulan April " . $tahun = date('Y');
                        } elseif ($bulan == 5) {
                            echo "Perkara BHT Bulan Mei " . $tahun = date('Y');
                        } elseif ($bulan == 6) {
                            echo "Perkara BHT Bulan Juni " . $tahun = date('Y');
                        } elseif ($bulan == 7) {
                            echo "Perkara BHT Bulan Juli " . $tahun = date('Y');
                        } elseif ($bulan == 8) {
                            echo "Perkara BHT Bulan Agustus " . $tahun = date('Y');
                        } elseif ($bulan == 9) {
                            echo "Perkara BHT Bulan September " . $tahun = date('Y');
                        } elseif ($bulan == 10) {
                            echo "Perkara BHT Bulan Oktober " . $tahun = date('Y');
                        } elseif ($bulan == 11) {
                            echo "Perkara BHT Bulan November " . $tahun = date('Y');
                        } elseif ($bulan == 12) {
                            echo "Perkara BHT Bulan Desember " . $tahun = date('Y');
                        }
                        ?>
                    </header>
                    <table class="table table-advance table-hover">
                        <thead class="bg-success text-white" style="letter-spacing:1.5px;">
                            <tr>
                                <th style="width:10%">#</th>
                                <th style="width:55%"> Nomor Perkara</th>
                                <th style="width:35%"> Tanggal BHT</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1;
                        foreach ($bht_this_month as $bht) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $bht['nomor_perkara']; ?></td>
                                <td><?= tgl_eng_to_ind(date("d-m-Y", strtotime($bht['tanggal_bht']))); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <section class="panel text-left">
                    <header class="panel-heading bg-white text-dark text-uppercase font-weight-bold" style="letter-spacing:2px;">
                        Perkara BHT Per Tahun
                    </header>
                    <table class="table table-advance table-hover">
                        <thead class="bg-info text-white" style="letter-spacing:1.5px;">
                            <tr>
                                <th style="width:10%"></th>
                                <th style="width:55%"> Tahun</th>
                                <th style="width:35%"> Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>2023</td>
                                <td><?= $total_bht_year; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2022</td>
                                <td><?= $total_bht_year_22; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2021</td>
                                <td><?= $total_bht_year_21; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2020</td>
                                <td><?= $total_bht_year_20; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2019</td>
                                <td><?= $total_bht_year_19; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2018</td>
                                <td><?= $total_bht_year_18; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2017</td>
                                <td><?= $total_bht_year_17; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2016</td>
                                <td><?= $total_bht_year_16; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2015</td>
                                <td><?= $total_bht_year_15; ?> Perkara</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>

            <div class="col-lg-6">
                <section class="panel text-left">
                    <header class="panel-heading bg-white text-dark text-uppercase font-weight-bold" style="letter-spacing:2px;">
                        Perkara BHT Per Bulan
                    </header>
                    <table class="table table-advance table-hover">
                        <thead class="bg-danger text-white" style="letter-spacing:1.5px;">
                            <tr>
                                <th style="width:10%"></th>
                                <th style="width:55%"> Tahun</th>
                                <th style="width:35%"> Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>Januari</td>
                                <td><?= $total_bht_month_1; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Februari</td>
                                <td><?= $total_bht_month_2; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Maret</td>
                                <td><?= $total_bht_month_3; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>April</td>
                                <td><?= $total_bht_month_4; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Mei</td>
                                <td><?= $total_bht_month_5; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Juni</td>
                                <td><?= $total_bht_month_6; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Juli</td>
                                <td><?= $total_bht_month_7; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Agustus</td>
                                <td><?= $total_bht_month_8; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>September</td>
                                <td><?= $total_bht_month_9; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Oktober</td>
                                <td><?= $total_bht_month_10; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>November</td>
                                <td><?= $total_bht_month_11; ?> Perkara</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Desember</td>
                                <td><?= $total_bht_month_12; ?> Perkara</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>

        <!-- page end -->
    </section>
</section>