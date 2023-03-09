<div class="container">

    <div class="card o-hidden border-0 shadow-lg wrap-register">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7 bg-right">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
                        </div>
                        <?= $this->session->flashdata('message'); ?>
                        <form class="user" action="<?= base_url('auth/registration') ?>" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" autofocus value="<?= set_value('name') ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?= set_value('username') ?>">
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?= set_value('email') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Kata Sandi">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="repeat_password" id="repeat_password" class="form-control" placeholder="Ulang Kata Sandi">
                                    <?= form_error('repeat_password', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="text-light" href="<?= base_url('auth/forgotpassword'); ?>">Lupa kata sandi?</a>
                        </div>
                        <div class="text-center">
                            <a class="text-light" href="<?= base_url('auth'); ?>">Sudah memiliki akun? Masuk!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>