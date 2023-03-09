                                <!-- TINGKAT PERTAMA -->
                                <div class="form-group">
                                    <div class="form-row" >
                                        <div class="col">
                                            <label for=""><strong>TINGKAT PERTAMA</strong></label>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <p class="card-title"><span class="btn btn-block btn-info" style="font-size:14px" href="#">Penggugat</span></p>
                                                            <p class="card-text"><?= strtoupper($perkara['pihak1_text']) ?></p>
                                                        </div>
                                                        <div class="col">
                                                            <p class="card-title"><span class="btn btn-block btn-info" style="font-size:14px" href="#">Tergugat</span></p>
                                                            <p class="card-text"><?= strtoupper($perkara['pihak2_text']) ?></p>
                                                        </div>
                                                        <?php if ($perkara['pihak3_text'] <> NULL ) : ?>
                                                        <div class="col">
                                                            <p class="card-title"><span class="btn btn-block btn-info" style="font-size:14px" href="#">Intervensi</span></p>
                                                            <p class="card-text"><?= strtoupper($perkara['pihak3_text']) ?></p>
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Tanggal Pendaftaran</li>
                                                        </div>
                                                        <div class="col-4">
                                                            <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($perkara['tanggal_pendaftaran']))); ?></li>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Penetapan Dismissal</li>
                                                        </div>
                                                        <div class="col-4">
                                                            <?php if ($perkara['tanggal_penetapan_dis'] <> NULL ) : ?>
                                                                <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($perkara['tanggal_penetapan_dis']))); ?></li>
                                                            <?php else : ?>   
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Penetapan Majelis Hakim</li>
                                                        </div>
                                                        <div class="col-4">
                                                            <?php if ($perkara['pen_mh'] <> NULL ) : ?>
                                                                <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($perkara['pen_mh']))); ?></li>
                                                            <?php else : ?>   
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Penetapan PP/JSP</li>
                                                        </div>
                                                        <div class="col-4">
                                                            <?php if ($perkara['pen_ppjs'] <> NULL ) : ?>
                                                                <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($perkara['pen_ppjs']))); ?></li>
                                                            <?php else : ?>   
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Penetapan Pemeriksaan Persiapan</li>
                                                        </div>
                                                        <div class="col-4">
                                                            <?php if ($perkara['pen_pp'] <> NULL ) : ?>
                                                                <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($perkara['pen_pp']))); ?></li>
                                                            <?php else : ?>   
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Penetapan Hari Sidang</li>
                                                        </div>
                                                        <div class="col-4">
                                                            <?php if ($perkara['pen_hs'] <> NULL ) : ?>
                                                                <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($perkara['pen_hs']))); ?></li>
                                                            <?php else : ?>   
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <!-- <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-7">
                                                            <li class="list-group-item border-0">Court Calendar</li>
                                                        </div>
                                                        <div class="col-5">
                                                            <li class="list-group-item border-0"><a class="btn btn-sm btn-info text-center px-3" data-toggle="modal" data-target="#detailCourtCalendar" style="font-size:11px" role="button">Detail Court Calendar</a></li>
                                                        </div>
                                                    </div>
                                                </ul> -->
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Tanggal Putusan</li>
                                                        </div>
                                                        <div class="col-4">
                                                            <?php if ($perkara['tanggal_putusan'] <> NULL ) : ?>
                                                                <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($perkara['tanggal_putusan']))); ?></li>
                                                            <?php else : ?>   
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Status Putusan</li>
                                                        </div>
                                                        <div class="col-4">
                                                            <?php if ($perkara['status_putusan_id'] == '34') : ?>
                                                                <li class="list-group-item border-0"><b>DIKABULKAN</b><a class="btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#detailPutusan" style="font-size:11px" role="button">Lihat Amar Putusan</a></li>
                                                            <?php elseif ($perkara['status_putusan_id'] == '35') : ?>
                                                                <li class="list-group-item border-0"><b>DITOLAK</b><a class="btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#detailPutusan" style="font-size:11px" role="button">Lihat Amar Putusan</a></li>
                                                            <?php elseif ($perkara['status_putusan_id'] == '36') : ?>
                                                                <li class="list-group-item border-0"><b>TIDAK DITERIMA</b><a class="btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#detailPutusan" style="font-size:11px" role="button">Lihat Amar Putusan</a></li>
                                                            <?php elseif ($perkara['status_putusan_id'] == '37') : ?>
                                                                <li class="list-group-item border-0"><b>DICABUT</b><a class="btn btn-sm btn-warning text-center" data-toggle="modal" data-target="#detailPutusan" style="font-size:11px" role="button">Lihat Amar Putusan</a></li>
                                                            <?php else : ?>   
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-8">
                                                            <li class="list-group-item border-0">Tanggal Minutasi</li>
                                                        </div>
                                                        <div class="col-4">
                                                            <?php if ($perkara['tanggal_minutasi'] <> NULL ) : ?>
                                                                <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($perkara['tanggal_minutasi']))); ?></li>
                                                            <?php else : ?>   
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
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
                                                        <div class="col">
                                                            <p class="card-title"><span class="btn btn-block btn-success px-8" style="font-size:14px">Jurusita Pengganti</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="card" style="padding-top:-20px;">
                                                                 <div class="card-body">
                                                                    <?php if ($perkara['nama_majelis'] <> NULL ) : ?>
                                                                        <p class="card-text"><?= strtoupper($perkara['nama_majelis']) ?></p>
                                                                    <?php else : ?>   
                                                                        <p class="card-text"><i class="text-danger" style="font-size:12px;">Belum Ada</i></p>
                                                                    <?php endif; ?>
                                                                </div> 
                                                            </div>    
                                                            <div class="card">
                                                                 <div class="card-body">
                                                                    <?php if ($perkara['nama_pp'] <> NULL ) : ?>
                                                                        <p class="card-text"><?= strtoupper($perkara['nama_pp']) ?></p>
                                                                    <?php else : ?>   
                                                                        <p class="card-text"><i class="text-danger" style="font-size:12px;">Belum Ada</i></p>
                                                                    <?php endif; ?>
                                                                </div> 
                                                            </div>    
                                                            <div class="card">
                                                                 <div class="card-body">
                                                                    <?php if ($perkara['nama_jsp'] <> NULL ) : ?>
                                                                        <p class="card-text"><?= strtoupper($perkara['nama_jsp']) ?></p>
                                                                    <?php else : ?>   
                                                                        <p class="card-text"><i class="text-danger" style="font-size:12px;">Belum Ada</i></p>
                                                                    <?php endif; ?>
                                                                </div> 
                                                            </div>    
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-7">
                                                            <li class="list-group-item border-0">Tanggal Pemeriksaan Persiapan Pertama</li>
                                                        </div>
                                                        <div class="col-5">
                                                            <?php if ($perkara_persiapan['tanggal_persiapan'] <> NULL ) : ?>
                                                                <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($perkara_persiapan['tanggal_persiapan']))); ?></li>
                                                            <?php else : ?>       
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-row" style="margin-top:-10px;">
                                                        <div class="col-7">
                                                            <li class="list-group-item border-0">Jumlah Pemeriksaan Persiapan</li>
                                                        </div>
                                                        <div class="col-5">
                                                            <?php if ($perkara_persiapan['jumlah_persiapan'] <> NULL AND $perkara_persiapan['jumlah_persiapan'] > '0' ) : ?>
                                                                <li class="list-group-item border-0"><?= $perkara_persiapan['jumlah_persiapan']; ?><a class="btn btn-sm btn-danger ml-2 text-center" data-toggle="modal" data-target="#detailPersiapan" style="font-size:11px" role="button">Detail Pemeriksaan Persiapan</a></li>
                                                            <?php else : ?>       
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </ul>
                                                <ul class="list-group list-group-flush">
                                                    <div class="form-row">
                                                        <div class="col-7">
                                                            <li class="list-group-item border-0">Tanggal Sidang Pertama</li>
                                                        </div>
                                                        <div class="col-5">
                                                            <?php if ($perkara['sidang_pertama'] <> NULL ) : ?>
                                                                <li class="list-group-item border-0"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($perkara['sidang_pertama']))); ?></li>
                                                            <?php else : ?>       
                                                                <li class="list-group-item border-0"><i class="text-danger" style="font-size:12px;">Belum Ada</i></li>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-row" style="margin-top:-11px;">
                                                        <div class="col-7">
                                                            <li class="list-group-item border-0">Jumlah Persidangan</li>
                                                        </div>
                                                        <div class="col-5">
                                                            <?php if ($perkara['jumlah_sidang'] <> NULL AND $perkara['jumlah_sidang'] > '0' ) : ?>
                                                                <li class="list-group-item border-0"><?= $perkara['jumlah_sidang']; ?><a class="btn btn-sm btn-danger ml-2 text-center px-3" data-toggle="modal" data-target="#detailPersidangan" style="font-size:11px" role="button">Detail Jadwal Persidangan</a></li>
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
                                                            <li class="list-group-item border-0"><i class="btn btn-sm btn-light text-center px-3" style="font-size:11px" role="button">Rp. <?= number_format($perkara_biaya['penerimaan'], 0, ',', '.'); ?></i></li>
                                                        </div>
                                                        <div class="col">
                                                            <li class="list-group-item border-0"><i class="btn btn-sm btn-light text-center px-3" style="font-size:11px" role="button">Rp. <?= number_format($perkara_biaya['pengeluaran'], 0, ',', '.'); ?></i></li>
                                                        </div>
                                                        <div class="col">
                                                            <li class="list-group-item border-0"><i class="btn btn-sm btn-light text-center px-3" style="font-size:11px" role="button">Rp. <?= number_format($perkara_biaya['sisa'], 0, ',', '.'); ?></i></li>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>