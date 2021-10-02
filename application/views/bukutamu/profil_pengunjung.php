<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-md-12 col-lg">
                <div class="flash-data" data-notifprofilpengunjung="<?= $this->session->flashdata('message'); ?>"></div>
                <a class="btn btn-info mb-3" data-toggle="modal" data-target="#cetakSeluruh" role="button" role="button"><i class="icon-print"></i> Cetak Laporan</a>
                <a class="btn btn-warning mb-3" data-toggle="modal" data-target="#cetakPeriode" role="button"><i class="icon-print"></i> Pilih Periode Cetak</a>
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
                                        <th> Nomor Identitas</th>
                                        <th> Nama</th>
                                        <th> Tanggal Lahir</th>
                                        <th> No. Tlp</th>
                                        <th> Jenis Kelamin</th>
                                        <th> Alamat</th>
                                        <th> Pekerjaan</th>
                                        <th> Tanggal Register</th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($profilpengunjung as $pp) : ?>
                                        <tr>
                                            <th scope="row"><?= $no++; ?></th>
                                            <td><?= $pp['no_id']; ?></td>
                                            <td><?= $pp['nama']; ?></td>
                                            <td><?= tgl_eng_to_ind(date("d-m-Y", strtotime($pp['tgl_lahir']))); ?></td>
                                            <td><?= $pp['no_tlp']; ?></td>
                                            <td><?= $pp['jenis_kelamin']; ?></td>
                                            <td><?= $pp['alamat']; ?></td>
                                            <td><?= $pp['pekerjaan']; ?></td>
                                            <td><?= tgl_eng_to_ind(date("d-m-Y, H:i", strtotime($pp['tanggal']))); ?></td>
                                            <td>
                                                <a href="<?= base_url('bukutamu/editprofilpengunjung/') . $pp['no_id']; ?>" class="badge badge-primary"><i class="icon-pencil"></i></a>
                                                <a href="<?= base_url('bukutamu/deleteprofilpengunjung/') . $pp['no_id']; ?>" class="badge badge-danger tblHapusProfilpengunjung"><i class=" icon-trash"></i></a>
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
    </section>
</section>
<!--main content end-->

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
            <form action="<?= base_url('bukutamu/cetak'); ?>" method="POST">
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
                    <button disabled id="btnSubmit" formtarget="_blank" type="submit" class="btn btn-sm btn-primary">Cetak
                    </button>
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
            <form action="<?= base_url('bukutamu/cetakperiode'); ?>" method="POST">
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