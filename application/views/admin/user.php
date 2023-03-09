<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-md-12 col-lg">
                <?= $this->session->flashdata('message'); ?>
                <section class="panel">
                    <header class="panel-heading">
                        <?= $title; ?>
                    </header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <table class="table table-bordered table-striped" id="tblUser">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> Nama</th>
                                        <th> Username</th>
                                        <th> NIP</th>
                                        <th> Email</th>
                                        <th> Jabatan</th>
                                        <th> No. Handphone</th>
                                        <th> Foto</th>
                                        <th> Role</th>
                                        <th> Aktif</th>
                                        <th> Tanggal Pendaftaran</th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($user_detail as $u) : ?>
                                        <tr>
                                            <th scope="row"><?= $no++; ?></th>
                                            <td><?= $u['name']; ?></td>
                                            <td><?= $u['username']; ?></td>
                                            <td><?= $u['nip']; ?></td>
                                            <td><?= $u['email']; ?></td>
                                            <td><?= $u['jabatan']; ?></td>
                                            <td><?= $u['mobile_phone']; ?></td>
                                            <td style="text-align: center; vertical-align: middle;"><a href="<?= base_url('assets/img/profile/') . $u['image']; ?>" target="_blank" rel="noopener noreferrer"><img height="40" src="<?= base_url('assets/img/profile/') . $u['image']; ?>" alt=""></a></td>
                                            <td><?= $u['role']; ?></td>
                                            <td>
                                                <?php if ($u['is_active'] == "1") {
                                                    echo "Yes";
                                                } else {
                                                    echo "No";
                                                } ?>
                                            </td>
                                            <td><?= tgl_eng_to_ind(date("d-m-Y", $u['date_created'])); ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/editUser/') . $u['id']; ?>" class="badge badge-primary"><i class="icon-pencil"></i> </a>
                                                <a href="<?= base_url('admin/deleteUser/') . $u['id']; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin ingin menghapus User?')"><i class="icon-trash"></i> </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->