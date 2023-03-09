<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
                    <?= $title; ?>
                </header>
                <div class="panel-body">
                    <?= form_open_multipart('user/edit'); ?>
                    <div class="form-group">
                        <label for="namaLengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" name="name" value="<?= $user['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control" id="nip" name="nip" value="<?= $user['nip']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="mobile_phone">Nomor Telepon/HP</label>
                        <input type="number" class="form-control" id="mobile_phone" name="mobile_phone" value="<?= $user['mobile_phone']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="mobile_phone">Jabatan</label>
                        <select name="jabatan" id="jabatan" class="form-control m-bot15">
                            <?php foreach ($jabatan as $jb) : ?>
                                <?php if ($jb['jabatan'] == $jabatanByUser['jabatan']) : ?>
                                    <option class="text-active font-weight-bolder" selected value="<?= $jb['id'] ?>"><?= $jb['jabatan'] ?></option>
                                <?php else : ?>
                                    <option value="<?= $jb['id'] ?>"><?= $jb['jabatan'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_image">Ubah Gambar</label>
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= base_url('user'); ?>" class="btn btn-sm btn-secondary"> Kembali</a>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </section>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->