<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color:#F1F2F7;">
                <li class="breadcrumb-item"><a href="<?= base_url('perkara/perkaraBHT') ?>">Perkara BHT</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('perkara/daftarBHT') ?>">Daftar File e-BHT</a></li>
                <li class="breadcrumb-item active" aria-current="page">Upload File e-BHT</li>
            </ol>
        </nav>
        <div class="col-lg-8">
            <section class="panel">
                <header class="panel-heading">
                    <?= $title; ?>
                </header>
                <div class="panel-body">
                    <?= form_open_multipart('perkara/uploadBHT'); ?>
                    <div class="form-group">
                        <label for="nomor_perkara">No. Perkara</label>
                        <input type="text" class="form-control" id="nomor_perkara" name="nomor_perkara" onkeyup="this.value = this.value.toUpperCase();">
                        <?= form_error('nomor_perkara', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_bht">Tanggal BHT</label>
                        <input type="date" class="form-control" id="tanggal_bht" name="tanggal_bht">
                        <?= form_error('tanggal_bht', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="edit_file">File e-BHT</label>
                        <div class="row">
                            <!-- <div class="col-sm-4">
                                <img src="<?= base_url('assets/bht/') . $bht['file']; ?>" class="img-thumbnail">
                            </div> -->
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="file" name="file">
                                    <label class="custom-file-label" for="file">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('perkara/daftarBHT'); ?>" class="btn btn-sm btn-secondary"> Kembali</a>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
            </section>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->