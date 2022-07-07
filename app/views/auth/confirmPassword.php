<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#">Reset <b>Password</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><i>Silahkan masukan password baru</i></p>
      <form action="<?php echo BASEURL; ?>/auth/confirmPassword" method="POST">
      <input type="hidden" name="adm_id" class="form-control" value="<?php echo $data['adm_id']?>">
      <div class="form-group">
        <label for="password1">Password Baru</label>
        <input type="password" class="form-control" id="password1" name="password1">
      </div>
      <div class="form-group">
        <label for="password2">Konfirmasi Password Baru</label>
        <input type="password" class="form-control" id="password2" name="password2">
      </div>
        
        <div class="row">
          <!-- /.col -->
          <div class="col-lg">
            <button type="submit" class="btn btn-primary btn-block">Confirm</button>
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
      <!-- <p class="mt-2 text-center">
        <a href="<?php echo BASEURL; ?>">Kembali</a>
      </p> -->
      <!-- <p class="mb-0">
        <a href="<?php echo BASEURL; ?>/auth/registrasi" class="text-center">Buat akun </a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->



