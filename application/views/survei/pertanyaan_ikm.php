<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-md-12 col-lg">
                <div class="flash-data" data-notifpertanyaanikm="<?= $this->session->flashdata('message'); ?>"></div>
                <a class="btn btn-primary mb-3" hidden data-toggle="modal" data-target="#newPertanyaan" role="button"><i class="icon-plus-sign-alt"></i> Tambah Pertanyaan Baru</a>
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
                                        <th> Pertanyaan</th>
                                        <th> Ketegori</th>
                                        <th> Jenis Survei</th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($pertanyaan as $p) : ?>
                                        <tr>
                                            <th scope="row"><?= $no++; ?></th>
                                            <td><?= $p['pertanyaan']; ?></td>
                                            <td><?= $p['kategori']; ?></td>
                                            <td><?= $p['jenis_survei']; ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('survei/pertanyaan_ikm/') . $p['id']; ?>" class="badge badge-primary"><i class="icon-pencil"></i></a>
                                                <a href="<?= base_url('surveipertanyaan_ikm/') . $p['id']; ?>" class="badge badge-danger tblHapusRegisKuasa"><i class=" icon-trash"></i></a>
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

<!-- Modal New Regis -->
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
                                <input type="text" class="form-control" id="nomor_regiskuasa" name="nomor_regiskuasa" value="/Daft.SK/<?= date("Y"); ?>/PTUN.PL" focus>
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
                                <label for="tgl_suratkuasa">Tanggal Surat Kuasa</label>
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

<!-- Modal New Pertanyaan -->
<div class="modal fade" id="newPertanyaan" tabindex="-1" aria-labelledby="newPertanyaan" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="newPertanyaan">Tambah Pertanyaan Baru</h5>
                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('survei/pertanyaan_ikm'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="pertanyaan">Pertanyaan</label>
                                <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" focus>
                            </div>
                            <div class="col">
                                <label for="name_attr">Name Attribut</label>
                                <input type="text" class="form-control" id="name_attr" name="name_attr">
                                <small class="text-danger font-italic">*Isian tidak boleh terdapat karakter spasi, pisahkan suku kata dengan _ (Underscore)</small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="kategori">Ketegori</label>
                                <input type="text" class="form-control" id="kategori" name="kategori">
                            </div>
                            <div class="col">
                                <label for="jenis_survei">Jenis Survei</label>
                                <select name="jenis_survei" id="jenis_survei" class="form-control">
                                    <option value="" class="font-italic text-muted"> - Pilih Jenis Survei - </option>
                                    <option value="ikm">IKM</option>
                                    <option value="ipk">IPK</option>
                                </select>
                            </div>
                        </div>
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

<!-- Modal Cerak Seluruh -->
<div class="modal fade" id="cetakSeluruh" tabindex="-1" aria-labelledby="cetakSeluruh" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="cetakSeluruh">Penandatangan</h5>
                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('hukum/cetak'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <select name="penandatangan" id="penandatangan" class="form-control">
                                    <option value="" class="font-italic text-muted"> - Pilih Penandatangan - </option>
                                    <?php foreach ($penandatangan as $p) : ?>
                                        <option value="<?= $p['name'] ?>"><?= $p['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                    <button disabled id="btnSubmit" formtarget="_blank" type="submit" class="btn btn-sm btn-primary">Cetak</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Pilih Periode -->
<div class="modal fade" id="cetakPeriode" tabindex="-1" aria-labelledby="cetakPeriode" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="cetakPeriode">Pilih Periode Cetak Laporan</h5>
                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('hukum/cetakperiode'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="from_date">Dari Tanggal</label>
                                <input type="date" class="form-control" id="from_date" name="from_date">
                            </div>
                            <div class="col">
                                <label for="until_date">Sampai Tanggal</label>
                                <input type="date" class="form-control" id="until_date" name="until_date">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <select name="penandatangan" id="penandatanganperiode" class="form-control">
                                    <option value="" class="font-italic text-muted"> - Pilih Penandatangan - </option>
                                    <?php foreach ($penandatangan as $p) : ?>
                                        <option value="<?= $p['name'] ?>"><?= $p['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                    <button disabled id="btnSubmitPeriode" formtarget="_blank" type="submit" class="btn btn-sm btn-primary">Cetak</button>
                </div>
            </form>
        </div>
    </div>
</div>