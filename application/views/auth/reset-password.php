<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center my-5">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-reset-image"></div>
                        <div class="col-lg-6 bg-right">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2"><?= $title; ?></h1>
                                    <p class="mb-4 text-warning">Untuk alamat email <?= $this->session->userdata('reset_email'); ?></p>
                                    <?php
                                    $email = $this->input->get('email');
                                    $token = $this->input->get('token');
                                    $cek = $this->db->get_where('user_token', ['email' => $this->session->userdata('reset_email')])->row_array();
                                    if ($this->session->userdata('reset_email') != $cek['email']) {
                                        redirect('auth/ilegalReset/' . urlencode($token));
                                    }
                                    ?>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" action="<?= base_url('auth/changePassword'); ?>" method="POST">
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="new_password" placeholder="Kata Sandi Baru" name="new_password">
                                        <?= form_error('new_password', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="repeatnew_password" placeholder="Ulangi Kata Sandi Baru" name="repeatnew_password">
                                        <?= form_error('repeatnew_password', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Atur Ulang Kata Sandi
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>