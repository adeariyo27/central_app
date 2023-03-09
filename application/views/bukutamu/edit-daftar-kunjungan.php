<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color:#F1F2F7;">
                <li class="breadcrumb-item"><a href="<?= base_url('bukutamu/profil_pengunjung') ?>">Daftar Kunjungan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 col-lg">
                <div class="flash-data" data-notifdaftarkunjungan="<?= $this->session->flashdata('message'); ?>"></div>
                <section class="panel">
                    <header class="panel-heading">
                        <?= $title; ?>
                    </header>
                    <div class="panel-body">
                        <form action="" method="POST">
                            <div class="modal-body">
                                <input hidden type="text" class="form-control" id="id" name="id" value="<?= $daftarkunjungan['id']; ?>">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $daftarkunjungan['nama'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="no_tlp">Nomor Telepon</label>
                                            <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="<?= $daftarkunjungan['no_tlp'] ?>">
                                        </div>
                                        <div class="col">
                                            <label for="pekerjaan">Pekerjaan</label>
                                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $daftarkunjungan['pekerjaan'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $daftarkunjungan['alamat'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal Register</label>
                                    <input type="datetime-local" class="form-control" id="tanggal" name="tanggal" value="<?= str_replace(" ", "T", $daftarkunjungan['tanggal']); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="keperluan">Keperluan</label>
                                    <input type="text" class="form-control" id="keperluan" name="keperluan" value="<?= $daftarkunjungan['keperluan'] ?>">
                                </div>
                            </div>
                            <a href="<?= base_url('bukutamu/daftar_kunjungan'); ?>" class="btn btn-sm btn-secondary"> Kembali</a>
                            <button type="submit" class="btn btn-sm btn-primary">Perbaharui</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->