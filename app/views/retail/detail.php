  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">
              <a href="<?= BASEURL; ?>/retail/aktif"><i class="fas fa-arrow-left"></i></a> Info Retail
            </h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Retail</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

        <div class="col-lg-10">
          <div class="card" style="height: 10rem;">
            <div class="card-body">
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-3">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                        src="<?= BASEURL; ?>/img/profile_default.png"
                        alt="User profile picture">
                  </div>
                </div>
                
                <div class="col-sm-3 invoice-col">
                  <b><?= $data['retailId']['rtl_name'] ?></b><br>
                  <b>Aktif</b><br>
                  <?= $data['retailId']['rtl_phone'] ?><br>
                  <b>Pemilik : </b><?= $data['retailId']['mb_name'] ?><br>
                  <b>Telp : </b><?= $data['retailId']['rtl_phone'] ?>
                </div>
                <!-- /.col -->
                <div class="col-sm-3 invoice-col">
                  <b>Alamat :</b><br>
                <address>
                <?= $data['retailId']['rtl_addres'] ?>
                <br>
                <?= $data['retailId']['cty_name'] ?>
                  </address>
                  
                </div>
                <!-- /.col -->
                <div class="col-sm-3 invoice-col">
                  <b>Sejak :</b> <?= date("Y-m-d", strtotime($data['retailId']['rtl_create'])); ?> <br>
                  <b>Location </b><br>
                  Longitude : <?= $data['retailId']['rtl_long'] ?><br>
                  Latitude : <?= $data['retailId']['rtl_lat'] ?> <br>

                        <?php if ($data['retailId']['rtl_status'] == 'Review') { ?>
                          <a href="#" class="badge badge-primary">Review</a>
                        <?php } elseif ( $data['retailId']['rtl_status'] == 'Validate' ) { ?>
                          <a href="#" class="badge badge-success">Validate</a>
                        <?php } elseif ( $data['retailId']['rtl_status'] == 'Rejected') { ?>
                          <a href="#" class="badge badge-danger">Rejected</a>
                        <?php } elseif ( $data['retailId']['rtl_status'] == 'Nonactive') { ?>
                          <a href="#" class="badge badge-secondary">Nonactive</a>
                        <?php } ?>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
        </div>

        <div class="col-lg-2">
          <div class="card" style="height: 10rem;">
              <div class="card-body">
               <b>Total Produk :</b><br>
               <b><?= $data['jumlahProduct'];  ?></b>
              </div>
          </div>
        </div>


        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          <div class="card">
              <div class="card-header">
                <h5><b>Daftar Produk</b></h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <!-- <div class="col-3">
                    <div class="input-group mb-3">
                      <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Pilih Kategori..</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Silahkan masukan kata kunci" aria-label="Silahkan masukan kata kunci" aria-describedby="button-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="button-addon2" name="cari">Cari</button>
                      </div>
                    </div>
                  </div> -->

                </div>
                <table id="dataTable" class="table table-hover table-striped">
                  <thead>
                  <tr>
                    <th>Thumbnail</th>
                    <th>Nama Produk</th>
                    <th>Stock</th>
                    <th>Harga</th>
                    <th>Berat</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach( $data['product'] as $row ) : ?>
                    <tr>
                      <td><?= $row['prd_thumbnail'];?></td>
                      <td><?= $row['prd_name'];?></td>
                      <td><?= $row['prd_stock'];?></td>
                      <td>Rp.<?= number_format($row['prd_price']);?></td>
                      <td><?= $row['prd_berat'];?></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <!-- <tbody>
                    <table id="dataTable" class="table table-bordered table-striped text-center">
                    <?php foreach ( $data['product'] as $row ) : ?>
                      <tr>
                        <td><?= $row['prd_thumbnail'];  ?></td>
                        <td><?= $row['prd_name'];  ?></td>
                        <td><?= $row['prd_stock'];  ?></td>
                        <td><?= $row['prd_price'];  ?></td>
                        <td><?= $row['prd_berat'];  ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </table>
                </tbody> -->
              </div>
              <!-- /.card-body -->
            </div> 
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

    

  </div>
  <!-- /.content-wrapper -->
