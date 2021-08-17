<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-md-12 col-lg">
                <div class="flash-data" data-notifregiskuasa="<?= $this->session->flashdata('message'); ?>"></div>
                <a class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRegisKuasa" role="button"><i class="icon-plus-sign-alt"></i> Register Kuasa Baru</a>
                <section class="panel">
                    <header class="panel-heading">
                        <?= $title; ?>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <table class="table table-bordered table-striped" id="tblUser">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> Nomor Register Kuasa</th>
                                        <th> Tanggal Register Kuasa</th>
                                        <th> Nomor Surat Kuasa</th>
                                        <th> Tanggal Surat Kuasa</th>
                                        <th> Nama Pemberi Kuasa</th>
                                        <th> Nama Penerima Kuasa</th>
                                        <th> Nomor Perkara</th>
                                        <th> Keterangan</th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($regiskuasa as $r) : ?>
                                        <tr>
                                            <th scope="row"><?= $no++; ?></th>
                                            <td><?= $r['nomor_regiskuasa']; ?></td>
                                            <td><?= $r['tgl_regiskuasa']; ?></td>
                                            <td><?= $r['nomor_suratkuasa']; ?></td>
                                            <td><?= $r['tgl_suratkuasa']; ?></td>
                                            <td><?= $r['nama_pemberikuasa']; ?></td>
                                            <td><?= $r['nama_penerimakuasa']; ?></td>
                                            <td><?= $r['nomor_perkara']; ?></td>
                                            <td><?= $r['keterangan']; ?></td>
                                            <td>
                                                <a href="<?= base_url('hukum/editregiskuasa/') . $r['id']; ?>" class="badge badge-primary"><i class="icon-pencil"></i> </a>
                                                <a href="<?= base_url('hukum/deleteregiskuasa/') . $r['id']; ?>" class="badge badge-danger tblHapusRegisKuasa"><i class=" icon-trash"></i> </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->

<!-- Modal -->
<div class="modal fade" id="newRegisKuasa" tabindex="-1" aria-labelledby="newRegisKuasa" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="newRegisKuasa">Register Kuasa Baru</h5>
                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('hukum'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="nomor_regiskuasa">Nomor Register Kuasa</label>
                                <input type="text" class="form-control" id="nomor_regiskuasa" name="nomor_regiskuasa" value="/DAFT.SK/<?= date("Y"); ?>/PTUN.PL" focus>
                            </div>
                            <div class="col">
                                <label for="tgl_regiskuasa">Tanggal Register Kuasa</label>
                                <input type="date" class="form-control" id="tgl_regiskuasa" name="tgl_regiskuasa">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="nomor_suratkuasa">Nomor Surat Kuasa</label>
                                <input type="text" class="form-control" id="nomor_suratkuasa" name="nomor_suratkuasa">
                            </div>
                            <div class="col">
                                <label for="tgl_suratkuasa">Tanggal Register Kuasa</label>
                                <input type="date" class="form-control" id="tgl_suratkuasa" name="tgl_suratkuasa">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_pemberikuasa">Nama Pemberi Kuasa</label>
                        <input type="text" class="form-control" id="nama_pemberikuasa" name="nama_pemberikuasa">
                    </div>
                    <div class="form-group">
                        <label for="nama_penerimakuasa">Nama Penerima Kuasa</label>
                        <input type="text" class="form-control" id="nama_penerimakuasa" name="nama_penerimakuasa">
                    </div>
                    <div class="form-group">
                        <label for="nomor_perkara">Nomor Perkara</label>
                        <input type="text" class="form-control" id="nomor_perkara" name="nomor_perkara">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>