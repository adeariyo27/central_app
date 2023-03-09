<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
                    Ubah <?= $title; ?>
                </header>
                <div class="panel-body">
                    <?= $this->session->flashdata('message'); ?>
                    <form action="" method="post">
                        <input type="text" hidden name="id" value="<?= $user_detail['id']; ?>">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $user_detail['name']; ?>">
                                    <small class="text-danger" style="font-style:italic"><?= form_error('name') ?></small>
                                </div>
                                <div class="col">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?= $user_detail['username']; ?>">
                                    <small class="text-danger" style="font-style:italic"><?= form_error('username') ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip" value="<?= $user_detail['nip']; ?>">
                            <small class="text-danger" style="font-style:italic"><?= form_error('nip') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $user_detail['email']; ?>">
                            <small class="text-danger" style="font-style:italic"><?= form_error('email') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="mobile_phone">Nomor Handphone</label>
                            <input type="text" class="form-control" id="mobile_phone" name="mobile_phone" value="<?= $user_detail['mobile_phone']; ?>">
                            <small class="text-danger" style="font-style:italic"><?= form_error('mobile_phone') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <select name="jabatan_id" id="jabatan" class="form-control m-bot15">
                                <option class="text-active font-weight-bolder" selected value="<?= $user_detail['jabatan_id'] ?>"><?= $user_detail['jabatan']; ?></option>
                                <option value="" class="font-italic text-muted"> - Pilih Jabatan Lainnya - </option>
                                <?php foreach ($jabatan as $jb) : ?>
                                    <option value="<?= $jb['id'] ?>"><?= $jb['jabatan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role_id" id="role" class="form-control m-bot15">
                                <option class="text-active font-weight-bolder" selected value="<?= $user_detail['role_id'] ?>"><?= $user_detail['role']; ?></option>
                                <option value="" class="font-italic text-muted"> - Pilih Role Lainnya - </option>
                                <?php foreach ($role as $r) : ?>
                                    <option value="<?= $r['id'] ?>"><?= $r['role'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Aktif</label><br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="is_active_yes" name="is_active" value="1" class="custom-control-input" <?php
                                                                                                                                if ($user_detail['is_active'] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } ?>>
                                <label class="custom-control-label" for="is_active_yes">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="is_active_no" name="is_active" value="0" class="custom-control-input" <?php
                                                                                                                                if ($user_detail['is_active'] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } elseif ($user_detail['role_id'] == 1) {
                                                                                                                                    echo "disabled";
                                                                                                                                } ?>>
                                <label class="custom-control-label" for="is_active_no">No</label>
                            </div>
                        </div>
                        <hr>
                        <a href="<?= base_url('admin/user'); ?>" type="button" class="btn btn-sm btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-sm btn-primary">Edit</button>
                    </form>
                </div>
            </section>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->