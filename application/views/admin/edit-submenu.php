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
                        <input type="text" hidden name="id" value="<?= $submenu['id']; ?>">
                        <div class="form-group">
                            <label for="title">Nama Submenu</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title" value="<?= $submenu['title']; ?>">
                            <small class="text-danger" style="font-style:italic"><?= form_error('title') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="title">Nama Menu</label>
                            <select name="menu_id" id="menu_id" class="form-control">
                                <option class="text-active" selected value="<?= $submenu['menu_id'] ?>"><?= $submenu['menu'] ?></option>
                                <option value="" class="font-italic text-muted"> - Select Menu - </option>
                                <?php foreach ($menu as $m) : ?>
                                    <option value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="text-danger" style="font-style:italic"><?= form_error('menu') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="title">Submenu URL</label>
                            <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url" value="<?= $submenu['url'] ?>">
                            <small class="text-danger" style="font-style:italic"><?= form_error('url') ?></small>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" <?php if ($submenu['is_active'] > 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } ?>>
                                <label class="custom-control-label" for="is_active">Active</label>
                            </div>
                        </div>
                        <a href="<?= base_url('admin/submenu'); ?>" type="button" class="btn btn-sm btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-sm btn-primary">Edit</button>
                    </form>
                </div>
            </section>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->