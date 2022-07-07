
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <div class="content pt-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg">
            <?php FLasher::flash(); ?>
          </div>
        </div>
      </div>  
    </div>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Selamat Datang Kembali <b><?= $data['dataSession']['adm_name']; ?></b></h1>
          </div>
          <div class="col-sm-2">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
      <!-- Baris Pertama -->
      <div class="row">

          <!-- Category -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $data['category']; ?></h3>
                <p>Category</p>
              </div>
              <div class="icon">
              <i class="fas fa-clone nav-icon"></i>
              </div>
              <a href="<?php echo BASEURL;?>/category" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- Shipping -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $data['shipping']; ?></h3>

                <p>Shipping</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-shopping-cart"></i>
              </div>
              <a href="<?php echo BASEURL;?>/shipping" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <!-- Orders -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $data['orders']; ?></h3>

                <p>Orders</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-list-ul"></i>
              </div>
              <a href="<?php echo BASEURL;?>/orders" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <!-- Payment -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $data['payment']; ?></h3>

                <p>Payment</p>
              </div>
              <div class="icon">
              <i class="nav-icon fas fa-credit-card"></i>
              </div>
              <a href="<?php echo BASEURL;?>/payment" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
      </div>
      <!-- /.row -->
      
      <!-- Baris Kedua -->
      <div class="row">

          <!-- Member -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?php echo $data['member']; ?></h3>
                <p>Member</p>
              </div>
              <div class="icon">
              <i class="nav-icon fas fa-users"></i>
              </div>
              <a href="<?php echo BASEURL;?>/member" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-danger">
              <div class="inner">
                <h3><?php echo $data['city']; ?></h3>

                <p>Kota & Kabupaten</p>
              </div>
              <div class="icon">
              <i class="nav-icon fas fa-city"></i>
              </div>
              <a href="<?php echo BASEURL;?>/city" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-primary">
              <div class="inner">
                <h3><?php echo $data['consult']; ?></h3>

                <p>Consultant</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-user-tie"></i>
              </div>
              <a href="<?php echo BASEURL;?>/city" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-success">
              <div class="inner">
                <h3><?php echo $data['builder']; ?></h3>

                <p>Builder</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-users-cog"></i>
              </div>
              <a href="<?php echo BASEURL;?>/city" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
      </div>
      <!-- /.row -->

      <!-- Baris Ketiga -->
      <div class="row">

          <!-- User -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $data['user']; ?></h3>
                <p>User</p>
              </div>
              <div class="icon">
              <i class="nav-icon fas fa-portrait"></i>
              </div>
              <a href="<?php echo BASEURL;?>/user" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <!-- Retail -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?php echo $data['retail']; ?></h3>
                <p>Retail</p>
              </div>
              <div class="icon">
              <i class="nav-icon fas fa-store-alt"></i>
              </div>
              <a href="<?php echo BASEURL;?>/retail/aktif" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
      </div>
      <!-- /.row -->


      </div>
    </section>
    <!-- /.content -->



  </div>
  <!-- /.content-wrapper -->


