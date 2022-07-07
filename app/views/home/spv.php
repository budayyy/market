
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
          <div class="col-sm-6">
            <h1>Welcome Back <b><?= $data['dataSession']['adm_name'];  ?></b></h1>
          </div>
          <div class="col-sm-6">
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

        </div>
        <!-- /.row -->
      
      </div>
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->


