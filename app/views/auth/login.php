<body class="login-page">
    <div class="card">
      <div class="row no-gutters">
        <div class="col-lg-8">
          <img src="<?php echo BASEURL; ?>/img/background.png" class="card-img" alt="">
        </div>
        <div class="col-lg-4">
          <div class="card-body" style="margin-top: 30%">
            <div class="login-logo">
              <a>Bina <b>App</b> </a>
            </div>
            <div class="card-body login-card-body">
              <p class="login-box-msg"><i>Silahkan login terlebih dahulu</i></p>
              <div class="row">
                <div class="col-lg">
                <?php FLasher::flash(); ?>
                </div>
              </div>
              <form action="<?php echo BASEURL; ?>/auth/prosesLogin" method="post">
                <div class="input-group mb-3">
                  <input type="text" name="adm_username" class="form-control" placeholder="Username" autocomplete="off" required>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" name="adm_password" class="form-control myinput" placeholder="Password" id="pass" required>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span id="mybutton" onclick="change()"><i class="fas fa-eye"></i></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <!-- /.col -->
                  <div class="col-lg">
                    <button type="submit" class="btn btn-primary btn-block">Masuk</button>
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
                <a href="<?php echo BASEURL; ?>/auth/forgot">Lupa password?</a>
              </p>
              <!-- <p class="mb-0">
                <a href="<?php echo BASEURL; ?>/auth/registrasi" class="text-center">Buat akun </a>
              </p> -->
            </div>
            <!-- /.login-card-body -->
          </div>
        </div>
      </div>
    </div>


