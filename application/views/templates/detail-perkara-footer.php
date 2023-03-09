                            </div>
                            <a href="<?= base_url('perkara'); ?>" class="btn btn-sm btn-secondary mb-3" style="margin-top:-10px"> Kembali</a>
                        </div>
                </section>
            </div>
        </div>
     
   <!-- page end-->
   </section>
</section>
<!--main content end-->

 <!-- <h5 class="card-title"><button class="btn btn-block btn-primary" href="#">Rp. <?= number_format($perkara['jumlah'], 0, ',', '.'); ?></button></h5> -->

 <!-- Modal Jadwal Persidangan -->
<div class="modal fade" id="detailPersidangan" tabindex="-1" aria-labelledby="detailPersidangan" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="detailPersidangan">Jadwal Sidang Perkara <?= $perkara['nomor_perkara']; ?></h5>
                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="panel-body">
                <div class="modal-body">
                    <div class="form-group">
                        <?php foreach ($perkara_sidang as $v) : ?>
                            <div class="form-row">
                                <div class="col">
                                    <label for="nomor_perkara"><strong>Persidangan Ke-<?= $v['urutan']; ?></strong></label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($v['tanggal_sidang']))); ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><?= substr_replace($v['jam_sidang'] ,"",-3); ?> s.d. <?=substr_replace($v['sampai_jam'] ,"",-3); ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><?= strtoupper($v['ruangan']); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mt-1 mb-3">
                                <div class="col">
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item text-center"><?= strtoupper($v['agenda']); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Jadwal Persiapan -->
<div class="modal fade" id="detailPersiapan" tabindex="-1" aria-labelledby="detailPersiapan" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="detailPersiapan">Jadwal Pemeriksaan Persiapan Perkara <?= $perkara['nomor_perkara']; ?></h5>
                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="panel-body">
                <div class="modal-body">
                    <div class="form-group">
                        <?php foreach ($perkara_persiapan_jadwal as $v) : ?>
                            <div class="form-row">
                                <div class="col">
                                    <label for="nomor_perkara"><strong>Pemeriksaan Persiapan Ke-<?= $v['urutan_persiapan']; ?></strong></label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($v['tanggal_persiapan']))); ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><?= substr_replace($v['jam_persiapan'] ,"",-3); ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">RUANG PEMERIKSAAN PERSIAPAN</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mt-1 mb-3">
                                <div class="col">
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item text-center"><?= strtoupper($v['agenda_persiapan']); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Amar Putusan -->
<div class="modal fade" id="detailPutusan" tabindex="-1" aria-labelledby="detailPutusan" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="detailPutusan">Amar Putusan Perkara No <?= $perkara['nomor_perkara']; ?></h5>
                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="panel-body">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <div class="card p-3">
                                    <?= $perkara['amar_putusan']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Court Calendar -->
<div class="modal fade" id="detailCourtCalendar" tabindex="-1" aria-labelledby="detailCourtCalendar" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="detailCourtCalendar">Court Calendar Perkara <?= $perkara['nomor_perkara']; ?></h5>
                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="panel-body">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-1">
                                <label for="nomor_perkara"><strong>No.</strong></label>
                            </div>
                            <div class="col-3">
                                <label for="nomor_perkara"><strong>Tanggal</strong></label>
                            </div>
                            <div class="col-2">
                                <label for="nomor_perkara"><strong>Pukul</strong></label>
                            </div>
                            <div class="col-6">
                                <label for="nomor_perkara"><strong>Agenda</strong></label>
                            </div>
                        </div>
                        <?php $no = 1; ?>
                        <?php foreach ($court_calendar as $v) : ?>
                            <div class="form-row mb-1">
                                <div class="col-0.1">
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item" style="font-size:13px"><?= $no++; ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item" style="font-size:13px"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($v['rencana_tanggal']))); ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item" style="font-size:13px"><?= substr_replace($v['rencana_jam'] ,"",-3); ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item" style="font-size:13px"><?= $v['rencana_agenda']; ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Amar Putusan Banding-->
<div class="modal fade" id="detailPutusanBanding" tabindex="-1" aria-labelledby="detailPutusanBanding" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="detailPutusanBanding">Amar Putusan Banding No <?= $perkara['nomor_perkara_banding']; ?></h5>
                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="panel-body">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <div class="card p-3">
                                    <?= $perkara['amar_putusan_banding']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Amar Putusan Kasasi-->
<div class="modal fade" id="detailPutusanKasasi" tabindex="-1" aria-labelledby="detailPutusanKasasi" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="detailPutusanKasasi">Amar Putusan Kasasi No <?= $perkara['nomor_perkara_kasasi']; ?></h5>
                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="panel-body">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <div class="card p-3">
                                    <?= $perkara['amar_putusan_kasasi']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Amar Putusan pk-->
<div class="modal fade" id="detailPutusanPK" tabindex="-1" aria-labelledby="detailPutusanPK" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="detailPutusanPK">Amar Putusan PK No <?= $perkara['nomor_perkara_pk']; ?></h5>
                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="panel-body">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <div class="card p-3">
                                    <?= $perkara['amar_putusan_pk']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>