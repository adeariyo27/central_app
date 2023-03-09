<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-6">
                <?= $this->session->flashdata('message'); ?>
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal"><i class="icon-plus-sign-alt"></i> Tambah Menu </button>
                <section class="panel">
                    <header class="panel-heading">
                        <?= $title; ?>
                    </header>
                    <table class="table table-advance">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><i class="icon-key"></i> Menu</th>
                                <th><i class="icon-star"></i> Icon</th>
                                <th><i class=" icon-edit"></i> Action</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($menu as $m) : ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $m['menu']; ?></td>
                                    <td><?= $m['icon']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/editMenu/') . $m['id']; ?>" class="btn btn-primary btn-sm"><i class="icon-pencil"></i> </a>
                                        <a href="<?= base_url('admin/deleteMenu/') . $m['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus?')"><i class="icon-trash"></i> </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->


<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="newMenuModal">Tambah Menu Baru</h5>
                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/menu'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Nama Icon">
                        <small class="font-italic text-info"> *Untuk melihat daftar nama icon silahkan beralih ke menu "Icon Font Awesome"</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>