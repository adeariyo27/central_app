<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-md-12 col-lg">
                <div class="flash-data" data-notifregiskuasa="<?= $this->session->flashdata('message'); ?>"></div>
                <a class="btn btn-info mb-3" data-toggle="modal" data-target="#cetakSeluruh" role="button" role="button"><i class="icon-print"></i> Cetak Laporan</a>
                <a class="btn btn-warning mb-3" data-toggle="modal" data-target="#cetakPeriode" role="button"><i class="icon-print"></i> Pilih Periode Cetak</a>
                <section class="panel">
                    <header class="panel-heading">
                        <?= $title; ?>
                    </header>
                    <div class="panel-body">
                        <?= form_open_multipart('perkara'); ?>
                        <div class="adv-table">
                            <span class="btn btn-sm btn-outline-success mr-2"><i class="icon-file mr-2"></i> <b><?= ($perkara_count['jumlahDikabulkan']) ?></b> Perkara Dikabulkan</span>
                            <span class="btn btn-sm btn-outline-danger mr-2"><i class="icon-file mr-2"></i> <b><?= ($perkara_count['jumlahDitolak']) ?></b> Perkara Ditolak</span>
                            <span class="btn btn-sm btn-outline-warning mr-2"><i class="icon-file mr-2"></i> <b><?= ($perkara_count['jumlahNO']) ?></b> Perkara Tidak Diterima</span>
                            <span class="btn btn-sm btn-outline-primary mr-2"><i class="icon-file mr-2"></i> <b><?= ($perkara_count['jumlahDicabut']) ?></b> Perkara Dicabut</span>
                            <span class="btn btn-sm btn-outline-secondary mr-2"><i class="icon-file mr-2"></i> <b><?= ($perkara_count['jumlahTidakBerwenang']) ?></b> Perkara Tidak Berwenang</span>
                            <table class="table table-bordered table-striped" id="tblUser">
                                <thead>
                                    <tr>
                                        <th style="width:2%">#</th>
                                        <th style="width:12%"> Nomor Perkara</th>
                                        <th style="width:13%"> Tanggal Pendaftaran</th>
                                        <th style="width:13%"> Tanggal Putusan Tk. Pertama</th>
                                        <th style="width:13%"> Tanggal Putusan Tk. Banding</th>
                                        <th style="width:13%"> Tanggal Putusan Tk. Kasasi</th>
                                        <th style="width:13%"> Tanggal Putusan Tk. PK</th>
                                        <th style="width:13%"> Status Putusan Tk. Pertama</th>
                                        <th style="width:1%"> Detail Perkara</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($perkara as $r) : ?>
                                        <tr>
                                            <th scope="row" style="width:3%"><?= $no++; ?></th>
                                            <td><?= $r['nomor_perkara']; ?></td>
                                            <td><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['tanggal_pendaftaran']))); ?></td>
                                            <td><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['tanggal_putusan']))); ?></td>

                                            <!-- Banding -->
                                            <?php if (isset($r['putusan_banding'])) : ?>
                                                <td><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['putusan_banding']))); ?></td>
                                            <?php elseif (isset($r['tanggal_bht'])) : ?>
                                                <td class="text-muted"><i>Tidak Banding</i></td>
                                            <?php elseif (isset($r['permohonan_banding'])) : ?>
                                                <td class="text-success"><i>Proses Banding</i></td>
                                            <?php else : ?>
                                                <td>-</td>
                                            <?php endif; ?>
                                            
                                            <!-- Kasasi -->
                                            <?php if (isset($r['putusan_kasasi'])) : ?>
                                                <td><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['putusan_kasasi']))); ?></td>
                                            <?php elseif (isset($r['tanggal_bht'])) : ?>
                                                <td class="text-muted"><i>Tidak Kasasi</i></td>
                                            <?php elseif (isset($r['permohonan_kasasi'])) : ?>
                                                <td class="text-success"><i>Proses Kasasi</i></td>
                                            <?php else : ?>
                                                <td>-</td>
                                            <?php endif; ?>

                                            <!-- PK -->
                                            <?php if (isset($r['putusan_pk'])) : ?>
                                                <td><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['putusan_pk']))); ?></td>
                                            <?php elseif (isset($r['permohonan_pk']) && $r['tanggal_bht'] <> NULL) : ?>
                                                <td class="text-success"><i>Proses PK</i></td>
                                            <?php else : ?>
                                                <td>-</td>
                                            <?php endif; ?>

                                            <?php if ($r['status_putusan_id'] == '34' ) : ?>
                                                <td class="text-success"><strong>Dikabulkan</strong></td>
                                            <?php elseif ($r['status_putusan_id'] == '35' ) : ?>
                                                <td class="text-danger"><strong>Ditolak</strong></td>
                                            <?php elseif ($r['status_putusan_id'] == '36' ) : ?>
                                                <td class="text-warning"><strong>Tidak Diterima</strong></td>
                                            <?php elseif ($r['status_putusan_id'] == '37' || $r['status_putusan_id'] == '7' ) : ?>
                                                <td class="text-primary"><strong>Dicabut</strong></td>
                                            <?php elseif ($r['status_putusan_id'] == '7' || $r['status_putusan_id'] == '7' ) : ?>
                                                <td class="text-primary"><strong>Dicabut</strong></td>
                                            <?php elseif ($r['status_putusan_id'] == '81' ) : ?>
                                                <td class="text-muted"><strong>Tidak Berwenang</strong></td>
                                            <?php else : ?>
                                                <td class="text-secondary"><strong>Tidak Lolos Dismissal</strong></td>
                                            <?php endif; ?>
                                            <td>
                                                <a href="<?= base_url('perkara/detailPerkara/') . $r['perkara_id']; ?>" class="badge badge-primary px-2"><i class=" icon-eye-open"></i></a>
                                            </td>
                                        </tr>
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