<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/login/owl.carousel.min.css'); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/login/bootstrap.min.css'); ?>">
    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/login/style.css'); ?>">
  </head>
  <body>
  <div class="content">
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-6">
          <img src="<?= base_url('assets/img/new-bg-image.png'); ?>" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3 style="letter-spacing: 1px;"><b>Silahkan Login</b></h3>
              <p class="mb-4">Masukkan Username dan Passowrd</p>
            </div>
            <?= $this->session->flashdata('message'); ?>
            <form class="user" action="<?= base_url('auth') ?>" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username">
                <?= form_error('username', '<small class="text-danger mt-4">', '</small>'); ?>
              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
                <?= form_error('password', '<small class="text-danger mt-4">', '</small>'); ?>
              </div>
              <div class="d-flex mb-5 align-items-center">
                <span class="mr-auto" style="letter-spacing: 1px;"><a href="<?= base_url('auth/registration'); ?>" class="forgot-pass"><b>Buat Akun</b></a></span> 
                <span class="ml-auto" style="letter-spacing: 1px;"><a href="<?= base_url('auth/forgotpassword'); ?>" class="forgot-pass"><b>Lupa Password</b></a></span> 
              </div>
              <input type="submit" value="Submit" class="btn btn-block btn-primary">
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="<?= base_url('assets/js/login/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/login/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/login/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/login/main.js'); ?>"></script>
  </body>
</html>