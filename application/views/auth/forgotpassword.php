<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center my-5">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-forgot-image"></div>
                        <div class="col-lg-6 bg-right">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2"><?= $title; ?></h1>
                                    <p class="mb-4 text-warning">Tenang saja, apapun bisa terjadi. Cukup masukkan email anda yang terdaftar pada form dibawah ini dan kami akan mengirimkan link untuk mengatur ulang kata sandi anda!</p>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" action="<?= base_url('auth/forgotPassword'); ?>" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email" placeholder="Alamat Email" name="email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Atur Ulang Kata Sandi
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="text-light" href="<?= base_url('auth/registration'); ?>">Belum memiliki akun? Buat disini!</a>
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

    </div>

</div>