  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pt-2">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Laporan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan</li>
            </ol>
          </div>
        </div>
      </div>
    </section> -->
    

    <section class="content">
      <div class="container-fluid">
        <!-- baris -->
        <div class="row">
          <div class="col-lg-9">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Grafik Laporan Penjualan
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#terbanyak-chart" data-toggle="tab">Stok Terbanyak</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#tertinggi-chart" data-toggle="tab">Harga Tertinggi</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="chart tab-pane active" id="terbanyak-chart"
                       style="position: relative; height: 400px;">
                      <canvas id="terbanyakChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="tertinggi-chart" style="position: relative; height: 400px;">
                    <canvas id="tertinggiChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $data['total_terjual']; ?></h3>
                <p>Laporan Penjualan</p>
              </div>
              <div class="icon">
              <i class="fas fa-sort-amount-up nav-icon"></i>
              </div>
              <a href="<?php echo BASEURL;?>/laporan/penjualan" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Rp.<?php echo  number_format($data['harga_total']); ?></h3>
                <p>Penjualan Terbanyak</p>
              </div>
              <div class="icon">
              <i class="fas fa-dollar-sign nav-icon"></i>
              </div>
              <a href="<?php echo BASEURL;?>/laporan/terbanyak" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>12</h3>
                <p>Periode Penjualan</p>
              </div>
              <div class="icon">
                <i class="fas fa-plus nav-icon"></i>
              </div>
              <a href="<?php echo BASEURL;?>/laporan/periode" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


        </div>
      </div>
    </section>

    

</div>
<!-- /.content-wrapper -->
