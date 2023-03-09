<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color:#F1F2F7;">
                <li class="breadcrumb-item"><a href="<?= base_url('perkara/perkaraEksekusi') ?>">Perkara Eksekusi Sukarela</a></li>
                <li class="breadcrumb-item active" aria-current="page">Status Perkara Eksekusi Sukarela</li>
            </ol>
        </nav>
        <div class="col-lg-8">
            <section class="panel">
                <header class="panel-heading">
                    <?= $title; ?>
                </header>
                <div class="panel-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input hidden type="text" class="form-control" id="perkara_id" name="perkara_id" value="<?= $perkara['perkara_id']; ?>">
                    <div class="form-group">
                        <label for="nomor_perkara">No. Perkara</label>
                        <input type="text" class="form-control" id="nomor_perkara" name="nomor_perkara" value="<?= $perkara['nomor_perkara']; ?>" readonly onkeyup="this.value = this.value.toUpperCase();">
                        <?= form_error('nomor_perkara', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_surat">Tanggal Surat Permohonan Informasi Eksekusi Sukarela</label>
                        <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" value="<?= set_value('tanggal_surat'); ?>">
                        <?= form_error('tanggal_surat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="status_eksekusi">Status Eksekusi</label>
                        <select name="status_eksekusi" id="status_eksekusi" class="form-control">
                            <?php foreach ($status_eks as $s) : ?>
                                <option value="<?= $s['status'] ?>"><?= $s['status'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('status_eksekusi', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="file">File Surat Permohonan Informasi Eksekusi Sukarela</label>
                        <div class="row">
                            <!-- <div class="col-sm-4">
                                <img src="<?= base_url('assets/surat/') . $bht['file']; ?>" class="img-thumbnail">
                            </div> -->
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="file" name="file">
                                    <label class="custom-file-label" for="file">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <?= form_error('file', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <a href="<?= base_url('perkara/perkaraEksekusi'); ?>" class="btn btn-sm btn-secondary"> Kembali</a>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </form>
                </div>
            </section>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->

