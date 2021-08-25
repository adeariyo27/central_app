<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row mb-3">
            <div class="col-lg-6">
                <?= $this->session->flashdata('message'); ?>
                <section class="panel">
                    <header class="panel-heading">
                        <?= $title; ?>
                    </header>
                    <div class="panel-body">
                        <?php foreach ($satker as $s) : ?>
                            <?= form_open_multipart('admin/editSatker'); ?>
                            <input type="text" hidden name="id" value="<?= $s['id']; ?>">
                            <div class="form-group">
                                <label for="nama_satker">Nama Satker</label>
                                <input type="text" class="form-control" id="nama_satker" name="nama_satker" value="<?= $s['nama_satker']; ?>">
                                <small class="text-danger" style="font-style:italic"><?= form_error('nama_satker') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="alamat_satker">Alamat Satker</label>
                                <input type="text" class="form-control" id="alamat_satker" name="alamat_satker" value="<?= $s['alamat_satker']; ?>">
                                <small class="text-danger" style="font-style:italic"><?= form_error('alamat_satker') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="kota_satker">Kota Satker</label>
                                <input type="text" class="form-control" id="kota_satker" name="kota_satker" value="<?= $s['kota_satker']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="no_tlp">No. Telepon</label>
                                <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="<?= $s['no_tlp']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No. HP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $s['no_hp']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email_satker">Email Satker</label>
                                <input type="text" class="form-control" id="email_satker" name="email_satker" value="<?= $s['email_satker']; ?>">
                                <small class="text-danger" style="font-style:italic"><?= form_error('email_satker') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="situs">Situs</label>
                                <input type="text" class="form-control" id="situs" name="situs" value="<?= $s['situs']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="edit_image">Ubah Logo</label>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="<?= base_url('assets/img/profile/') . $s['logo_satker']; ?>" class="img-thumbnail">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="logo_satker" name="logo_satker">
                                            <label class="custom-file-label" for="logo_satker">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-sm btn-primary">Perbaharui </button>
                        <?php endforeach; ?>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->