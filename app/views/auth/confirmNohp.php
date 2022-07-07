<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#">Konfirmasi <b>Password</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><i>Silahkan masukan no handphone yang terdaftar sebelumnya</i></p>
      <p class="login-box-msg"><b>
        <?php

        $noHP =  $data['adm_phone'];
        $jmlSensor = 8;
        $afterVal  = 3;

        // untuk mengambil 4 digit angka ditengah yang disensor
        $sensor = substr($noHP, $afterVal, $jmlSensor);
        
        // untuk memecah bagian/kelompok angka pertama dan terakhir
        $noHP2 = explode($sensor, $noHP);

        //untuk menggabungkan angka pertama dan terakhir dengan angka tengah yang disensor
        $newPhone = $noHP2[0]."xxxxxxxx".$noHP2[1];

        //menampilkan hasil data yang disensor
        echo $newPhone;
        
        
        ?>
      </b></p>
      <div class="row">
        <div class="col-lg">
        <?php FLasher::flash(); ?>
        </div>
      </div>
      <form action="<?php echo BASEURL; ?>/auth/confirmNohp" method="POST">
        <div class="input-group mb-3">
          <input type="number" name="adm_phone" class="form-control" placeholder="No Handphone" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
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

