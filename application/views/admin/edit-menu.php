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
                        <input type="text" class="form-control" id="id" name="id" value="<?= $menu['id']; ?>" hidden readonly>
                        <div class="form-group">
                            <label for="menu">Nama Menu</label>
                            <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu']; ?>">
                            <small class="text-danger" style="font-style:italic"><?= form_error('menu'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="menu">Nama Icon</label>
                            <input type="text" class="form-control" id="icon" name="icon" value="<?= $menu['icon']; ?>">
                            <small class="text-danger" style="font-style:italic"><?= form_error('icon'); ?></small>
                        </div>
                        <a href="<?= base_url('admin/menu'); ?>" type="button" class="btn btn-sm btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </form>
                </div>
            </section>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->