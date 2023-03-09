<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <!--state overview start-->
        <div class="row state-overview">
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol terques">
                        <i class="icon-bar-chart"></i>
                    </div>
                    <div class="value">
                        <h1 class="count text-dark">
                            <?= $total_responden_ikm; ?>
                        </h1>
                        <p class="text-dark">Total Responden IKM</p>
                    </div>
                </section>
            </div>
            <div class="col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol red">
                        <i class="icon-bar-chart"></i>
                    </div>
                    <div class="value">
                        <h1 class="text-dark count2">
                            <?= $total_responden_ipk; ?>
                        </h1>
                        <p class="text-dark">Total Responden IPK</p>
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
                            <?php foreach ($responden_ikm_bulan as $r) : ?>
                                <?= $r['total']; ?>
                            <?php endforeach; ?>
                        </h1>
                        <?php
                        $bulan = date('m');
                        if ($bulan == 1) {
                            echo "<p class='text-dark'>Responden IKM Januari</p>";
                        } elseif ($bulan == 2) {
                            echo "<p class='text-dark'>Responden IKM Februari</p>";
                        } elseif ($bulan == 3) {
                            echo "<p class='text-dark'>Responden IKM Maret</p>";
                        } elseif ($bulan == 4) {
                            echo "<p class='text-dark'>Responden IKM April</p>";
                        } elseif ($bulan == 5) {
                            echo "<p class='text-dark'>Responden IKM Mei</p>";
                        } elseif ($bulan == 6) {
                            echo "<p class='text-dark'>Responden IKM Juni</p>";
                        } elseif ($bulan == 7) {
                            echo "<p class='text-dark'>Responden IKM Juli</p>";
                        } elseif ($bulan == 8) {
                            echo "<p class='text-dark'>Responden IKM Agustus</p>";
                        } elseif ($bulan == 9) {
                            echo "<p class='text-dark'>Responden IKM September</p>";
                        } elseif ($bulan == 10) {
                            echo "<p class='text-dark'>Responden IKM Oktober</p>";
                        } elseif ($bulan == 11) {
                            echo "<p class='text-dark'>Responden IKM November</p>";
                        } elseif ($bulan == 12) {
                            echo "<p class='text-dark'>Responden IKM Desember</p>";
                        }
                        ?>
                    </div>
                </section>
            </div>
            <div class=" col-lg-3 col-sm-6">
                <section class="panel">
                    <div class="symbol yellow">
                        <i class="icon-th"></i>
                    </div>
                    <div class="value">
                        <h1 class="text-dark count4">
                            <?php foreach ($responden_ipk_bulan as $r) : ?>
                                <?= $r['total']; ?>
                            <?php endforeach; ?>
                        </h1>
                        <?php
                        $bulan = date('m');
                        if ($bulan == 1) {
                            echo "<p class='text-dark'>Responden IPK Januari</p>";
                        } elseif ($bulan == 2) {
                            echo "<p class='text-dark'>Responden IPK Februari</p>";
                        } elseif ($bulan == 3) {
                            echo "<p class='text-dark'>Responden IPK Maret</p>";
                        } elseif ($bulan == 4) {
                            echo "<p class='text-dark'>Responden IPK April</p>";
                        } elseif ($bulan == 5) {
                            echo "<p class='text-dark'>Responden IPK Mei</p>";
                        } elseif ($bulan == 6) {
                            echo "<p class='text-dark'>Responden IPK Juni</p>";
                        } elseif ($bulan == 7) {
                            echo "<p class='text-dark'>Responden IPK Juli</p>";
                        } elseif ($bulan == 8) {
                            echo "<p class='text-dark'>Responden IPK Agustus</p>";
                        } elseif ($bulan == 9) {
                            echo "<p class='text-dark'>Responden IPK September</p>";
                        } elseif ($bulan == 10) {
                            echo "<p class='text-dark'>Responden IPK Oktober</p>";
                        } elseif ($bulan == 11) {
                            echo "<p class='text-dark'>Responden IPK November</p>";
                        } elseif ($bulan == 12) {
                            echo "<p class='text-dark'>Responden IPK Desember</p>";
                        }
                        ?>
                    </div>
                </section>
            </div>
        </div>
        <!--state overview end-->
        <!-- page end -->
    </section>
</section>