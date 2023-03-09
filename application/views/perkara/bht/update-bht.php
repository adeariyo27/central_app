<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color:#F1F2F7;">
                <li class="breadcrumb-item"><a href="<?= base_url('perkara') ?>">Rekapitulasi Perkara</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('perkara/daftarBHT') ?>">Daftar File e-BHT</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update File e-BHT</li>
            </ol>
        </nav>
        <div class="col-lg-8">
            <section class="panel">
                <header class="panel-heading">
                    <?= $title; ?>
                </header>
                <div class="panel-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input hidden type="text" class="form-control" id="perkara_id" name="perkara_id" value="<?= $daftarbht['perkara_id']; ?>">
                    <div class="form-group">
                        <label for="namaLengkap">No. Perkara</label>
                        <input type="text" class="form-control" id="nomor_perkara" name="nomor_perkara" value="<?= $daftarbht['nomor_perkara']; ?>" onkeyup="this.value = this.value.toUpperCase();">
                        <?= form_error('nomor_perkara', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_bht">Tanggal BHT</label>
                        <input type="date" class="form-control" id="tanggal_bht" name="tanggal_bht" value="<?= $daftarbht['tanggal_bht']; ?>">
                        <?= form_error('tanggal_bht', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="edit_file">File e-BHT</label>
                        <div class="row">
                            <div class="col-sm-4">
                                <!-- <img src="<?= base_url('assets/bht/') . $daftarbht['file']; ?>" class="img-thumbnail"> -->
                                <?php
                                // $cek = base_url('assets/bht/') . $daftarbht['file'];
                                // var_dump($cek);
                                // die(); 
                                ?>
                                <embed src="<?= base_url('assets/bht/') . $daftarbht['file']; ?>" type="application/pdf" class="img-thumbnail"></embed>
                            </div>
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="file" name="file">
                                    <label class="custom-file-label" for="file"><?= $daftarbht['file']; ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('perkara/daftarBHT'); ?>" class="btn btn-sm btn-secondary"> Kembali</a>
                    <button type="submit" class="btn btn-sm btn-primary">Perbarui</button>
                </form>
                </div>
            </section>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->