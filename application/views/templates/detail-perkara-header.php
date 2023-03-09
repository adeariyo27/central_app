<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color:#F1F2F7;">
                <li class="breadcrumb-item"><a href="<?= base_url('perkara') ?>">Rekapitulasi Perkara</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Perkara</li>
            </ol>
        </nav>
            <!--main content start-->
            <div class="row">
            <div class="col-md-12 col-lg">
                <section class="panel">
                    <header class="panel-heading">
                    <?php if (isset($perkara['tanggal_bht'])) : ?>
                        <strong><?= $title; ?> <?= $perkara['nomor_perkara'] ?></strong> <span class="btn btn-sm btn-outline-success ml-2" href="#">Sudah BHT</span>
                    <?php else : ?>
                        <strong><?= $title; ?> <?= $perkara['nomor_perkara'] ?></strong> <span class="btn btn-sm btn-outline-danger ml-2" href="#">Belum BHT</span>
                    <?php endif; ?>
                    </header>
                        <div class="panel-body">
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-4">
                                            <label for="nomor_perkara"><strong>TAHAPAN PERKARA</strong></label>
                                            <div class="card">
                                                <div class="card-body pb-2">
                                                    <h5 class="card-title"><i class="btn btn-block btn-primary" href="#"><?= $perkara['tahapan_terakhir_text'] ?></i></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <label for="nomor_perkara"><strong>PROSES PERKARA</strong></label>
                                            <div class="card">
                                                <div class="card-body pb-2">
                                                    <?php if ($perkara['proses_terakhir_id'] == '374') : ?>
                                                        <h5 class="card-title"><i class="btn btn-block btn-primary" href="#">Perkara Banding Terdaftar</i></h5>
                                                    <?php else : ?>
                                                        <h5 class="card-title"><i class="btn btn-block btn-primary" href="#"><?= $perkara['proses_terakhir_text'] ?></i></h5>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <label for="nomor_perkara"><strong>TANGGAL BHT</strong></label>
                                            <div class="card">
                                                <div class="card-body pb-2">
                                                <?php if (isset($perkara['tanggal_bht'])) : ?>
                                                    <h5 class="card-title"><i class="btn btn-block btn-primary" href="#"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($perkara['tanggal_bht']))); ?></i></h5>
                                                <?php else : ?>
                                                    <h5 class="card-title"><i class="btn btn-block btn-danger" href="#">Belum BHT</i></h5>
                                                <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>