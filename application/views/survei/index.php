<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Satisfaction Survey form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
    <title><?= $title; ?> </title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?= base_url('vendor/survey-form/html/') ?>img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?= base_url('vendor/survey-form/html/') ?>img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?= base_url('vendor/survey-form/html/') ?>img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?= base_url('vendor/survey-form/html/') ?>img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?= base_url('vendor/survey-form/html/') ?>img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Caveat|Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?= base_url('vendor/survey-form/html/') ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('vendor/survey-form/html/') ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('vendor/survey-form/html/') ?>css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?= base_url('vendor/survey-form/html/') ?>css/custom.css" rel="stylesheet">

</head>

<body class="style_2">

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Preload -->

    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div><!-- /loader_form -->

    <header>
        <div class="container-fluid">
            <div class="flash-data" data-notifsurveiikm="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="row">
                <div class="col-5">
                    <a href="index.html"><img src="<?= base_url('assets/img/profile/') ?>icon.png" alt="" width="50" height="55"></a>
                </div>
                <div class="col-7">
                    <div id="social">
                        <ul>
                            <li><a href="#0"><i class="social_facebook"></i></a></li>
                            <li><a href="#0"><i class="social_twitter"></i></a></li>
                            <li><a href="#0"><i class="social_instagram"></i></a></li>
                            <li><a href="#0"><i class="social_linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </header>
    <!-- /header -->

    <div class="wrapper_centering">
        <div class="container_centering">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                        <div class="main_title_1">
                            <h3><img src="<?= base_url('vendor/survey-form/html/') ?>img/main_icon_1.svg" width="80" height="80" alt=""> Survei IKM</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dolore quidem hic accusamus expedita adipisci quam consequuntur animi asperiores illum.</p>
                            <p><em>- Pengadilan Tata Usaha Negara Palu</em></p>
                        </div>
                    </div>
                    <!-- /col -->
                    <div class="col-xl-5 col-lg-5">
                        <div id="wizard_container">
                            <!-- /top-wizard -->
                            <form id="wrapped" method="POST" autocomplete="off" action="<?= base_url('survei') ?>">
                                <input id="website" name="website" type="text" value="">
                                <!-- Leave for security protection, read docs for details -->
                                <div id="middle-wizard">
                                    <?php
                                    $vb = 1;
                                    $fvb = 1;
                                    $b = 1;
                                    $fb = 1;
                                    $g = 1;
                                    $fg = 1;
                                    $vg = 1;
                                    $fvg = 1;
                                    ?>
                                    <?php foreach ($survei as $s) : ?>
                                        <div class="step">
                                            <h3 class="main_question question_step"><strong><?= $s['kategori']; ?></strong><?= $s['pertanyaan']; ?></h3>
                                            <div class="review_block_smiles">
                                                <ul class="clearfix">
                                                    <li>
                                                        <div class="container_smile">
                                                            <input type="radio" id="very_bad_<?= $vb++ ?>" name="<?= $s['name_attr']; ?>" class="required" value="Sangat Tidak Puas">
                                                            <label class="radio smile_1" for="very_bad_<?= $fvb++ ?>"><span>Sangat Tidak Puas</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="container_smile">
                                                            <input type="radio" id="bad_<?= $b++ ?>" name="<?= $s['name_attr']; ?>" class="required" value="Tidak Puas">
                                                            <label class="radio smile_2" for="bad_<?= $fb++ ?>"><span>Tidak Puas</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="container_smile">
                                                            <input type="radio" id="good_<?= $g++ ?>" name="<?= $s['name_attr']; ?>" class="required" value="Puas">
                                                            <label class="radio smile_4" for="good_<?= $fg++ ?>"><span>Puas</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="container_smile">
                                                            <input type="radio" id="very_good_<?= $vg++ ?>" name="<?= $s['name_attr']; ?>" class="required" value="Sangat Puas">
                                                            <label class="radio smile_5" for="very_good_<?= $fvg++ ?>"><span>Sangat Puas</span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="row justify-content-between add_bottom_25">
                                                    <div class="col-4">
                                                        <em>Sangat Tidak Puas</em>
                                                    </div>
                                                    <div class="col-4 text-end">
                                                        <em>Sangat Puas</em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <!-- /step question-->

                                    <div class="submit step">
                                        <h3 class="main_question">Mohon untuk mengisi data diri dibawah ini</h3>
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" name="nama" id="name" class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_tlp">Nomor Telepon / Handphone</label>
                                            <input type="text" name="no_tlp" id="no_tlp" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="datetime-local" name="tanggal" id="tanggal" class="form-control">
                                        </div>
                                        <!-- /row -->
                                        <!-- <div class="form-group terms">
                                            <label class="container_check">Please accept our <a href="#" data-bs-toggle="modal" data-bs-target="#terms-txt" style="color:#fff; text-decoration: underline;">Terms and conditions</a>
                                                <input type="checkbox" name="terms" value="Yes" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div> -->
                                    </div>
                                    <!-- /step submit-->

                                </div>
                                <!-- /middle-wizard -->

                                <div id="bottom-wizard">
                                    <button type="button" name="backward" class="backward">Prev</button>
                                    <button type="button" name="forward" class="forward">Next</button>
                                    <button type="submit" name="process" class="submit">Submit</button>
                                </div>
                                <!-- /bottom-wizard -->

                            </form>
                        </div>
                        <!-- /Wizard container -->
                    </div>
                    <!-- /col -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container_centering -->
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        ©2021 <?= $title; ?>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container-fluid -->
        </footer>
        <!-- /footer -->
    </div>
    <!-- /wrapper_centering -->

    <!-- Modal terms -->
    <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_1" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- COMMON SCRIPTS -->
    <script src="<?= base_url('vendor/survey-form/html/') ?>js/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('vendor/survey-form/html/') ?>js/common_scripts.min.js"></script>
    <script src="<?= base_url('vendor/survey-form/html/') ?>js/functions.js"></script>

    <!-- Wizard script -->
    <script src="<?= base_url('vendor/survey-form/html/') ?>js/survey_func.js"></script>

    <!-- Script Notification Sweetalert2-->
    <script src="<?= base_url('node_modules/sweetalert2/dist/sweetalert2.all.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/notif.js') ?>"></script>

</body>

</html>