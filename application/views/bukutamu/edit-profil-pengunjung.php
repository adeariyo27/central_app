<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color:#F1F2F7;">
                <li class="breadcrumb-item"><a href="<?= base_url('bukutamu/profil_pengunjung') ?>">Profil Pengunjung</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 col-lg">
                <div class="flash-data" data-notifprofilpengunjung="<?= $this->session->flashdata('message'); ?>"></div>
                <section class="panel">
                    <header class="panel-heading">
                        <?= $title; ?>
                    </header>
                    <div class="panel-body">
                        <form action="" method="POST">
                            <div class="modal-body">
                                <input hidden type="text" class="form-control" id="no_id" name="no_id" value="<?= $profilpengunjung['no_id']; ?>">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $profilpengunjung['nama'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="tgl_lahir">Tanggal lahir</label>
                                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $profilpengunjung['tgl_lahir'] ?>">
                                        </div>
                                        <div class="col">
                                            <label for="no_tlp">Nomor Telepon</label>
                                            <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="<?= $profilpengunjung['no_tlp'] ?>">
                                        </div>
                                        <div class="col">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" aria-label="jenis_kelamin">
                                                <option value="<?= $profilpengunjung['jenis_kelamin'] ?>" style="display: none;" selected><?= $profilpengunjung['jenis_kelamin'] ?> </option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $profilpengunjung['alamat'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $profilpengunjung['pekerjaan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal Register</label>
                                    <input type="datetime-local" class="form-control" id="tanggal" name="tanggal" value="<?= str_replace(" ", "T", $profilpengunjung['tanggal']); ?>">
                                </div>
                            </div>
                            <a href="<?= base_url('bukutamu/profil_pengunjung'); ?>" class="btn btn-sm btn-secondary"> Kembali</a>
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