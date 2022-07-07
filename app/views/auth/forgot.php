<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#">Lupa <b>Password</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><i>Silahkan masukan email yang terdaftar sebelumnya</i></p>
      <div class="row">
        <div class="col-lg">
        <?php FLasher::flash(); ?>
        </div>
      </div>
      <form action="<?php echo BASEURL; ?>/auth/confirmEmail" method="POST">
        <div class="input-group mb-3">
          <input type="email" name="adm_email" class="form-control" placeholder="Email" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-lg">
            <button type="submit" class="btn btn-primary btn-block">Lanjut</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Masuk dengan Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google mr-2"></i> Masuk dengan Gmail
        </a>
      </div> -->
      <!-- /.social-auth-links -->
      <p class="mt-2 text-center">
        <a href="<?php echo BASEURL; ?>">Kembali</a>
      </p>
      <!-- <p class="mb-0">
        <a href="<?php echo BASEURL; ?>/auth/registrasi" class="text-center">Buat akun </a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

