<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-md-12 col-lg">
                <div class="flash-data" data-notifregiseksekusi="<?= $this->session->flashdata('message'); ?>"></div>
                <!-- <a href="<?= base_url('perkara/daftarEksekusi'); ?>" class="btn btn-primary mb-3"><i class="icon-file"></i> Daftar File Surat Permohonan Informasi</a> -->
                <a class="btn btn-info mb-3" data-toggle="modal" data-target="#cetakSeluruh" role="button" role="button"><i class="icon-print"></i> Cetak Laporan</a>
                <a class="btn btn-warning mb-3" data-toggle="modal" data-target="#cetakPeriode" role="button"><i class="icon-print"></i> Pilih Periode Cetak</a>
                <section class="panel">
                    <header class="panel-heading">
                        <?= $title; ?>
                    </header>
                    <div class="panel-body">
                        <?= form_open_multipart('perkara'); ?>
                        <div class="adv-table">
                            <table class="table table-bordered table-striped" id="tblUser">
                                <thead>
                                    <tr>
                                        <th style="width:2%">#</th>
                                        <th style="width:12%"> Nomor Perkara</th>
                                        <th style="width:12%"> Tanggal Pendaftaran</th>
                                        <th style="width:12%"> Tahapan Perkara</th>
                                        <th style="width:12%"> Tanggal Putusan</th>
                                        <th style="width:12%"> Tanggal BHT</th>
                                        <th style="width:3%"> Action Eksekusi</th>
                                        <!-- <th style="width:12%"> Status Eksekusi</th> -->
                                        <th style="width:3%"> Detail Perkara</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($perkaraeks as $r) : ?>
                                        <?php if ($r['status_putusan_banding_id'] <> '113' ) : ?>
                                            <?php if ($r['status_putusan_kasasi_id'] <> '3' ) : ?>
                                                <?php if ($r['status_putusan_pk_id'] <> '3' ) : ?>
                                                    <tr>
                                                        <th scope="row" style="width:3%"><?= $no++; ?></th>
                                                        <td><?= $r['nomor_perkara']; ?></td>
                                                        <td><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['tanggal_pendaftaran']))); ?></td>

                                                        <!-- Tahapan Perkara -->
                                                        <?php if (isset($r['tanggal_putusan']) && $r['putusan_banding'] == NULL && $r['putusan_kasasi'] == NULL && $r['putusan_pk'] == NULL) : ?>
                                                            <td class="text-success"><b>Tk. Pertama</b></td>
                                                        <?php elseif (isset($r['tanggal_putusan']) && $r['putusan_banding'] <> NULL && $r['putusan_kasasi'] == NULL && $r['putusan_pk'] == NULL) : ?>
                                                            <td class="text-primary"><b>Banding</b></td>
                                                        <?php elseif (isset($r['tanggal_putusan']) && $r['putusan_banding'] <> NULL && $r['putusan_kasasi'] <> NULL && $r['putusan_pk'] == NULL) : ?>
                                                            <td class="text-danger"><b>Kasasi</b></td>
                                                        <?php elseif (isset($r['tanggal_putusan']) && $r['putusan_banding'] <> NULL && $r['putusan_kasasi'] <> NULL && $r['putusan_pk'] <> NULL) : ?>
                                                            <td class="text-info"><b>PK</b></td>
                                                        <?php else : ?>
                                                            <td>-</td>
                                                        <?php endif; ?>

                                                        <!-- Tanggal Putusan -->
                                                        <?php if (isset($r['tanggal_putusan']) && $r['putusan_banding'] == NULL && $r['putusan_kasasi'] == NULL && $r['putusan_pk'] == NULL) : ?>
                                                            <td><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['tanggal_putusan']))); ?></td>
                                                        <?php elseif (isset($r['tanggal_putusan']) && $r['putusan_banding'] <> NULL && $r['putusan_kasasi'] == NULL && $r['putusan_pk'] == NULL) : ?>
                                                            <td><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['putusan_banding']))); ?></td>
                                                        <?php elseif (isset($r['tanggal_putusan']) && $r['putusan_banding'] <> NULL && $r['putusan_kasasi'] <> NULL && $r['putusan_pk'] == NULL) : ?>
                                                            <td><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['putusan_kasasi']))); ?></td>
                                                        <?php elseif (isset($r['tanggal_putusan']) && $r['putusan_banding'] <> NULL && $r['putusan_kasasi'] <> NULL && $r['putusan_pk'] <> NULL) : ?>
                                                            <td><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['putusan_pk']))); ?></td>
                                                        <?php else : ?>
                                                            <td>-</td>
                                                        <?php endif; ?>

                                                        <!-- Tanggal BHT -->
                                                        <?php if (isset($r['tanggal_bht'])) : ?>
                                                            <td><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['tanggal_bht']))); ?></td>
                                                        <?php else : ?>
                                                            <td>-</td>
                                                        <?php endif; ?>
                                                        
                                                        <!-- Aksi Eksekusi -->
                                                        <td>
                                                            <a href="<?= base_url('perkara/uploadEksekusi/') . $r['perkara_id']; ?>" class="badge badge-info justify-content-center px-2" title="Tambah"><i class="icon-plus-sign"></i></a>
                                                            <a href="<?= base_url('perkara/updateEksekusi/') . $r['perkara_id']; ?>" class="badge badge-info justify-content-center px-2" title="Ubah"><i class="icon-edit"></i></a>
                                                        </td>

                                                        <!-- Status Eksekusi -->
                                                        <!-- <?php foreach ($perkara_eks as $s) : ?>
                                                            <?php if ($s['perkara_id'] <> NULL && $s['nomor_perkara'] <> NULL && $s['status_eksekusi'] <> NULL && $s['file'] <> NULL) : ?>
                                                                <td class="text-danger font-weight-bold"><?= $s['status_eksekusi']; ?></td>
                                                            <?php elseif ($s['perkara_id'] == NULL && $s['nomor_perkara'] == NULL && $s['status_eksekusi'] == NULL && $s['file'] == NULL) : ?>
                                                                <td class="text-danger font-weight-bold">Belum disurati</td>
                                                            <?php else : ?>
                                                                <td class="text-danger font-weight-bold">-</td>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?> -->

                                                        <!-- Detail Perkara -->
                                                        <td>
                                                            <a href="<?= base_url('perkara/detailPerkara/') . $r['perkara_id']; ?>" class="badge badge-primary px-2"><i class=" icon-eye-open"></i></a>
                                                        </td>

                                                    </tr>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
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
            <form action="<?= base_url('perkara/cetak'); ?>" method="POST">
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
            <form action="<?= base_url('perkara/cetakperiode'); ?>" method="POST">
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