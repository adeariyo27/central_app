<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>
        <div class="row">
            <aside class="profile-nav col-lg-5">
                <section class="panel">
                    <div class="user-heading round">
                        <a href="#">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="">
                        </a>
                        <h1 class="mt-4" style="font-weight: bold; letter-spacing:1.5px;"><?= $user['name']; ?></h1>
                        <h6 style="letter-spacing:1.5px;"><?= $user['email'] ?></h6>
                        <button type="button" class="btn btn-md btn-light mt-3" onclick="location.href='<?= base_url('user/edit'); ?>';">Perbaharui Profil</button>
                </section>
            </aside>
            <aside class="profile-info col-lg-7">
                <section class="panel">
                    <div class="bio-graph-heading font-weight-bold" style="letter-spacing: 2px">
                        Biodata Lengkap Pengguna Aplikasi
                    </div>
                    <div class="panel-body bio-graph-info">
                        <div class="row">
                            <div class="bio-row">
                                <p><span>Nama Lengkap </span>: <?= $user['name']; ?></p>
                            </div>
                            <div class="bio-row">
                                <p><span>Username </span>: <?= $user['username']; ?> </p>
                            </div>
                            <div class="bio-row">
                                <p><span>NIP </span>: <?= $jabatanByUser['nip']; ?></p>
                            </div>
                            <div class="bio-row">
                                <p><span>Jabatan </span>: <?= $jabatanByUser['jabatan']; ?></p>
                            </div>
                            <div class="bio-row">
                                <p><span>Email </span>: <?= $user['email']; ?></p>
                            </div>
                            <div class="bio-row">
                                <p><span>No. Telepon/Hp </span>: <?= $user['mobile_phone']; ?></p>
                            </div>
                        </div>
                    </div>
                </section>
            </aside>
        </div>

        <!-- page end-->
    </section>
</section>
<!--main content end-->