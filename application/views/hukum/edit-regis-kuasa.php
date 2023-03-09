<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color:#F1F2F7;">
                <li class="breadcrumb-item"><a href="<?= base_url('hukum') ?>">Register Surat Kuasa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Surat Kuasa</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 col-lg">
                <div class="flash-data" data-notifregiskuasa="<?= $this->session->flashdata('message'); ?>"></div>
                <section class="panel">
                    <header class="panel-heading">
                        <?= $title; ?>
                    </header>
                    <div class="panel-body">
                        <form action="" method="POST">
                            <div class="modal-body">
                                <input hidden type="text" class="form-control" id="id" name="id" value="<?= $regiskuasa['id']; ?>">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="nomor_perkara">Nomor Register Kuasa</label>
                                            <input type="text" class="form-control" id="nomor_regiskuasa" name="nomor_regiskuasa" value="<?= $regiskuasa['nomor_regiskuasa'] ?>">
                                        </div>
                                        <div class="col">
                                            <label for="tgl_regiskuasa">Tanggal Register Kuasa</label>
                                            <input type="date" class="form-control" id="tgl_regiskuasa" name="tgl_regiskuasa" value="<?= $regiskuasa['tgl_regiskuasa'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="nomor_suratkuasa">Nomor Surat Kuasa</label>
                                            <input type="text" class="form-control" id="nomor_suratkuasa" name="nomor_suratkuasa" value="<?= $regiskuasa['nomor_suratkuasa'] ?>">
                                        </div>
                                        <div class="col">
                                            <label for="tgl_suratkuasa">Tanggal Register Kuasa</label>
                                            <input type="date" class="form-control" id="tgl_suratkuasa" name="tgl_suratkuasa" value="<?= $regiskuasa['tgl_suratkuasa'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama_pemberikuasa">Nama Pemberi Kuasa</label>
                                    <input type="text" class="form-control" id="nama_pemberikuasa" name="nama_pemberikuasa" value="<?= $regiskuasa['nama_pemberikuasa'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="nama_penerimakuasa">Nama Penerima Kuasa</label>
                                    <input type="text" class="form-control" id="nama_penerimakuasa" name="nama_penerimakuasa" value="<?= $regiskuasa['nama_penerimakuasa'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="nomor_perkara">Nomor Perkara</label>
                                    <input type="text" class="form-control" id="nomor_perkara" name="nomor_perkara" value="<?= $regiskuasa['nomor_perkara'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $regiskuasa['keterangan'] ?>">
                                </div>
                            </div>
                            <a href="<?= base_url('hukum'); ?>" class="btn btn-sm btn-secondary"> Kembali</a>
                            <button type="submit" class="btn btn-sm btn-primary">Perbaharui</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->