<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Limmo - Register, Reservation, Questionare, Reviews, Quotation form Multipurpose Wizard with SMTP and HTML email support">
    <meta name="author" content="Ansonika">
    <title><?= $title; ?></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?= base_url('assets/img/gallery/') ?>Icon.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?= base_url('vendor/limmo_v_1.1/') ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('vendor/limmo_v_1.1/') ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('vendor/limmo_v_1.1/') ?>css/vendors.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/jquery-ui.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body class="bg_color_gray">
    <div class="container-fluid">
        <div class="row">
            <div class="flash-data" data-notifbukutamu="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="col d-none d-md-block"></div>
            <div class="col-md-5 col-sm-12" id="bg_color_center">
                <header style="background-color: #ff9900;">
                    <div class="container-fluid">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <!-- <a data-bs-toggle="offcanvas" href="#offcanvasNav" role="button" class="btn_nav"><i class="bi bi-list"></i></a> -->
                            </div>
                            <div class="col-4 text-center">
                                <a href="#"><img src="<?= base_url('assets/') ?>img/gallery/01_formfield.png" alt="" class="img-fluid" width="300"></a>
                            </div>
                            <div class="col-4">
                                <!-- <div id="social">
                                    <ul>
                                        <li><a href="#0"><i class="bi bi-facebook"></i></a></li>
                                        <li><a href="#0"><i class="bi bi-twitter"></i></a></li>
                                        <li><a href="#0"><i class="bi bi-instagram"></i></a></li>
                                    </ul>
                                </div> -->
                                <!-- /social -->
                            </div>
                        </div>
                    </div>
                    <!-- /container -->
                </header>
                <!-- /header -->
                <form action="<?= base_url('bukutamu'); ?>" method="POST">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="mb-1 form-floating">
                                <input type="text" name="no_id" id="no_id" class="form-control" placeholder="Nomor Identitas" autofocus>
                                <label for="no_id">Nomor Identitas</label>
                                <?= form_error('no_id', ' <small class="text-light pl-3">* ', '</small>'); ?>
                            </div>
                            <div class="mb-1 form-floating">
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
                                <label for="nama">Nama</label>
                            </div>
                            <div class="mb-1 form-floating">
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                            </div>
                            <div class="mb-1 form-floating">
                                <input type="number" name="no_tlp" id="no_tlp" class="form-control" placeholder="Nomor Telepon / No HP">
                                <label for="no_tlp">Nomor Telepon / Nomor HP</label>
                            </div>
                            <div class="form-floating mb-1">
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select required" aria-label="jenis_kelamin">
                                    <option value="" disabled selected>-</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                            </div>
                            <div class="form-floating mb-1">
                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Asal / Alamat">
                                <label for="alamat">Asal / Alamat</label>
                            </div>
                            <div class="form-floating mb-1">
                                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="Pekerjaan">
                                <label for="pekerjaan">Pekerjaan</label>
                            </div>
                            <div class="mb-1 form-floating">
                                <input type="datetime-local" name="tanggal" id="tanggal" class="form-control" placeholder="Tanggal Kunjungan">
                                <label for=" tanggal">Tanggal Kunjungan</label>
                            </div>
                            <div class="form-floating mb-1">
                                <input type="text" name="keperluan" id="keperluan" class="form-control" placeholder="Keperluan">
                                <label for="keperluan">Keperluan</label>
                            </div>

                            <div class="row mb-1 mt-1">
                                <div class="col-md-6 d-grid gap-2">
                                    <input class="btn btn-primary btn-sm" type="submit" name="new" value="SIMPAN SEBAGAI DATA BARU" style="margin-top: 5px;">
                                </div>
                                <div class="col-md-6 d-grid gap-2">
                                    <input class="btn btn-success btn-sm" type="submit" name="visit" value="SIMPAN SEBAGAI KUNJUNGAN HARI INI" style="margin-top: 5px;">
                                </div>
                            </div>
                            <a href="<?= base_url('user') ?>" class="btn btn-sm btn-dark d-grid gap-2 mb-2" style="font-style:italic;text-transform:uppercase;">Buka Halaman Admin</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col d-none d-md-block"></div>
        </div>
    </div>

    <script src="<?= base_url('vendor/limmo_v_1.1/') ?>js/common_scripts.min.js"></script>
    <script src="<?= base_url('vendor/limmo_v_1.1/') ?>js/common_functions.js"></script>
    <script src="<?= base_url('vendor/limmo_v_1.1/') ?>assets/validate.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery-ui.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="<?= base_url('vendor/limmo_v_1.1/') ?>js/review_wizard_func.js"></script>

    <!-- Script Notification Sweetalert2-->
    <script src="<?= base_url('node_modules/sweetalert2/dist/sweetalert2.all.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/notif.js') ?>"></script>

    <!-- Autofill Script -->
    <script>
        $(document).ready(function() {
            $('#no_id').autocomplete({
                source: '<?= base_url('bukutamu/get_autofill/?'); ?>',
                select: function(event, ui) {
                    $('[name="no_id"]').val(ui.item.label);
                    $('[name="nama"]').val(ui.item.nama);
                    $('[name="tgl_lahir"]').val(ui.item.tgl_lahir);
                    $('[name="no_tlp"]').val(ui.item.no_tlp);
                    $('[name="jenis_kelamin"]').val(ui.item.jenis_kelamin);
                    $('[name="alamat"]').val(ui.item.alamat);
                    $('[name="pekerjaan"]').val(ui.item.pekerjaan);
                }
            });
        });
        $(document).ready(function() {
            $('#nama').autocomplete({
                source: '<?= base_url('bukutamu/get_autofillnama/?'); ?>',
                select: function(event, ui) {
                    $('[name="no_id"]').val(ui.item.no_id);
                    $('[name="nama"]').val(ui.item.label);
                    $('[name="tgl_lahir"]').val(ui.item.tgl_lahir);
                    $('[name="no_tlp"]').val(ui.item.no_tlp);
                    $('[name="jenis_kelamin"]').val(ui.item.jenis_kelamin);
                    $('[name="alamat"]').val(ui.item.alamat);
                    $('[name="pekerjaan"]').val(ui.item.pekerjaan);
                }
            });
        });
    </script>

</body>

</html>