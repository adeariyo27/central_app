<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color:#F1F2F7;">
                <li class="breadcrumb-item"><a href="<?= base_url('perkara/perkaraBHT') ?>">Perkara BHT</a></li>
                <li class="breadcrumb-item active" aria-current="page">Daftar File e-BHT</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 col-lg">
                <div class="flash-data" data-notifregisbht="<?= $this->session->flashdata('message'); ?>"></div>
                <a href="<?= base_url('perkara/uploadBHT'); ?>" class="btn btn-primary mb-3"><i class="icon-file"></i> Tambah File e-BHT</a>
                <section class="panel">
                    <header class="panel-heading">
                        <?= $title; ?>
                    </header>
                    <div class="panel-body">
                        <?= form_open_multipart('perkara'); ?>
                        <div class="adv-table">
                            <table class="table table-bordered table-striped" id="tblUser">
                                <thead>
                                    <tr>
                                        <th style="width:5%">#</th>
                                        <th style="width:60%"> Nomor Perkara</th>
                                        <th style="width:25%"> Tanggal BHT</th>
                                        <th style="width:10%"> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($daftarbht as $r) : ?>
                                        <tr>
                                            <th scope="row" style="width:3%"><?= $no++; ?></th>
                                            <td><?= $r['nomor_perkara']; ?></td>
                                            <td><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['tanggal_bht']))); ?></td>
                                            <td>
                                                <a href="<?= base_url('assets/file_bht/') . $r['file']; ?>" class="badge badge-success px-2" target="_blank"><i class=" icon-print" title="Lihat File"></i></a>
                                                <a href="<?= base_url('perkara/updateBHT/') . $r['perkara_id']; ?>" class="badge badge-primary px-2"><i class=" icon-edit" title="Edit File"></i></a>
                                                <a href="<?= base_url('perkara/deleteBHT/') . $r['perkara_id']; ?>" class="badge badge-danger px-2 tblHapusBht"><i class=" icon-trash" title="Delete File"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
