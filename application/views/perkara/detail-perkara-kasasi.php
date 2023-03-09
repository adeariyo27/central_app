                                <!-- KASASI -->
                                <div class="form-group">
                                    <div class="form-row">

                                        <?php if (isset($perkara['permohonan_kasasi'])) : ?>
                                        <div class="col">
                                            <label for="nomor_perkara"><strong>TINGKAT KASASI</strong></label>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <p class="card-title"><span class="btn btn-block btn-info" style="font-size:14px" href="#">Pemohon Kasasi</span></p>
                                                            <?php foreach ($perkara_kasasi as $pk) : ?>
                                                                <?php if ($pk['status_pihak_id'] == '1') : ?>
                                                                    <p class="card-text"><?= strtoupper($pk['pihak_nama']) ?></p>
                                                                    <p class="font-italic text-primary" style="margin-top:-20px">(<?= $pk['pihak_asal_text'] ?>)</p>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <div class="col">
                                                            <p class="card-title"><span class="btn btn-block btn-info" style="font-size:14px" href="#">Termohon Kasasi</span></p>
                                                            <?php foreach ($perkara_kasasi as $pk) : ?>
                                                                <?php if ($pk['status_pihak_id'] == '4' OR $pk['status_pihak_id'] == '3') : ?>
                                                                    <p class="card-text"><?= strtoupper($pk['pihak_nama']) ?></p>
                                                                    <p class="font-italic text-primary" style="margin-top:-20px">(<?= $pk['pihak_asal_text'] ?>)</p>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Permohonan Kasasi</li>
                                                        </div>
                                                        <div class="col-4">
                                                            <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($perkara['permohonan_kasasi']))); ?></li>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Penerimaan Memori Kasasi</li>
                                                        </div>
                                                        <div class="col-4">
                                                        <?php foreach ($perkara_kasasi as $pk) : ?>
                                                            <?php if ($pk['status_pihak_id'] == '1') : ?>
                                                                <?php if (isset($pk['memori'])) : ?>
                                                                    <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($pk['memori']))); ?></li>
                                                                <?php else : ?>
                                                                    <li class="list-group-item border-0 font-italic text-danger" style="font-size:12px;">Tidak Ada</li>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Pemberitahuan Memori Kasasi</li>
                                                        </div>
                                                        <div class="col-4">
                                                        <?php foreach ($perkara_kasasi as $pk) : ?>
                                                            <?php if ($pk['status_pihak_id'] == '4' OR $pk['status_pihak_id'] == '3') : ?>
                                                                <?php if (isset($pk['pbt_memori'])) : ?>
                                                                    <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($pk['pbt_memori']))); ?></li>
                                                                <?php else : ?>
                                                                    <li class="list-group-item border-0 font-italic text-danger" style="font-size:12px;">Tidak Ada</li>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Penerimaan Kontra Memori Kasasi</li>
                                                        </div>
                                                        <div class="col-4">
                                                        <?php foreach ($perkara_kasasi as $pk) : ?>
                                                            <?php if ($pk['status_pihak_id'] == '4' OR $pk['status_pihak_id'] == '3') : ?>
                                                                <?php if (isset($pk['kontra'])) : ?>
                                                                    <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($pk['kontra']))); ?></li>
                                                                <?php else : ?>
                                                                    <li class="list-group-item border-0 font-italic text-danger" style="font-size:12px;">Tidak Ada</li>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Pemberitahuan Kontra Memori Kasasi</li>
                                                        </div>
                                                        <div class="col-4">
                                                        <?php foreach ($perkara_kasasi as $pk) : ?>
                                                            <?php if ($pk['status_pihak_id'] == '1') : ?>
                                                                <?php if (isset($pk['pbt_kontra'])) : ?>
                                                                    <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($pk['pbt_kontra']))); ?></li>
                                                                <?php else : ?>
                                                                    <li class="list-group-item border-0 font-italic text-danger" style="font-size:12px;">Tidak Ada</li>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Pemeritahuan Inzage Ke Pemohon Kasasi</li>
                                                        </div>
                                                        <div class="col-4">
                                                        <?php foreach ($perkara_kasasi as $pk) : ?>
                                                            <?php if ($pk['status_pihak_id'] == '1') : ?>
                                                                <?php if (isset($pk['pbt_inzage'])) : ?>
                                                                    <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($pk['pbt_inzage']))); ?></li>
                                                                <?php else : ?>
                                                                    <li class="list-group-item border-0 font-italic text-danger" style="font-size:12px;">Tidak Ada</li>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-row" style="margin-top:-11px;">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Pemeritahuan Inzage Ke Termohon Kasasi</li>
                                                        </div>
                                                        <div class="col-4">
                                                        <?php foreach ($perkara_kasasi as $pk) : ?>
                                                            <?php if ($pk['status_pihak_id'] == '4' OR $pk['status_pihak_id'] == '3') : ?>
                                                                <?php if (isset($pk['pbt_inzage'])) : ?>
                                                                    <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($pk['pbt_inzage']))); ?></li>
                                                                <?php else : ?>
                                                                    <li class="list-group-item border-0 font-italic text-danger" style="font-size:12px;">Tidak Ada</li>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Pelaksanaan Inzage Pemohon Kasasi</li>
                                                        </div>
                                                        <div class="col-4">
                                                        <?php foreach ($perkara_kasasi as $pk) : ?>
                                                            <?php if ($pk['status_pihak_id'] == '1') : ?>
                                                                <?php if (isset($pk['inzage'])) : ?>
                                                                    <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($pk['inzage']))); ?></li>
                                                                <?php else : ?>
                                                                    <li class="list-group-item border-0 font-italic text-danger" style="font-size:12px;">Tidak Inzage</li>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-row" style="margin-top:-11px;">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Pelaksanaan Inzage Termohon Kasasi</li>
                                                        </div>
                                                        <div class="col-4">
                                                        <?php foreach ($perkara_kasasi as $pk) : ?>
                                                            <?php if ($pk['status_pihak_id'] == '4' OR $pk['status_pihak_id'] == '3') : ?>
                                                                <?php if (isset($pk['inzage'])) : ?>
                                                                    <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($pk['inzage']))); ?></li>
                                                                <?php else : ?>
                                                                    <li class="list-group-item border-0 font-italic text-danger" style="font-size:12px;">Tidak Inzage</li>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="col" style="margin-top:27.5px">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <p class="card-title"><span class="btn btn-block btn-success px-8" style="font-size:14px">Majelis Hakim</span></p>
                                                        </div>
                                                        <div class="col">
                                                            <p class="card-title"><span class="btn btn-block btn-success px-8" style="font-size:14px">Panitera Pengganti</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="card" style="padding-top:-20px;">
                                                                 <div class="card-body">
                                                                    <?php if ($perkara['hakim1_kasasi'] <> NULL AND $perkara['hakim1_kasasi'] <> NULL AND $perkara['hakim1_kasasi'] <> NULL ) : ?>
                                                                        <p class="card-text">HAKIM KETUA: <?= strtoupper($perkara['hakim1_kasasi']) ?></p>
                                                                        <p class="card-text" style="margin-top:-15px;">HAKIM ANGGOTA 1: <?= strtoupper($perkara['hakim2_kasasi']) ?></p>
                                                                        <p class="card-text" style="margin-top:-15px;">HAKIM ANGGOTA 2: <?= strtoupper($perkara['hakim3_kasasi']) ?></p>
                                                                    <?php else : ?>
                                                                        <p class="card-text">HAKIM KETUA: <i class="text-danger" style="font-size:12px;">Belum Ada</i></p>
                                                                        <p class="card-text" style="margin-top:-15px;">HAKIM ANGGOTA 1: <i class="text-danger" style="font-size:12px;">Belum Ada</i></p>
                                                                        <p class="card-text" style="margin-top:-15px;">HAKIM ANGGOTA 2: <i class="text-danger" style="font-size:12px;">Belum Ada</i></p>
                                                                    <?php endif; ?>
                                                                </div> 
                                                            </div>    
                                                            <div class="card">
                                                                 <div class="card-body">
                                                                    <?php if ($perkara['panitera_pengganti_kasasi'] <> NULL ) : ?>
                                                                        <p class="card-text">PANITERA PENGGANTI: <?= strtoupper($perkara['panitera_pengganti_kasasi']) ?></p>
                                                                    <?php else : ?>
                                                                        <p class="card-text">PANITERA PENGGANTI: <i class="text-danger" style="font-size:12px;">Belum Ada</i></p>
                                                                    <?php endif; ?>
                                                                </div> 
                                                            </div>    
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-7">
                                                            <li class="list-group-item border-0">Tanggal Pengiriman Berkas Kasasi</li>
                                                        </div>
                                                        <div class="col-5">
                                                            <?php if ($perkara['pengiriman_berkas_kasasi'] <> NULL ) : ?>
                                                                <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($perkara['pengiriman_berkas_kasasi']))); ?></li>
                                                            <?php else : ?>
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-row" style="margin-top:-10px;">
                                                        <div class="col-7">
                                                            <li class="list-group-item border-0">Nomor Surat Pengiriman Berkas Kasasi</li>
                                                        </div>
                                                        <div class="col-5">
                                                            <?php if ($perkara['nomor_surat_kasasi'] <> NULL ) : ?>
                                                                <li class="list-group-item border-0"><span class="btn btn-sm btn-danger px-3 text-center" style="font-size:10px; margin-top:-5px" role="button"><?= $perkara['nomor_surat_kasasi']; ?></span></li>
                                                            <?php else : ?>   
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-7">
                                                            <li class="list-group-item border-0">Nomor Perkara Kasasi</li>
                                                        </div>
                                                        <div class="col-5">
                                                            <?php if ($perkara['nomor_perkara_kasasi'] <> NULL ) : ?>
                                                                <li class="list-group-item border-0"><span class="btn btn-sm btn-outline-primary text-center font-weight-bold px-4" style="font-size:11px"><?= $perkara['nomor_perkara_kasasi']; ?></span></li>
                                                            <?php else : ?>   
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-row" style="margin-top:-11px;">
                                                        <div class="col-7">
                                                            <li class="list-group-item border-0">Tanggal Putusan Kasasi</li>
                                                        </div>
                                                        <div class="col-5">
                                                            <?php if ($perkara['putusan_kasasi'] <> NULL ) : ?>
                                                                <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($perkara['putusan_kasasi']))); ?></li>
                                                            <?php else : ?>   
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-7">
                                                            <li class="list-group-item border-0">Tanggal Pemberitahuan Putusan Kasasi</li>
                                                        </div>
                                                        <div class="col-5">
                                                            <?php if ($perkara['pemberitahuan_putusan_kasasi'] <> NULL ) : ?>
                                                                <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($perkara['pemberitahuan_putusan_kasasi']))); ?></li>
                                                            <?php else : ?>   
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-7">
                                                            <li class="list-group-item border-0">Status Putusan Kasasi</li>
                                                        </div>
                                                        <div class="col-5">
                                                            <?php if ($perkara['status_putusan_kasasi_id'] == '3') : ?>
                                                                <li class="list-group-item border-0"><b>DIKABULKAN</b><br><a class="btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#detailPutusanKasasi" style="font-size:11px" role="button">Lihat Amar Putusan Kasasi</a></li>
                                                            <?php elseif ($perkara['status_putusan_kasasi_id'] == '4') : ?>
                                                                <li class="list-group-item border-0"><b>TIDAK DITERIMA</b><br><a class="btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#detailPutusanKasasi" style="font-size:11px" role="button">Lihat Amar Putusan Kasasi</a></li>
                                                            <?php elseif ($perkara['status_putusan_kasasi_id'] == '5') : ?>
                                                                <li class="list-group-item border-0"><b>DITOLAK</b><br><a class="btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#detailPutusanKasasi" style="font-size:11px" role="button">Lihat Amar Putusan Kasasi</a></li>
                                                            <?php else : ?>   
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-7">
                                                            <li class="list-group-item border-0">Tanggal Penerimaan Kembali Berkas Kasasi</li>
                                                        </div>
                                                        <div class="col-5">
                                                            <?php if ($perkara['penerimaan_berkas_kasasi'] <> NULL ) : ?>
                                                                <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($perkara['penerimaan_berkas_kasasi']))); ?></li>
                                                            <?php else : ?>   
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <li class="list-group-item border-0">Panjar Perkara</li>
                                                        </div>
                                                        <div class="col">
                                                            <li class="list-group-item border-0">Pengeluaran</li>
                                                        </div>
                                                        <div class="col">
                                                            <li class="list-group-item border-0">Sisa Panjar</li>
                                                        </div>
                                                    </div>
                                                    <div class="form-row" style="margin-top:-11px;">
                                                        <div class="col">
                                                            <li class="list-group-item border-0"><i class="btn btn-sm btn-light text-center px-3" style="font-size:11px" role="button">Rp. <?= number_format($perkara_biaya['penerimaan_kasasi'], 0, ',', '.'); ?></i></li>
                                                        </div>
                                                        <div class="col">
                                                            <li class="list-group-item border-0"><i class="btn btn-sm btn-light text-center px-3" style="font-size:11px" role="button">Rp. <?= number_format($perkara_biaya['pengeluaran_kasasi'], 0, ',', '.'); ?></i></li>
                                                        </div>
                                                        <div class="col">
                                                            <li class="list-group-item border-0"><i class="btn btn-sm btn-light text-center px-3" style="font-size:11px" role="button">Rp. <?= number_format($perkara_biaya['sisa_kasasi'], 0, ',', '.'); ?></i></li>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>