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
                    <?= $this->session->flashdata('message'); ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="current_password">Kata Sandi Saat Ini</label>
                            <input type="password" class="form-control" id="current_password" name="current_password">
                            <small class="text-danger" style="font-style:italic"><?= form_error('current_password'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="new_password">Kata Sandi Baru</label>
                            <input type="password" class="form-control" id="new_password" name="new_password">
                            <small class="text-danger" style="font-style:italic"><?= form_error('new_password'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="repeat_password">Ulangi Kata Sandi Baru</label>
                            <input type="password" class="form-control" id="repeat_password" name="repeat_password">
                            <small class="text-danger" style="font-style:italic"><?= form_error('repeat_password'); ?></small>
                        </div>
                        <a href="<?= base_url('user'); ?>" class="btn btn-sm btn-secondary"> Kembali</a>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </form>
                </div>
            </section>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->