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
                        <input type="text" class="form-control" id="id" name="id" value="<?= $role['id']; ?>" hidden readonly>
                        <div class="form-group">
                            <input type="text" class="form-control" id="role" name="role" value="<?= $role['role']; ?>">
                            <small class="text-danger" style="font-style:italic"><?= form_error('role'); ?></small>
                        </div>
                        <a href="<?= base_url('admin/role'); ?>" class="btn btn-info"> Kembali</a>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </section>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->